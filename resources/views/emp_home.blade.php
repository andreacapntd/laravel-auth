@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  EMPLOYEES

                </div>
                <a class="btn btn-primary" href="{{route('emp_create')}}">CREATE NEW EMPLOYEE</a>

                <div class="card-body">
                  <ul>

                    @foreach ($emps as $emp)

                      <li>

                        <a href="{{route('emp_show', $emp -> id) }}">

                          {{ $emp -> firstname }}
                          {{ $emp -> lastname}}

                        </a>

                      </li>


                    @endforeach

                  </ul>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
