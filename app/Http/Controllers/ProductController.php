<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FilesController;
use App\Models\Product_img;

class ProductController extends Controller
{
    // 圖片觀看頁面

    public function index()
    {
        //將所有Product資料從資料庫拿出來並輸出到列表頁上
        $products = Product::orderBy('id', 'desc')->get();
        $slot = '';
        $header='';
        //回去商品觀看頁面
        return view('product.productindex', compact('products','header','slot'));
    }

    //新增頁面
    public function create()
    {
        $slot = '';
        $header='';
        //準備新增用的表單給使用者填寫
        return view('product.productcreate', compact('header','slot'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $path = FilesController::imgUpload($request->product_img, 'product');

        // dd($path->all());

        $product = product::create([
            'img' => $path,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        //次要圖片
        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'product');

                Product_img::Create([
                    'img_path' => $path,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect('/product');
    }

    //編輯頁面
    public function edit($id)
    {
        $product = product::find($id);
        $product_img = Product_img::get();
        $slot = '';
        $header='';

        // dd($product_img);

        return view('product.productedit', compact('product','header','slot'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);


        if ($request->hasfile('img')) {
            FilesController::deleteUpload($product->img); //小工具刪除圖片
            $path = FilesController::imgUpload($request->img, 'product');

            $product->img = $path;
        }
        // 商品名稱, 介紹, 價格, 數量

        //次要圖片

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $index => $element) {
                $path = FilesController::imgUpload($element, 'product');

                Product_img::Create([
                    'img_path' => $path,
                    'product_id' => $product->id,
                ]);
            }
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        $product->save();

        return redirect('/product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);


        $imgs = product_img::where('product_id', $id)->get();

        foreach ($imgs as $key => $value) {
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }

        FilesController::deleteUpload($product->img);
        $product->delete();

        return redirect('/product');
    }

    public function delete_img($img_id)
    {
        $img = product_img::find($img_id);


        FilesController::deleteUpload($img->img_path);

        $product_id = $img->product_id;

        $img->delete();

        return redirect('/product/edit/' . $product_id);
    }


    public function productinfo($id){

        //主要圖片與描述

        // dd($id);
        $product = product::find($id);
        // dd($product);
        $product_img = Product_img::get();
        $product2 = product::find($id)->where('id',$id)->get();
        // dd($product);

        return view('shopping.productinfo',compact('product','product_img','product2'));
    }



}
