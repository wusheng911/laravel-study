<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentCategory;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.content.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ContentCategory::all();
        return view('admin.content.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->input('content');
        $content = Content::create($inputs);
        return $this->edit($content->id);
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
    public function edit($id)
    {
        //
        $content = Content::find($id);
        $categories = ContentCategory::all();
        return view('admin.content.edit',['content'=>$content,'categories'=>$categories]);
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
        //
        $aContent = $request->input('content');
        $content = Content::find($id);
        $content->update($aContent);
        return $this->index();
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
    public function list(Request $request)
    {

        $draw = (int) $request->input('draw');
        $start = (int) $request->input('start');
        $length = (int) $request->input('length');

        /* Log::info('draw'.$draw.' '.$start.' '.$length); */

        $count = Content::all()->count();
        $contents = Content::skip($start)->take($length)->get();
        /* Log::info('count::'.$count); */
        $json = ['recordsTotal' => $count,
                 'recordsFiltered' => $count,
                 'draw' => $draw,
                 'data' => $contents];

        /* Log::info(response()->json($json)); */
        return response()->json($json);
    }
}
