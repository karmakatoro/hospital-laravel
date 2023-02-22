<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function __construct(){
       $this->middleware('auth'); 
    }
    public function index(){
        $countries = DB::table('countries')->compact('countries')->get();
        return view('admin.doctors')->with($countries);
    }
    public function create_doctor(){
        return view('admin.create_doctor');
    }
}
