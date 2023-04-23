
<h1>{{ $heading }}</h1>{{-- //blade used to echo value of the variable expression --}}

@foreach($listings as $listing){{-- //for each for array listings --}}
 <h2>{{ $listing['title'] }}</h2>
 <p>{{ $listing['description'] }}</p>
 @endforeach
 {{-- @foreach is a Blade directive that instructs the compiler to start a foreach loop. Similarly, @endforeach is a directive that tells the compiler to end the foreach loop.
 --}}
