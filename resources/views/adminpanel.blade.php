@extends('layout')

@section('content')
            @if($notAccepted->count()>0)

        <div class="accordion" id="accordionExample">
            @foreach($notAccepted as $key=> $history)
            <div class="accordion-item" id="{{$key}}">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$history->name}}
                    </button>
                </h2>
                <div id="collapseOne{{$key}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <div class="mb-2">{{$history->descr}}</div>

                        @foreach($history->hashtags as $hashtag)
                            <a class="chip">
                                {{$hashtag->name}}
                                <i class="close fas fa-times"></i>
                            </a>
                        @endforeach
                        <div class="mt-3">
                            <a  href="{{route('accepthistory',$history->id)}}"> Accept</a>
                            <a class="m-3 " href="{{route('declinehistory',$history->id)}}"> Decline</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
            @else
                <h1 class="text-center">
                   No one history requests
                </h1>
            @endif
    @endsection
