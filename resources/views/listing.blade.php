
<h1>{{ $heading }}</h1>{{-- //blade used to echo value of the variable expression --}}

@if(count($listings) == 0)
   <p>no listings found</p>

@endif
{{-- @if directive checks if the count of the $listings array is equal to zero. If it is,
the code block between @if and @endif is executed
 If the condition in the @if statement is not met,
 the code block within the @if and @endif directives will be skipped and not outputted.
--}}
@foreach($listings as $listing){{-- //for each for array listings --}}
 <h2>{{ $listing['title'] }}</h2>
 <p>{{ $listing['description'] }}</p>
 @endforeach

