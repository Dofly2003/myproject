<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Component\HttpKernel\Attribute\AsController;

class PostController extends \Illuminate\Routing\Controller
{
 public function index()
 {
    return view('katalog', [
        "title" => "product" ,
        'posts' => Post::filter(request(['search','kategori']))->latest()->paginate(20)->withQueryString()
    ]);
 }
 public function show($Slug)
 {
    return view('post_katalog', [
        "title" => "product" ,
        'post' => Post::find($Slug)
    ]);
 }
 function tambah(){
    return view('admin.tambah',[
        'title' => 'tambah',
    ]);
}
 function HomeAdmin(){
    return view('admin.homeAdmin',[
        'title' => 'tambah',
    ]);
}   
function submit(Request $request){
   $post = New Post();
   $post->title = $request->nama;
   $post->slug = $request->slug;
   $post->image = $request->image;
   $post->type = $request->type;
   $post->harga = $request->harga;
   $post->user_id = $request->userid;
   $post->save();

   return redirect('/homeAdmin');
}
}
