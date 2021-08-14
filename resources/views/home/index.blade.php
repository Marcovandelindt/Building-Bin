@extends('layouts.app')

@section('content')
<div class="section home-choice-buttons">
    <div class="container">
        <div class="wrapper">
            <div>
                <a class="btn btn-primary" href="{{ route('frontend.index') }}">Check Frontend</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('backend.index') }}">Check Backend</a>
            </div>
        </div>
    </div>
</div>
@endsection
