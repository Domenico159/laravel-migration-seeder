@extends('layouts.main')

@section('content')

<section class="houses  p-5">

<ul class="container d-flex flex-wrap text-center">
    
    @foreach ($houses as $house )
        <li>
            <h2>{{ $house->address }}</h2>
            <h5>{{ $house->state }}</h5>
            <h5>{{ $house->city }}</h5>
            <h5>Square-meters : {{ $house->square_meters }}</h5>
            <h5>Rooms : {{ $house->rooms }}</h5>
            <p>{{ $house->descriptions }}</p>
            <h3>Price : {{ $house->price }} $</h3>
        </li>
    @endforeach

</ul>
<div class="mt-5 navigation">
    {{ $houses->links() }}
</div>

</section>



@endsection