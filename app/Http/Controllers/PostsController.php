<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Purifier;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $detail = $request->body;
      // $detail = Purifier::clean($request->get('body'));



      $dom = new \domdocument();

      $dom->encoding = 'utf-8';
      $dom->loadHTML( utf8_decode( $detail ) ); // important!

      // $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);



      $images = $dom->getelementsbytagname('img');

      foreach($images as $k => $img){
          if(substr($img->getattribute('src'),0,4)!='http') {
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'\\storage\\postImg\\'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', '/storage/postImg/'.$image_name);
          }
      }

      $detail_pure = $dom->savehtml();
      // dd($detail);
      $detail = Purifier::clean($detail_pure);
      // dd( $detail_pure, $detail);

      Post::create([
        'title' => request('title'),
        'body' => $detail,
        // 'multimedia' => "/img/HappyCrowd.jpg",
        'user_id' => auth()->id()
      ]);
      return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $prev = Post::where('id', '<', $post->id)->max('id');
        $next = Post::where('id', '>', $post->id)->first();

        return view('posts.show', compact('post', 'next', 'prev'));
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
