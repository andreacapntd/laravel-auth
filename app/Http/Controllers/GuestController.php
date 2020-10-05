<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GuestController extends Controller
{

  public function index() {

    $emps = Employee::all();

    return view('emp_home', compact('emps'));

  }

  public function show($id) {

    $emp = Employee::findOrFail($id);

    return view('emp_show', compact('emp'));

  }

  
}
