<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use App\Http\Controllers\FilesController;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //將所有banner資料從資料庫拿出來並輸出到列表頁上
        $banners = banner::orderBy('id', 'desc')->get();
        $slot = '';
        $header = '';
        //Banner首頁
        return view('banner.index', compact('banners', 'header', 'slot'));
    }

    //banner 新增組

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //準備新增用的表單給使用者填寫
        $slot = '';
        $header = '';
        return view('banner.create', compact('header', 'slot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //將使用者的資料經過處理(EX:檔案上傳/防呆.....)後,新增至資料庫

        $path = Storage::disk('local')->put(
            'public/banner',
            $request->img_path
        );

        $path = str_replace('public', 'storage', $path);

        banner::create([
            'img_path' => '/' . $path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->weight,
        ]);

        return redirect('/banner');
    }

    //banner 編輯組

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //根據id找到想編輯的資料,將資料連同編輯用的表單畫面回傳給使用者
        $banner = banner::find($id);
        $slot = '';
        $header = '';
        return view('banner.edit', compact('banner', 'header', 'slot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //根據id找到想編輯的資料
        $banner = banner::find($id);

        if ($request->hasfile('banner_img')) {
            //經過處理(EX:檔案上傳/防呆.....)後
            $path = Storage::disk('local')->put(
                'public/banner',
                $request->img_path
            );
            $path = str_replace('public', 'storage', $path);

            //將舊有的資料檔案刪除

            $target = str_replace('/storage', 'public', $banner->img_path);
            Storage::Disk('local')->delete($target);

            //將新的資料更新到資料庫裏面
            $banner->img_path = '/' . $path;
        }

        $banner->img_opacity = $request->img_opacity;
        $banner->weight = $request->weight;
        $banner->save();

        //
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //使用ID找到要刪除的資料, 並且連同相關檔案一起刪除
        $banner = banner::find($id);

        $target = str_replace('/storage', 'public', $banner->img);
        Storage::disk('local')->delete($target);
        $banner->delete();

        //
        return redirect('/banner'); //重新導向(送出新的request)到列表
    }
}
