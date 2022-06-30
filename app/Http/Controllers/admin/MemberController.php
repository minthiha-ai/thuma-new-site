<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MemberInfo;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m = MemberInfo::orderby('id','desc')->paginate(6);
        // return $m;
        return view('admin.members.index',compact('m'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
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
            'photo' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required:email',
            'education' => 'required',
            'job' => 'required',
            'position' => 'required',
            'description'=> 'required'
        ]);
        $photo_path = 'uploads/members/photos/';
        $m = new MemberInfo();
    
        if($request->hasfile('photo')){
            $imgs = $request->photo;    
            $photo = uniqid('thuma').'img.'.$imgs[0]->getClientOriginalExtension();
            $m->photo = $photo;
        }else{
            $m->photo = '';   
        }
        $m->name = $request->name;
        $m->dob = $request->dob;
        $m->email = $request->email;
        $m->education = $request->education;
        $m->job = $request->job;
        $m->position = $request->position;
        $m->description = $request->description;
        if($m->save()){
            if($request->hasfile('photo')){
                if (!file_exists($photo_path)){
                    mkdir($photo_path, 777,true);
                }
                $imgs[0]->move($photo_path,$photo);
            }
        }
        return redirect(route('admin.member.index'))->with('Success','A member info is created successfully!');
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
        $m = MemberInfo::find($id);
        return view('admin.members.edit',compact('m'));
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
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required:email',
            'education' => 'required',
            'job' => 'required',
            'position' => 'required',
            'description'=> 'required'
        ]);
        $m = MemberInfo::find($id);
        $photo_path = 'uploads/members/photos/';
        if($m->photo == '' && $request->photo == '' && $request->old_photo == ''){
            $image = '';
        }
        if($m->photo != '' && $request->photo == '' && $request->old_photo != ''){
            $image = $m->photo;
        }
        if($m->photo != '' && $request->photo == '' && $request->old_photo == ''){
            if (file_exists($photo_path.$m->photo)) {
                unlink($photo_path.$m->photo);
            }
            $image = '';
        }
        if ($m->photo != '' && $request->photo != '' && $request->old_photo == '') {
            if (file_exists($photo_path.$m->photo)) {
                unlink($photo_path.$m->photo);
            }
            $img = $request->photo[0];
            $image = uniqid('thuma').'img.'.$img->getClientOriginalExtension();
        }elseif($m->photo == '' && $request->photo != '' && $request->old_photo == ''){
            $img = $request->photo[0];
            $image = uniqid('thuma').'img.'.$img->getClientOriginalExtension();
        }
        $m->photo = $image;
        $m->name = $request->name;
        $m->dob = $request->dob;
        $m->email = $request->email;
        $m->education = $request->education;
        $m->job = $request->job;
        $m->position = $request->position;
        $m->description = $request->description;
        if($m->save()){
            if($request->hasfile('photo')){
                if (!file_exists($photo_path)){
                    mkdir($photo_path, 777,true);
                }
                $img->move($photo_path,$image);
            }
        }
        return redirect(route('admin.member.index'))->with('Success','A member info is edited successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m = MemberInfo::find($id);
        if ($m->photo != '') {
            if (file_exists('uploads/members/photos/'.$m->photo)){
                unlink('uploads/members/photos/'.$m->photo);
            }
        }
        MemberInfo::where('id',$id)->delete();
        return redirect()->back()->with('success','A member info deleted successfully!');
    }
}
