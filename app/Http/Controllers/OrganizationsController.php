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

        $organization = Organization::find($id);

        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'mail' => 'email|max:255',
        ]);

        $input = $request->only('name', 'lead_description', 'link', 'mail', 'telephone', 'location_name', 'zip', 'location', 'street', 'street_number', 'donate_link');


        $organization->update([
          'name' => $input['name'],
          'lead_description' => $input['lead_description'],
          'link' => $input['link'],
          'mail' => $input['mail'],
          'telephone' => $input['telephone'],
          'location_name' => $input['location_name'],
          'zip' => $input['zip'],
          'location' => $input['location'],
          'street' => $input['street'],
          'street_number' => $input['street_number'],
          'donate_link' => $input['donate_link'],
          'user_id' => auth()->id()
        ]);


        $routeName = strtolower($input['name']);

        return redirect('/organizations/'.$routeName);
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
