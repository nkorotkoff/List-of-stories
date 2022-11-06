@extends('layout')

@section('content')


    <form action="{{route('addpost')}}" method="POST" class="col-lg-6 offset-lg-3 mt-5">
        @csrf
        <div class="form-group row mt-2 ">
            <label for="text" class="col-3 col-form-label">Name of history</label>
            <div class="col-8">
                <input id="text" name="name" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-3 col-form-label">Text</label>
            <div class="col-8 mt-2">
                <textarea id="textarea" name="descr" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row mt-2 ">
            <label for="text" class="col-3 col-form-label">Hastags</label>
            <div class="col-8">
                <input id="text" name="text" type="text" class="form-control control">
                <div class="add__hashtag"> add</div>
            </div>
        </div>
        <div class="d-flex mt-2 hashtags__wrapper">

        </div>
        <div class="form-group row mt-2">
            <div class="offset-6 col-1">
                <button  type="submit" class="btn btn-primary">add</button>
            </div>
        </div>


    </form>
    @endsection
