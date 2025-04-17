<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventArnoukPharma;
use Illuminate\Http\Request;

class EventArnoukPharmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
{
    $events = EventArnoukPharma::all();
    return view('admin.arnouk_pharma.event.index', compact('events'));
}

public function create()
{
    return view('admin.arnouk_pharma.event.create');
}

public function store($lang,Request $request)
{
    $data = $request->validate([
        'name_en' => 'required|string',
        'name_ar' => 'required|string',
        'description_en' => 'nullable|string',
        'description_ar' => 'nullable|string',
        'image' => 'nullable|image',
        'gallery_images.*' => 'nullable|image',
        'event_date' => 'required|date',
        'event_time' => 'required',
        'event_location' => 'required|string',
    ]);

    
    if ($request->hasFile('image')) {
        $main_image = $request->file('image');
        $extmain_image = $main_image->getClientOriginalExtension();
        $namemain_image = time() . '.' . $extmain_image;
        $pathmain_image = public_path('storages/arnouk_pharma/event_gallery/image');
        $main_image->move($pathmain_image, $namemain_image);
        $data['image'] = "storages/arnouk_pharma/event_gallery/image/" . $namemain_image;
    }else {
        $data['image'] = null;
    }
    
if ($request->hasFile('gallery_images')) {
    $gallery = [];
    foreach ($request->file('gallery_images') as $image) {
        $ext = $image->getClientOriginalExtension();
        $name = time() . '_' . uniqid() . '.' . $ext;
        $path = public_path('storages/arnouk_pharma/event_gallery/image/images');
        $image->move($path, $name);



        $gallery[] = "storages/arnouk_pharma/event_gallery/image/images/" . $name;
    }
    $data['gallery_images'] = json_encode($gallery);

}

    EventArnoukPharma::create($data);
    return redirect()->route('event_arnouk_pharma.index', ['lang' => app()->getLocale()])->with('success', 'Event created!');
}

public function edit($lang,EventArnoukPharma $event_arnouk_pharma)
{
    return view('admin.arnouk_pharma.event.edit', ['event' => $event_arnouk_pharma]);
}

public function update($lang,Request $request, EventArnoukPharma $event_arnouk_pharma)
{
    $data = $request->validate([
        'name_en' => 'required|string',
        'name_ar' => 'required|string',
        'description_en' => 'nullable|string',
        'description_ar' => 'nullable|string',
        'image' => 'nullable|image',
        'gallery_images.*' => 'nullable|image',
        'event_date' => 'required|date',
        'event_time' => 'required',
        'event_location' => 'required|string',
    ]);

    
        // حذف الصورة الرئيسية القديمة إذا تم رفع جديدة
        if ($request->hasFile('image')) {
            if ($event_arnouk_pharma->image && file_exists(public_path($event_arnouk_pharma->image))) {
                unlink(public_path($event_arnouk_pharma->image));
            }

            $main_image = $request->file('image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/event_gallery/image');
            $main_image->move($pathmain_image, $namemain_image);
            $data['image'] = "storages/arnouk_pharma/event_gallery/image/" . $namemain_image;
        }

        
        // حذف الصور القديمة إذا تم رفع صور جديدة
        $imagesPath = [];
        if ($request->hasFile('gallery_images')) {
            if ($event_arnouk_pharma->gallery_images) {
                $oldImages = json_decode($event_arnouk_pharma->gallery_images, true);
                foreach ($oldImages as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }              
            }

            foreach ($request->file('gallery_images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $ext;
                $path = public_path('storages/arnouk_pharma/event_gallery/image/images');
                $image->move($path, $name);
                $imagesPath[] = "storages/arnouk_pharma/event_gallery/image/images/" . $name;
            }
            $data['gallery_images'] = json_encode($imagesPath);
        }

    $event_arnouk_pharma->update($data);
    return redirect()->route('event_arnouk_pharma.index', ['lang' => app()->getLocale()])->with('success', 'Event updated!');
}
public function show($lang,EventArnoukPharma $event_arnouk_pharma){
    return view('admin.arnouk_pharma.about.show',compact('event_arnouk_pharma'));
}

public function destroy($lang,EventArnoukPharma $event_arnouk_pharma)
{
    
        // حذف الصور
        if ($event_arnouk_pharma->image && file_exists(public_path($event_arnouk_pharma->image))) {
            unlink(public_path($event_arnouk_pharma->image));
        }

        if ($event_arnouk_pharma->gallery_images) {
            $images = json_decode($event_arnouk_pharma->gallery_images, true);
            foreach ($images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }
    $event_arnouk_pharma->delete();
    return redirect()->route('event_arnouk_pharma.index', ['lang' => app()->getLocale()])->with('success', 'Event deleted!');
}

}
