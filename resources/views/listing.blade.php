
<h1>{{ $heading }}</h1>{{-- //blade used to echo value of the variable expression --}}

@unless(count($listings) == 0) {{-- if not equals to zero execute
 unless is not zero execute--}}
@foreach($listings as $listing)
 <h2>
   <a href="/list/{{ $listing['id'] }} "> {{ $listing->title}}{{-- //other way to access $listing['title'] --}}
   </a>
</h2>
 <p>{{ $listing['description'] }}</p>
 @endforeach

 @else
 <p>no listings found</p>

@endunless
{{-- the @unless directive is similar to the @if directive, but it checks for the opposite condition.
 the @unless directive checks if the count of the $listings array is not equal to zero.    --}}
