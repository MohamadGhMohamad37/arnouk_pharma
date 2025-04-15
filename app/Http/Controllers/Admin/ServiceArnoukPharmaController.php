<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceArnoukPharma;
use Illuminate\Http\Request;

class ServiceArnoukPharmaController extends Controller
{
    public function index($lang)
    {
        $services = ServiceArnoukPharma::all()->map(function ($item) use ($lang) {
            $item->name = $item["name_{$lang}"];
            $item->description = $item["description_{$lang}"];
            return $item;
        });
        return view('admin.arnouk_pharma.service.index', compact('services'));
    }
    public function show($lang,ServiceArnoukPharma $service)
    {
        return view('admin.arnouk_pharma.service.show', compact('service'));
    }

    public function create($lang)
    {
        return view('admin.arnouk_pharma.service.create', compact('lang'));
    }

    public function store($lang, Request $request)
    {
        $data = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'main_image' => 'nullable|image',
            'images.*' => 'nullable|image',
        ]);

        // صورة رئيسية
        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/service/image');
            $main_image->move($pathmain_image, $namemain_image);
            $data['main_image'] = "storages/arnouk_pharma/service/image/" . $namemain_image;
        }

        // صور متعددة
        $imagesPaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $ext;
                $path = public_path('storages/arnouk_pharma/service/images');
                $image->move($path, $name);
                $imagesPaths[] = "storages/arnouk_pharma/service/images/" . $name;
            }
            $data['images'] = json_encode($imagesPaths);
        }

        ServiceArnoukPharma::create($data);

        return redirect()->route('service.index', ['lang' => app()->getLocale()])->with('success', 'Created successfully');
    }

    public function edit($lang, ServiceArnoukPharma $service)
    {
        return view('admin.arnouk_pharma.service.edit', compact('service', 'lang'));
    }

    public function update($lang, Request $request, ServiceArnoukPharma $service)
    {
        $data = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'main_image' => 'nullable|image',
            'images.*' => 'nullable|image',
        ]);

        // حذف الصورة الرئيسية القديمة إذا تم رفع جديدة
        if ($request->hasFile('main_image')) {
            if ($service->main_image && file_exists(public_path($service->main_image))) {
                unlink(public_path($service->main_image));
            }

            $main_image = $request->file('main_image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/service/image');
            $main_image->move($pathmain_image, $namemain_image);
            $data['main_image'] = "storages/arnouk_pharma/service/image/" . $namemain_image;
        }

        // حذف الصور القديمة إذا تم رفع صور جديدة
        $imagesPaths = [];
        if ($request->hasFile('images')) {
            if ($service->images) {
                $oldImages = json_decode($service->images, true);
                foreach ($oldImages as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }

            foreach ($request->file('images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $ext;
                $path = public_path('storages/arnouk_pharma/service/images');
                $image->move($path, $name);
                $imagesPaths[] = "storages/arnouk_pharma/service/images/" . $name;
            }
            $data['images'] = json_encode($imagesPaths);
        }

        $service->update($data);

        return redirect()->route('service.index', ['lang' => app()->getLocale()])->with('success', 'Updated successfully');
    }

    public function destroy($lang, ServiceArnoukPharma $service)
    {
        // حذف الصور
        if ($service->main_image && file_exists(public_path($service->main_image))) {
            unlink(public_path($service->main_image));
        }

        if ($service->images) {
            $images = json_decode($service->images, true);
            foreach ($images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $service->delete();

        return redirect()->route('service.index', ['lang' => app()->getLocale()])->with('success', 'Deleted successfully');
    }
}
