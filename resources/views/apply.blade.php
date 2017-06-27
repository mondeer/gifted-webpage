@extends('dashboard')

@section('content')

<div class="tcm col-md-12">

  <h1 class="text-center">Apply For A Course</h1>
  <form class="form-horizontal" action="/apply" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
      <label class="col-md-4">First Name</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="fname" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">Middle Name</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="mname" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">Surname</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="surname" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">County</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="county" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">Postal Address</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="address" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">Telephone</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="phone" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">Previus Grade</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="grade" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4">Course Applying for</label>
      <div class="">
        <input class="col-md-6 tcmblack" type="text" name="course" value="">
      </div>
    </div>

    <div class="">
      <button data-toggle="modal" data-target="#myModal" class="btn btn-success" type="submit" name="submit">Submit</button>
    </div>

  </form>

</div>

@endsection
