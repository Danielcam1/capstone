@extends('layouts.app')

@section('title', 'Home')

@section('navHome', 'active')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 25vh">
        <div class="card" style="border: solid 2px black; color: black;height: 19rem; margin: 0%; background-color: rgba(255, 255, 255, 0.8);">
            <div class="card-body d-flex flex-column justify-content-center text-center" style="height: 200px;">
                <h1 style="color: black">Welcome to PDS Checker</h1>
                <p>YOU CAN START FILLING UP <a href="{{ route('fillup') }}">HERE</a></p>
            </div>
        </div>
        <img src="{{ asset('images/image.png') }}" alt="Personal Data Sheet" style="max-width: 300px;"/>
    </div>
@endsection
