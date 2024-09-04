<!-- @extends('layout')

@section('styles')
<link rel="stylesheet" href="{{asset('css/impressie.css')}}">
@endsection

@section('content')
<div class="container text-center" style="margin-top: 18vh;">
    <div class="row">
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('1.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('2.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('3.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('4.jpeg')}}" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('5.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('6.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('7.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('8.jpeg')}}" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('9.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('10.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('11.jpeg')}}" alt="">
        </div>
        <div class="col-sm mt-4">
            <img class="img" src="{{asset('12.jpeg')}}" alt="">
        </div>
    </div>


    
</div>
 -->
@extends('layout')

@section('content')
<div class="container text-center" style="margin-top: 18vh;">
    @foreach (array_chunk($images, 4) as $imageRow)
        <div class="row">
            <!-- array chunk zorgt ervoor dat de array $images word opgesplitst in arrays van 4 afbeeldingen en daarna maakt ie een nieuwe div -->
            @foreach ($imageRow as $image)
                <div class="col-sm mt-4">
                    <img class="img" src="{{ asset($image) }}" alt="">
                </div>
                <!-- er word een div aangemaakt met daarin img tag vervolgens loopt ie door de images heen zodat ze er allemaal in komen -->
            @endforeach
        </div>
    @endforeach
</div>
@endsection