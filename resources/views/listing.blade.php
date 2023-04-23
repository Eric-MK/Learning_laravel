
<h1>{{ $heading }}</h1>{{-- //blade used to echo value of the variable expression --}}

@php
    $test = 1;
@endphp
{{ $test }}

@foreach($listings as $listing){{-- //for each for array listings --}}
 <h2>{{ $listing['title'] }}</h2>
 <p>{{ $listing['description'] }}</p>
 @endforeach

