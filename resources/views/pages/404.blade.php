@extends('layouts.master')
@section('content')
  <div class="content">
    <img src="img/error-img.png" title="error" />
    <p><span><label>O</label>hh.....</span>You Requested the page that is no longer There.</p>
    <a class="btn btn-outline-primary" href="{{ url('/') }}">Back To Home</a>
  </div>
@endsection
