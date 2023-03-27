<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

        /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nip'     => 'required|min:5',
            'nama'     => 'required|min:5',
            'idjabatan'     => 'required|min:5',
            'gajipokok'     => 'required|min:5',
            'tunjangan'     => 'required|min:5'
        ]);

        //create post
        Post::create([
            'nip'     => $request->nip,
            'nama'        => $request->nama,
            'idjabatan'   => $request->idjabatan,
            'gajipokok'      => $request->gajipokok,
            'tunjangan'      => $request->tunjangan
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

       /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nip'     => 'required|min:5',
            'nama'     => 'required|min:5',
            'idjabatan'     => 'required|min:5',
            'gajipokok'     => 'required|min:5',
            'tunjangan'     => 'required|min:5'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);
        
            //update post without image
            $post->update([
                'nip'            => $request->nip,
                'nama'           => $request->nama,
                'idjabatan'      => $request->idjabatan,
                'gajipokok'      => $request->gajipokok,
                'tunjangan'      => $request->tunjangan
            ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

        /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);
        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}