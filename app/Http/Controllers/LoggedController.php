<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class LoggedController extends Controller
{

  public function __construct() {

    $this -> middleware('auth');

  }

  public function destroy($id) {

    $emp = Employee::findOrFail($id);
    $emp -> delete();

    return redirect() -> route('emp_index');

  }

  public function create() {

    $locs = Location::all();

    return view('emp_create', compact('locs'));

  }

  public function store(Request $request) {

    $data = $request -> all();
    Employee::create($data);

    return redirect() -> route('emp_index');

  }
}
