<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use App\Organization;

class OrganizationsController extends Controller
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
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('organizations.create');

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
            'name' => 'required|string|max:255|unique:organizations',
            'mail' => 'email|max:255|unique:organizations',
        ]);

        Organization::create([
          'name' => request('name'),
          'lead_description' => request('lead_description'),
          'link' => request('link'),
          'mail' => request('mail'),
          'telephone' => request('telephone'),
          'location_name' => request('location_name'),
          'zip' => request('zip'),
          'location' => request('location'),
          'street' => request('street'),
          'street_number' => request('street_number'),
          'donate_link' => request('donate_link'),
          'user_id' => auth()->id()
        ]);
        return redirect('/organizations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        return view('organizations.show', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        if (Gate::denies('edit-organization', $organization)) {
            return redirect('/organizations/'. $organization->name);
        }

        return view('organizations.edit', compact('organization'));
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
