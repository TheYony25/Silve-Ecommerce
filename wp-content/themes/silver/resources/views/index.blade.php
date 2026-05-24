{{-- resources/views/index.blade.php --}}

@extends('layouts.app')

@section('content')
  {{-- Solo incluimos lo que es ÚNICO de esta página --}}
  @include('sections.home.hero')
  

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile
@endsection