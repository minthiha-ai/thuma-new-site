<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use App\Category;
use Intervention\Image\Facades\Image;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = Content::orderby('id','desc')->paginate(6);
        $cat = Category::orderby('id','desc')->get();
        return view('admin.contents.index',compact('c','cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::orderby('id','desc')->get();
        return view('admin.contents.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
          	'date'	=>	'required',
            'photos' => 'required',
            'author' => 'required'
        ]);

        $photo_path = 'uploads/contents/photos/';
        $c = new Content();
        $c->title = $request->title;
        $c->category_id = $request->category_id;
        $c->content = $request->content;
      	$c->date = $request->date;
        $c->author = $request->author;
        if($request->hasfile('photos')){
            $imgs = $request->photos;    
            $photo = uniqid('thuma').'img.'.$imgs[0]->getClientOriginalExtension();
            $c->photos = $photo;
        }else{
            $c->photos = '';   
        }
        if($c->save()){
            if($request->hasfile('photos')){
                if (!file_exists($photo_path)){
                    mkdir($photo_path, 777,true);
                }
                $imgs[0]->move($photo_path,$photo);
                // $photo = Image::make($imgs[0]->getRealPath());
                // $photo->save($photo_path.$photo);
            }
        }
        return redirect(route('admin.content.index'))->with('success','A New content is created successfully!');
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
        $c = Content::find($id);
        $cat = Category::orderby('id','desc')->get();
        return view('admin.contents.edit',compact('c','cat'));
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
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
          	'date'	=> 'required',
            'author' => 'required'
        ]);
        $photo_path = 'uploads/contents/photos/';
        $c = Content::find($id);
        $c->title = $request->title;
        $c->category_id = $request->category_id;
        $c->content = $request->content;
      	$c->date = $request->date;
        $c->author = $request->author;
        if($c->photos == '' && $request->photos == '' && $request->old_photos == ''){
            $image = '';
        }
        if($c->photos != '' && $request->photos == '' && $request->old_photos != ''){
            $image = $c->photos;
        }
        if($c->photos != '' && $request->photos == '' && $request->old_photos == ''){
            if (file_exists($photo_path.$c->photos)) {
                unlink($photo_path.$c->photos);
            }
            $image = '';
        }
        if ($c->photos != '' && $request->photos != '' && $request->old_photos == '') {
            if (file_exists($photo_path.$c->photos)) {
                unlink($photo_path.$c->photos);
            }
            $img = $request->photos[0];
            $image = uniqid('thuma').'img.'.$img->getClientOriginalExtension();
        }elseif($c->photos == '' && $request->photos != '' && $request->old_photos == ''){
            $img = $request->photos[0];
            $image = uniqid('thuma').'img.'.$img->getClientOriginalExtension();
        }
        $c->photos = $image;
        if($c->save()){
            if($request->photos){
                if(!file_exists($photo_path)){
                    mkdir($photo_path,777,true);
                }
                $img->move($photo_path,$image);
                // $photo = Image::make($img->getRealPath());
                // $photo->save($photo_path.$image);
            }
        }
        return redirect(route('admin.content.index'))->with('success','The content updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Content::find($id);
        if ($c->photos != '') {
            if (file_exists('uploads/contents/photos/'.$c->photos)){
                unlink('uploads/contents/photos/'.$c->photos);
            }
        }
        Content::where('id',$id)->delete();
        return redirect()->back()->with('success','The content deleted successfully!');
    }
}
