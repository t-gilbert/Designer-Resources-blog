@extends('layouts.app')

@section('content')
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" data-parallax="true" style="background-image: url('/storage/cover_images/header.jpg');">
    </div>
    <div class="container text-center galaxybar">
      <h1 class="h1-seo">{{$title}}</h1>
      <h3>A Blog where you can find and share design Resources.</h3>
      <p>
      <a class="btn btn-primary btn-round" href="/login" role="button">Login</a>
      <a class="btn btn-primary btn-round" href="/register" role="button">Register</a>
      </p>

    </div>
</div>
@endsection
