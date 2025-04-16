<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryArnoukPharma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryArnoukPharmaController extends Controller
{
    // عرض قائمة الفئات
    public function index($lang)
    {
        $categories = CategoryArnoukPharma::all()->map(function ($item) use ($lang) {
            $item->name = $item["name_{$lang}"];
            $item->description = $item["description_{$lang}"];
            return $item;
        });
        return view('admin.arnouk_pharma.product.category.index', compact('categories'));
    }

    // عرض نموذج إنشاء فئة جديدة
    public function create($lang)
    {
        return view('admin.arnouk_pharma.product.category.create');
    }
    // حفظ الفئة الجديدة
    public function store($lang,Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->only(['name_en', 'name_ar', 'description_en', 'description_ar']);

        // حفظ الصورة الرئيسية
        if ($request->hasFile('image')) {
            $main_image = $request->file('image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/category/image');
            $main_image->move($pathmain_image, $namemain_image);
            $data['image'] = "storages/arnouk_pharma/category/image/" . $namemain_image;
        }

        // صور متعددة
        $imagesPaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $ext;
                $path = public_path('storages/arnouk_pharma/category/gallery_images');
                $image->move($path, $name);
                $imagesPaths[] = "storages/arnouk_pharma/category/gallery_images/" . $name;
            }
            $data['gallery_images'] = json_encode($imagesPaths);
        }
        CategoryArnoukPharma::create($data);

        return redirect()->route('category_arnouk_pharma.index', ['lang' => app()->getLocale()]);
    }

    // عرض نموذج تحرير فئة
    public function edit($lang, CategoryArnoukPharma $category_arnouk_pharma)
    {
        return view('admin.arnouk_pharma.product.category.edit', compact('category_arnouk_pharma'));
    }

    // تحديث الفئة
    public function update($lang,Request $request, CategoryArnoukPharma $category_arnouk_pharma)
    {

        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->only(['name_en', 'name_ar', 'description_en', 'description_ar']);

        // حذف الصورة الرئيسية القديمة إذا تم رفع جديدة
        if ($request->hasFile('image')) {
            if ($category_arnouk_pharma->image && file_exists(public_path($category_arnouk_pharma->image))) {
                unlink(public_path($category_arnouk_pharma->image));
            }

            $main_image = $request->file('image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/category/image');
            $main_image->move($pathmain_image, $namemain_image);
            $data['image'] = "storages/arnouk_pharma/category/image/" . $namemain_image;
        }


        // حذف الصور القديمة إذا تم رفع صور جديدة
        $imagesPaths = [];
        if ($request->hasFile('gallery_images')) {
            if ($category_arnouk_pharma->gallery_images) {
                $oldImages = json_decode($category_arnouk_pharma->gallery_images, true);
                foreach ($oldImages as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }

            foreach ($request->file('gallery_images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $ext;
                $path = public_path('storages/arnouk_pharma/category/images');
                $image->move($path, $name);
                $imagesPaths[] = "storages/arnouk_pharma/category/images/" . $name;
            }
            $data['gallery_images'] = json_encode($imagesPaths);
        }
        $category_arnouk_pharma->update($data);

        return redirect()->route('category_arnouk_pharma.index', ['lang' => app()->getLocale()]);
    }

    public function show($lang,CategoryArnoukPharma $category_arnouk_pharma)
    {
        return view('admin.arnouk_pharma.product.category.show', compact('category_arnouk_pharma'));
    }

    // حذف الفئة
    public function destroy($lang,CategoryArnoukPharma $category_arnouk_pharma)
    {
        // حذف الصور
        if ($category_arnouk_pharma->image && file_exists(public_path($category_arnouk_pharma->image))) {
            unlink(public_path($category_arnouk_pharma->image));
        }

        if ($category_arnouk_pharma->gallery_images) {
            $images = json_decode($category_arnouk_pharma->gallery_images, true);
            foreach ($images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $category_arnouk_pharma->delete();

        return redirect()->route('category_arnouk_pharma.index', ['lang' => app()->getLocale()]);
    }
}
