<?php

namespace App\Http\Controllers;
use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {

    return view('Dashboard',['Ideas'=>Idea::orderBy('created_at','DESC')->get()
       ]);
  }
}
