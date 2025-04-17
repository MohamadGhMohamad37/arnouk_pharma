<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductArnoukPharma;
use App\Models\CategoryArnoukPharma;
use Illuminate\Http\Request;

class ProductArnoukPharmaController extends Controller
{
    /**
     * عرض تفاصيل المنتج بناءً على الـ Model المرسل.
     *
     * @param  \App\Models\ProductArnoukPharma  $products_arnouk_pharma
     * @return \Illuminate\View\View
     */
    public function show($lang,ProductArnoukPharma $products_arnouk_pharma)
    {
        
        // الآن يمكننا الوصول إلى الـ Model مباشرةً
        return view('admin.arnouk_pharma.product.product.show', compact('products_arnouk_pharma'));
    }

    /**
     * عرض جميع المنتجات
     *
     * @return \Illuminate\View\View
     */
    public function index($lang)
    {
        
        $products = ProductArnoukPharma::all()->map(function ($item) use ($lang) {
            $item->name = $item["name_{$lang}"];
            $item->description = $item["description_{$lang}"];
            return $item;
        });
        return view('admin.arnouk_pharma.product.product.index', compact('products'));
    }

    /**
     * عرض نموذج إضافة منتج جديد
     *
     * @return \Illuminate\View\View
     */
    public function create($lang)
    {
        $categories = CategoryArnoukPharma::all();
        return view('admin.arnouk_pharma.product.product.create',compact('categories'));
    }

    /**
     * تخزين منتج جديد في قاعدة البيانات
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($lang,Request $request)
    {
        $validatedData = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:category_arnouk_pharma,id',
        ]);

        if ($request->hasFile('image')) {
            $main_image = $request->file('image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/product/image');
            $main_image->move($pathmain_image, $namemain_image);
            $imagePath = "storages/arnouk_pharma/product/image/" . $namemain_image;
        }else {
            $imagePath = null;
        }
        
    $imagesPath = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $ext = $image->getClientOriginalExtension();
            $name = time() . '_' . uniqid() . '.' . $ext;
            $path = public_path('storegs/arnouk_pharma/Product/image/images');
            $image->move($path, $name);
            $imagesPath[] = "storegs/arnouk_pharma/Product/image/images/" . $name;
        }
        

    }

        // إنشاء المنتج
        ProductArnoukPharma::create([
            'name_en' => $validatedData['name_en'],
            'name_ar' => $validatedData['name_ar'],
            'description_en' => $validatedData['description_en'],
            'description_ar' => $validatedData['description_ar'],
            'main_image' => $imagePath,
            'images' => json_encode($imagesPath), // تخزين الصور كمصفوفة بتنسيق JSON
            'category_arnouk_pharma_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('products_arnouk_pharma.index', ['lang' => app()->getLocale()])->with('success', 'Product created successfully');
    }

    /**
     * عرض نموذج تحرير منتج موجود
     *
     * @param  \App\Models\ProductArnoukPharma  $products_arnouk_pharma
     * @return \Illuminate\View\View
     */
    public function edit($lang,ProductArnoukPharma $products_arnouk_pharma)
    {
        $categories = CategoryArnoukPharma::all();
        return view('admin.arnouk_pharma.product.product.edit', compact('products_arnouk_pharma','categories'));
    }

    /**
     * تحديث منتج موجود في قاعدة البيانات
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductArnoukPharma  $products_arnouk_pharma
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($lang,Request $request, ProductArnoukPharma $products_arnouk_pharma)
    {
        $validatedData = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:category_arnouk_pharma,id',
        ]);

        
        // حذف الصورة الرئيسية القديمة إذا تم رفع جديدة
        if ($request->hasFile('image')) {
            if ($products_arnouk_pharma->main_image && file_exists(public_path($products_arnouk_pharma->main_image))) {
                unlink(public_path($products_arnouk_pharma->main_image));
            }

            $main_image = $request->file('image');
            $extmain_image = $main_image->getClientOriginalExtension();
            $namemain_image = time() . '.' . $extmain_image;
            $pathmain_image = public_path('storages/arnouk_pharma/product/image');
            $main_image->move($pathmain_image, $namemain_image);
            $imagePath = "storages/arnouk_pharma/product/image/" . $namemain_image;
        }else{
            $imagePath = $products_arnouk_pharma->main_image;
        }

        
        // حذف الصور القديمة إذا تم رفع صور جديدة
        $imagesPath = [];
        if ($request->hasFile('images')) {
            if ($products_arnouk_pharma->images) {
                $oldImages = json_decode($products_arnouk_pharma->images, true);
                foreach ($oldImages as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }              
            }

            foreach ($request->file('images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $ext;
                $path = public_path('storegs/arnouk_pharma/Product/image/images');
                $image->move($path, $name);
                $imagesPath[] = "storegs/arnouk_pharma/Product/image/images/" . $name;
            }
        }else{
            $imagesPath = $products_arnouk_pharma->images;
        }

        // تحديث المنتج
        $products_arnouk_pharma->update([
            'name_en' => $validatedData['name_en'],
            'name_ar' => $validatedData['name_ar'],
            'description_en' => $validatedData['description_en'],
            'description_ar' => $validatedData['description_ar'],
            'main_image' => $imagePath,
            'images' => json_encode($imagesPath),
            'category_arnouk_pharma_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('products_arnouk_pharma.index', ['lang' => app()->getLocale()])->with('success', 'Product updated successfully');
    }

    /**
     * حذف منتج من قاعدة البيانات
     *
     * @param  \App\Models\ProductArnoukPharma  $products_arnouk_pharma
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($lang,ProductArnoukPharma $products_arnouk_pharma)
    {
        // حذف الصور
        if ($products_arnouk_pharma->main_image && file_exists(public_path($products_arnouk_pharma->main_image))) {
            unlink(public_path($products_arnouk_pharma->main_image));
        }

        if ($products_arnouk_pharma->images) {
            $images = json_decode($products_arnouk_pharma->images, true);
            foreach ($images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }
        $products_arnouk_pharma->delete();
        return redirect()->route('products_arnouk_pharma.index', ['lang' => app()->getLocale()])->with('success', 'Product deleted successfully');
    }
}
