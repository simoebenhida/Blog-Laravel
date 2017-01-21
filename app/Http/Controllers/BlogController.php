<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::get();
        return view('blog.index')->with('blogs',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
          'titre' => 'required|max:100',
          'slug' => 'required|alpha_dash|min:5|max:20',
          'body' => 'required|min:10'
        ]);
        $blog = new Blog();
        $blog->titre = $request->titre;
        $blog->slug = $request->slug;
        $blog->body = $request->body;
        $blog->save();
        Session::flash('success','Vous avez bien creer votre publication');
        return redirect()->route('blog');
    }
    public function single_blog($slug)
    {
      $blog = Blog::where('slug',$slug)->first();
      return view('blog.blog')->with('blog',$blog);
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
    public function edit($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('blog.edit')->with('blog',$blog);
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
        'titre' => 'required|max:100',
        'slug' => 'required|alpha_dash|min:5|max:20',
        'body' => 'required|min:10'
      ]);
      $blog = Blog::find($id);
      $blog->titre = $request->titre;
      $blog->body = $request->body;
      $blog->slug = $request->slug;
      $blog->update();
      return redirect()->route('single_blog',$blog->slug);
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
