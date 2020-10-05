@extends('layouts.app')

@section('content')

  <form action=" {{ route('emp_store') }}" method="post">

    @csrf
    @method('POST')

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" class="form-control" id="firstname" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" class="form-control" id="lastname" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of birth</label>
      <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="">
    </div>
    <div class="form-group">
      <label for="private_code">Private code</label>
      <input type="text" name="private_code" class="form-control" id="private_code" value="">
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="location_id">Location</label>
        <select name="location_id" id="location_id" class="form-control">
          @foreach ($locs as $loc)

            <option value=" {{ $loc -> id}}"> {{ $loc -> name }} ({{ $loc -> state}})</option>

          @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">CREATE</button>

</form>
@endsection
