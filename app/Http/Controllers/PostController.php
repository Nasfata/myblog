<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view(){
        $posts=Post::all();
        return view('view',compact('posts'));
    }

    public function index(){
        $posts=Post::all();
        return view('posts.index',compact('posts'))->with('showSearch', false);;
    }

    public function show(Post $post){
    return view('show',compact('post'))->with('showSearch', false);
    }

    public function search(Request $request)
    {
        $motCle = $request->input('motCle');
        $posts = Post::where('title', 'like', "%{$motCle}%")
                            //->orWhere('content', 'like', "%{$motCle}%")
                            ->get();

        return view('view', compact('posts'));
    }



   //CRUD
    // 3. Stocker un nouvel article
    public function create()
    {
        return view("posts.create")->with('showSearch', false);;
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create($validated);
        return redirect()->route('posts.index')->with('success', 'Article créé avec succès.');
    }

    public function edit($id)
{
    // Trouver l'article correspondant à l'ID
    $post = Post::findOrFail($id);


    // Retourner la vue avec les données de l'article
    return view('posts.edit', compact('post'))->with('showSearch', false);;
}

    // 6. Mettre à jour un article
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);


        $post = Post::findOrFail($id);
        $post->update($validated);


        return redirect()->route('posts.index')->with('success', 'Article mis à jour avec succès.');
    }
    // 7. Supprimer un article
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();


        return redirect()->route('posts.index')->with('success', 'Article supprimé avec succès.');
    }


}
