<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DoctorController extends Controller
{
    public function __construct(){
       $this->middleware('auth'); 
    }
    public function index(){
        return view('admin.doctors');
    }
    public function create_doctor(){
        return view('admin.create_doctor');
    }
}
