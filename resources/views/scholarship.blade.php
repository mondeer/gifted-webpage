@extends('dashboard')

@section('content')
<div class="imondgray">
  <h3 class="imondwhite">
  Tropical College of Mnagement <br>
  offers SCHOLARSHIP to students from humble backgrounds in the <br> following fields:-
  </h3>
  <p class="imondwhite">
  <i class="icon icon-check"></i> Information Technology <span class="badge ">1</span>
  </p>

  <p class="imondwhite">
  <i class="icon icon-check"></i> Nutrition and Dietetics <span class="badge ">1</span>
  </p>

  <p class="imondwhite">
  <i class="icon icon-check"></i>  Hotel and Catering <span class="badge ">1</span>
  </p>

  <p class="imondwhite">
  <i class="icon icon-check"></i>  General Agricultural <span class="badge ">1</span>
  </p>

  <p>
  <a class="btn btn-primary btn-lg btn-learn" href="{{url('/images/applicationform.pdf')}}">Download Application Form</a>
  </p>
</div>
@endsection
