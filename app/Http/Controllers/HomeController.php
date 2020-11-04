<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Domain;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $customers = Customer::all();
        $domains = Domain::all();
        return view('home.index',compact(['domains','customers']));
    }
}
