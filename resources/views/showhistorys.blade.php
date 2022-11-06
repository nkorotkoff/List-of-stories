@extends('layout')

@section('content')
    @foreach($historys as $history)
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$history->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{\Carbon\Carbon::parse($history->created_at)->format('m.d.Y')}}</h6>
                <p class="card-text">{{$history->descr}}</p>
                @if($history->hashtags)
                @foreach($history->hashtags as $hashtag)
                <a href="{{route('hashtag',$hashtag->id)}}" class="chip">
                    {{$hashtag->name}}
                    <i class="close fas fa-times"></i>
                </a>
                @endforeach
                @endif
            </div>

        </div>

    @endforeach
    {{$historys->links()}}
@endsection
