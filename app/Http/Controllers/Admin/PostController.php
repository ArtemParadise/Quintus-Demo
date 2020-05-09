<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.posts.post_panel', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.createPost', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $countStickyPosts = Post::where('stick', '=', 1)->count();

        $request->validate([
            'title' => 'required|string|max:50',
            'descr' => 'required|string|max:100',
            'body' => 'required|string',
        ]);

        $post->title = $request->title;
        $post->descr = $request->descr;
        $post->body = $request->body;

        $post->category_id = $request->category_id;

        if( isset($request->file)) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $post->img = $url;
        }

        if ($request->checkbox ) {
            if ($countStickyPosts < 3) {
                $post->stick = true;
            } else {
                $post->stick = false;
                //TODO: Вывести флешку с ошибкой
            }
        } else {
            $post->stick = false;
        }

        $post->save();
        return redirect()->route('postsPanel')->with('success', 'Post have been created');
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
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.posts.editPost', ['categories' => $categories, 'post' => $post]);
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
        $post = Post::find($id);
        $countStickyPosts = Post::where('stick', '=', 1)->count();

        $request->validate([
            'title' => 'required|string|max:50',
            'descr' => 'required|string|max:100',
            'body' => 'required|string',
        ]);

        $post->title = $request->title;
        $post->descr = $request->descr;
        $post->body = $request->body;

        $post->category_id = $request->category_id;

        if( isset($request->file)) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $post->img = $url;
        }

        if ($request->checkbox ) {
            if ($countStickyPosts < 3) {
                $post->stick = true;
            } else {
                $post->stick = false;
                //TODO: Вывести флешку с ошибкой
            }
        } else {
            $post->stick = false;
        }

        $post->update();
        return redirect()->route('editPost', compact('id'))->with('success', 'Post have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('postsPanel');
    }
}
