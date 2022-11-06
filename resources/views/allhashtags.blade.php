@extends('layout')

@section('content')
    <div class="card mt-3">
        <div class="card-body">
    @foreach($all as $hashtag)

                <a href="{{route('hashtag',$hashtag->id)}}" class="chip">
                    {{$hashtag->name}}
                    <i class="close fas fa-times"></i>
                </a>

    @endforeach
        </div>
    </div>
@endsection
