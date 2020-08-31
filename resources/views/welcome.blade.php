@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    Welcome to Dungeon's & Naggins

                  </br>
                  Learn more <a href="{{ route('about')}}"> about us </a>

                  View <a href="{{route ('admin.pubs.index')}}"> pubs </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
