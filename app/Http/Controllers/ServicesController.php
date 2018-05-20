<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use App\Organization;
use App\Service;

class ServicesController extends Controller
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
    public function index(Organization $organization)
    {
        $services = $organization->services;

        return view('organizations.services.index', compact('services', 'organization'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Organization $organization)
    {
        if (Gate::denies('edit-organization', $organization)) {
            return redirect('/organizations/'. $organization->name);
        }

        $icons = \App\Icon::all();

        return view('organizations.services.create', compact('organization', 'icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Organization $organization)
    {
      $this->validate(request(), [
          'icon_id' => 'required|integer|min:1|max:561',  //for the current number of icons in the DB
          'title' => 'string|max:255'
      ]);

      //let the Organization Model add a new Service
      $organization->addService(request()->all());

      return back();
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
    public function edit(Organization $organization, Service $service)
    {
        if (Gate::denies('edit-organization', $organization)) {
            return redirect('/organizations/'. $organization->name);
        }

        $icons = \App\Icon::all();

        return view('organizations.services.edit', compact('organization', 'service', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name, $id)
    {
        $service = Service::find($id);



        $this->validate(request(), [
            'icon_id' => 'required|integer|min:1|max:561',  //for the current number of icons in the DB
            'title' => 'string|max:255'
        ]);

        $input = $request->only('icon_id', 'title', 'description');

        $service->update([
          'icon_id' => $input['icon_id'],
          'title' => $input['title'],
          'description' => $input['description']
        ]);

        return redirect('/organizations/'.$service->organization->name.'/services');
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
