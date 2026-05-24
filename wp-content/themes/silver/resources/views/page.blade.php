{{-- resources/views/page.blade.php --}}

@extends('layouts.app')

@section('content')
  
  {{-- Solo mostrar Hero y ProductoEsp si NO es la página de productos --}}
  @if (!is_page('productos'))
    @include('sections.home.hero')
    @include('sections.home.productesp')
  @endif

  {{-- Solo mostrar la sección específica si ES la página de productos --}}
  @if (is_page('productos'))
    @include('sections.productos.productospage')
  @else
    {{-- El loop estándar solo para las otras páginas --}}
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
  @endif

@endsection