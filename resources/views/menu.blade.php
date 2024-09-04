@extends('layout')

@section('content')



<div class="menu">
    <h1>Menukaart</h1>
    <ul>
        @foreach($gerechten as $gerecht)
            <li>{{ ucfirst($gerecht->name) }}
                € {{ ucfirst($gerecht->price) }}</li>
        @endforeach

        
    </ul>
</div>

@endsection