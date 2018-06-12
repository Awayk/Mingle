<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use App\Sponsor;
use Intervention\Image\ImageManagerStatic as Image;

class SponsorsController extends Controller
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
      $sponsors = Sponsor::all();
      return view('sponsors.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('sponsors.create');
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
          'name' => 'required|string|max:255|unique:sponsors',
          'logo' => 'image|mimes:jpeg,png|max:5000'
      ]);

      $path = "";


      if ($request->hasFile('logo')) {
         $logo = $request->file('logo');
         $filename = strtolower(request('name').'.'.$logo->getClientOriginalExtension());
        //delete old file, if it exists
         if (Storage::disk('public')->exists($filename)) {
           Storage::disk('public')->delete('logos/sponsors/'.$filename);
         }

         $logo_resize = Image::make($logo->getRealPath());
         //resize if wanted/necessary
         // $logo_resize->resize(500, 500);

         $path = 'logos/sponsors/' .$filename;

         //store new file in public/logos/sponsors/$name
         $logo_resize->save(
           public_path('storage/'.$path)
           // 'logos', $name , 'public'
         );
       }

       // dd($path);



      Sponsor::create([
        'name' => request('name'),
        'logo' => $path
      ]);
      return redirect('/sponsors');
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
