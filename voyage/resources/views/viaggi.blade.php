@extends('layout.app')

@section('title', 'Viaggi')

@section('content')
<div class="gallery">

    @foreach($travels as $travel)

    <div class="card">
        <div class="poster">
            <img src="{{$travel->poster}}" alt="">
        </div>
        <h2>{{$travel->country}}</h2>
        <h3>{{$travel->location}}</h3>
        <p>Partenza : {{$travel->departure}}</p>
        <p>{{$travel->night}} Notti</p>
        <p>Prezzo : {{$travel->price}} &euro;</p>
        <p>{{$travel->info}}</p>
    </div>

    @endforeach
</div>


@endsection