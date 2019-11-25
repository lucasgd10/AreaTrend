@extends('layouts.master')


@section('content')
    <div class='row'>
        <div class="col-md-12">
            <p class="quote">Teams</p>
        </div>
    </div>

    @foreach ($posts as $post)
        <div class='row'>
            <div class="col-md-12 text-center">
                <h1 class="post-title">{{$post['team']}}</h1>
                <p>{{ $post['location'] }}</p>
            </div>
        </div>
        <hr>
    @endforeach



@endsection
