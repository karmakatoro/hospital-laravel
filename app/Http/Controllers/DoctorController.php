<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
     }

    //  public function create_doctor(){

    //  }
    //  public function add_doctor(){

    //  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = DB::table('v_doctors_roles_services')->get();
        return view('admin.doctors', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = DB::table('countries')->get();
        $roles = DB::table('roles')->get();
        $services = DB::table('services')->get();
        return view('admin.create_doctor', compact('countries','roles','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'country_id' => 'required',
            'city' => 'required',
            'role_id' => 'required',
            'affected_id' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'bio' => 'required','status' => 'required'
        ]);
        Doctors::create($request->all());
        return redirect()->route('doctors.index')
        ->with('success','Doctor created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show(Doctors $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctors $doctors)
    {
        $countries = DB::table('countries')->get();
        $roles = DB::table('roles')->get();
        $services = DB::table('services')->get();
        return view('admin.edit_doctor', compact('doctors','countries','roles','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctors $doctors)
    {
        $request->validate([

        ]);
        $doctors->update($request->all());
        return redirect()->route('doctors.index')
        ->with('success','Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctors $doctors)
    {
        //
    }
}
