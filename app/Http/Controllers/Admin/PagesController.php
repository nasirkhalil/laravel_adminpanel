<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Page;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::all();
        return view('admin.pages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Page::where(['parent'=>0])->select('id','name')->get();
        return view('admin.pages.create',compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertAbl = $request->except('banner');
        if($files = $request->file('banner')){
            // $request->banner->move(base_path('uploads/pages'), $imageName);
            $path = $request->file('banner')->store('pages','uploads');
            $insertAbl['banner'] = $path;

        }
        if($request->parent > 0){
            $parent_slug = Page::where('id',$request->parent)->first()->slug."/";
        }else{
            $parent_slug = "";
        }
        $insertAbl['slug'] = $parent_slug.str_slug($insertAbl['name']);
        // echo "<pre>"; print_r($request->all()); die();
        $page = Page::create($insertAbl);
        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $parents = Page::where(['parent'=>0])->select('id','name')->get();
        return view('admin.pages.edit', compact('page','parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $insertAbl = $request->except('banner');
        if($request->hasFile('banner')){
            Storage::disk('uploads')->delete($page->banner);
            $path = $request->file('banner')->store('pages','uploads');
            // echo $contents = Storage::disk('uploads')->url($path);
            $insertAbl['banner'] = $path;
        }
        if($request->parent > 0){
            $parent_slug = Page::where('id',$request->parent)->first()->slug."/";
        }else{
            $parent_slug = "";
        }
        $insertAbl['slug'] = $parent_slug.str_slug($insertAbl['name']);
        $page->update($insertAbl);
        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
