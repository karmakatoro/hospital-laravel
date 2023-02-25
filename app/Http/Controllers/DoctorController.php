<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Countries;

class DoctorController extends Controller
{
    public function __construct(){
       $this->middleware('auth'); 
    }
    public function index(){
        return view('admin.doctors');
    }
    public function create_doctor(){
        $countries = DB::table('countries')->get();
        $roles = DB::table('roles')->get();
        $services = DB::table('services')->get();
        return view('admin.create_doctor', compact('countries','roles','services'));
    }
    public function add_doctor(){
        
    }
}
