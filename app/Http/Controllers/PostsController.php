<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Purifier;
use Carbon\Carbon;
use Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Gate;

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
      $posts = Post::latest()->paginate(3);
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

      $this->validate(request(), [
          'title' => 'required|string|max:100'
      ]);

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


      //title Image
      $path = "";
      if ($request->hasFile('lead_img')) {
         $lead_img = $request->file('lead_img');
         $filename = strtolower(time().'t.'.$lead_img->getClientOriginalExtension());
        // //delete old file, if it exists
        //  if (Storage::disk('public')->exists($filename)) {
        //    Storage::disk('public')->delete('postImg/'.$filename);
        //  }

         $lead_img_resize = Image::make($lead_img->getRealPath());
         //resize if wanted/necessary
         $lead_img_resize->fit(1500, 500);

         $path = 'postImg/' .$filename;

         //store new file in public/lead_imgs/$name
         $lead_img_resize->save(
           public_path('storage/'.$path)
           // 'lead_imgs', $name , 'public'
         );
       }

      Post::create([
        'title' => request('title'),
        'body' => $detail,
        'lead_img' => $path,
        'user_id' => auth()->id(),
        'organization_name' => request('organization_name')
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
    public function edit(Post $post)
    {
        if (Gate::denies('edit-owner', $post)) {
            return redirect('/posts/'. $post->id);
        }
        return view('posts.edit', compact('post'));
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

        $this->validate(request(), [
            'title' => 'required|string|max:100'
        ]);

        // Take care of the WYSIWYG editor input
        $detail = $request->body;

        $dom = new \domdocument();

        $dom->encoding = 'utf-8';
        $dom->loadHTML( utf8_decode( $detail ) ); // important!

        $images = $dom->getelementsbytagname('img');

        // foreach image in the WYSIWYG editor upload it to the server
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


        //title Image Upload
        $path = $post->lead_img;
        if ($request->hasFile('lead_img')) {
           $lead_img = $request->file('lead_img');
           $filename = strtolower(time().'t.'.$lead_img->getClientOriginalExtension());
          // //delete old file, if it exists
          //  if (Storage::disk('public')->exists($path)) {
          //    Storage::disk('public')->delete('postImg/'.$filename);
          //  }

           $lead_img_resize = Image::make($lead_img->getRealPath());
           //resize if wanted/necessary
           $lead_img_resize->fit(1500, 500);

           $path = 'postImg/' .$filename;

           //store new file in public/lead_imgs/$name
           $lead_img_resize->save(
             public_path('storage/'.$path)
             // 'lead_imgs', $name , 'public'
           );
         }

        $post->update([
          'title' => request('title'),
          'body' => $detail,
          'lead_img' => $path,
          'user_id' => auth()->id(),
          'organization_name' => request('organization_name')
        ]);
        return redirect('/posts/'.$id);
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
