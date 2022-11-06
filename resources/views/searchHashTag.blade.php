@extends('layout')

@section('content')
    <div class="d-flex align-items-center">
    <div class="chip mt-2">
        Searching by  <strong>{{$hashtag->name}}</strong> hashtag
        <i class="close fas fa-times"></i>
    </div>
    <a href="{{route('allhashtags')}}">
        Show All hashtags
    </a>
    </div>
    @foreach($hashtag->historys as $history)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{$history->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{\Carbon\Carbon::parse($history->created_at)->format('m.d.Y')}}</h6>
                <p class="card-text">{{$history->descr}}</p>
                @foreach($history->hashtags as $hashtag)
                    <a href="{{route('hashtag',$hashtag->id)}}" class="chip">
                        {{$hashtag->name}}
                        <i class="close fas fa-times"></i>
                    </a>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
