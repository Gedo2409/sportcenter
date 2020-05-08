@extends('backend.layouts.app')
@section('title')
Backend
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>BIENVIENIDO  {{ Auth::user()->name }}</h1>
               <img  src="img/Red and Blue Vectors Teacher Thank You Card.png" alt="" />
        </div>
    </div>
</div>
@endsection
