<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'blog' => Blog::all()
        ];
        return view('admin.pages.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            'category' => Category::all()
        ];
        return view('admin.pages.blog.createblog', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'deskripsi' => $request->deskripsi,
        ];

        Blog::create($data);
        return redirect('admin/blog')->with('success', 'Blog has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $data = [
            'blog' => $blog,
            'category' => Category::all()
        ];
        return view('admin.pages.blog.lihat', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data = [
            'blog' => $blog,
            'category' => Category::all()
        ];
        return view('admin.pages.blog.editblog', $data);
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
        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'deskripsi' => $request->deskripsi,
        ];

        Blog::where('id', $id)->update($data);
        return redirect('admin/blog')->with('success', 'Blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id', $id)->delete();
        return back()->with('success', 'Blog has been deleted');
    }
}