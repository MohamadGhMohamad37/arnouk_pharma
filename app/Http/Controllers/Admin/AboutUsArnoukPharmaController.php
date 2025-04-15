<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUsArnoukPharma;
class AboutUsArnoukPharmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        if (!in_array($lang, ['en', 'ar'])) {
            abort(404);
        }
        
        $abouts = AboutUsArnoukPharma::all()->map(function ($item) use ($lang) {
            $item->name = $item["name_{$lang}"];
            $item->description = $item["description_{$lang}"];
            return $item;
        });
        return view('admin.arnouk_pharma.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.arnouk_pharma.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($lang,Request $request)
{
    $data = $request->validate([
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
        'description_en' => 'required|string',
        'description_ar' => 'required|string',
        'main_image' => 'nullable|image',
        'images.*' => 'nullable|image',
        'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
    ]);


    if ($request->hasFile('main_image')) {
        $main_image = $request->file('main_image');
        $extmain_image = $main_image->getClientOriginalExtension();
        $namemain_image = time() . '.' . $extmain_image;
        $pathmain_image = public_path('storages/arnouk_pharma/about/image');
        $main_image->move($pathmain_image, $namemain_image);
        $data['main_image'] = "storages/arnouk_pharma/about/image/" . $namemain_image;
    }
    $imagesPaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $ext = $image->getClientOriginalExtension();
            $name = time() . '_' . uniqid() . '.' . $ext;
            $path = public_path('storegs/Product/image');
            $image->move($path, $name);
            $imagesPaths[] = "storegs/Product/image/" . $name;
        }
        $data['images'] = json_encode($imagesPaths);

    }

    // رفع الفيديو
    if ($request->hasFile('video')) {
        $data['video'] = $request->file('video')->store('about/video', 'public');
    }
    if ($request->hasFile('video')) {
        $video = $request->file('video');
        $extvideo = $video->getClientOriginalExtension();
        $namevideo = time() . '.' . $extvideo;
        $pathvideo = public_path('storages/arnouk_pharma/about/video');
        $video->move($pathvideo, $namevideo);
        $data['video'] = "storages/arnouk_pharma/about/video/" . $namevideo;
    }

    AboutUsArnoukPharma::create($data);

    return redirect()->route('about.index', ['lang' => app()->getLocale()])->with('success', 'Created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show($lang,AboutUsArnoukPharma $about)
    {
        return view('admin.arnouk_pharma.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lang, AboutUsArnoukPharma $about)
    {
        app()->setLocale($lang);
        return view('admin.arnouk_pharma.about.edit', compact('about'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update($lang, Request $request, AboutUsArnoukPharma $about)
    {
            $data = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'main_image' => 'nullable|image',
            'images.*' => 'nullable|image',
            'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
        ]);
    // حذف الصورة الرئيسية القديمة إذا تم رفع واحدة جديدة
if ($request->hasFile('main_image')) {
    if ($about->main_image && file_exists(public_path($about->main_image))) {
        unlink(public_path($about->main_image));
    }

    $main_image = $request->file('main_image');
    $extmain_image = $main_image->getClientOriginalExtension();
    $namemain_image = time() . '.' . $extmain_image;
    $pathmain_image = public_path('storages/arnouk_pharma/about/image');
    $main_image->move($pathmain_image, $namemain_image);
    $data['main_image'] = "storages/arnouk_pharma/about/image/" . $namemain_image;
}

// حذف الصور المتعددة القديمة إذا تم رفع صور جديدة
$imagesPaths = [];
if ($request->hasFile('images')) {
    // حذف الصور القديمة
    if ($about->images) {
        $oldImages = json_decode($about->images, true);
        foreach ($oldImages as $oldImage) {
            if (file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }
        }
    }

    // رفع الصور الجديدة
    foreach ($request->file('images') as $image) {
        $ext = $image->getClientOriginalExtension();
        $name = time() . '_' . uniqid() . '.' . $ext;
        $path = public_path('storegs/Product/image');
        $image->move($path, $name);
        $imagesPaths[] = "storegs/Product/image/" . $name;
    }
    $data['images'] = json_encode($imagesPaths);
}

// حذف الفيديو القديم إذا تم رفع فيديو جديد
if ($request->hasFile('video')) {
    if ($about->video && file_exists(public_path($about->video))) {
        unlink(public_path($about->video));
    }

    $video = $request->file('video');
    $extvideo = $video->getClientOriginalExtension();
    $namevideo = time() . '.' . $extvideo;
    $pathvideo = public_path('storages/arnouk_pharma/about/video');
    $video->move($pathvideo, $namevideo);
    $data['video'] = "storages/arnouk_pharma/about/video/" . $namevideo;
}

    
        $about->update($data);
    
        return redirect()->route('about.index', ['lang' => app()->getLocale()])
            ->with('success', 'Updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lang, AboutUsArnoukPharma $about)
{
    // حذف الصورة الرئيسية إذا وُجدت
    if ($about->main_image && file_exists(public_path($about->main_image))) {
        unlink(public_path($about->main_image));
    }

    // حذف الفيديو إن وُجد
    if ($about->video && file_exists(public_path($about->video))) {
        unlink(public_path($about->video));
    }

    // حذف الصور الإضافية إن وُجدت
    if ($about->images && is_array(json_decode($about->images))) {
        foreach (json_decode($about->images) as $image) {
            if (file_exists(public_path($image))) {
                unlink(public_path($image));
            }
        }
    }
    $name = $about->{'name_' . $lang};

    // حذف السجل من قاعدة البيانات
    $about->delete();

    // رسالة نجاح
    return redirect()->route('about.index', ['lang' => $lang])
        ->with('success', "Deleted $name successfully");
}

}
