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
   
     public function create_doctor(){
         $countries = DB::table('countries')->get();
         $roles = DB::table('roles')->get();
         $services = DB::table('services')->get();
         return view('admin.create_doctor', compact('countries','roles','services'));
     }
     public function add_doctor(){
         
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.doctors');
        // return view('admin.doctors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
