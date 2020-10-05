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

  public function create() {

    $locs = Location::all();

    return view('emp_create', compact('locs'));

  }

  public function store(Request $request) {

    $data = $request -> all();
    Employee::create($data);

    return redirect() -> route('emp_index');

  }

  public function edit($id) {

    $emp = Employee::findOrFail($id);
    $locs = Location::all();

    return view('emp_edit', compact('emp', 'locs'));

  }

  public function update(Request $request, $id) {

   $data = $request -> all();
   $emp = Employee::findOrFail($id);
   $emp -> update($data);

   return redirect() -> route('emp_index');

  }

  public function destroy($id) {

    $emp = Employee::findOrFail($id);
    $emp -> delete();

    return redirect() -> route('emp_index');

  }
}
