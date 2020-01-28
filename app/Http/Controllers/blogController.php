<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog ;
use MongoDB\Driver\Session;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=blog::all();
        return view('blog.index',compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
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
            'name'=>'required',
            'description'=>'required'
        ]);
        $newBlog=new blog(['name'=>$request->name,'completed'=>true,'description'=>$request->description]);
        $newBlog->save();
        session()->flash('success','The blog have been added');
        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blogId)
    {
        //
        $blog=blog::find($blogId);
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=blog::find($id);
        return view('blog.edit',compact(['blog']));

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
            'name'=>'required',
            'description'=>'required'
        ]);
        $blog=blog::findorFail($id);
        $blog->name=$request->name ;
        $blog->description=$request->description ;
        $blog->completed=false ;
        $blog->save();
        session()->flash('success','the blog has been updated successfully');
        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
//        return dd($id) ;
        $blog->delete();
        session()->flash('success','the blog has been deleted');
        return redirect('/blogs') ;
    }
    public function complete(blog $blog){
        $blog->completed=true ;
        $blog->save();
        Session()->flash('success','the blog is completed');
        return redirect('/blogs') ;
    }
}
