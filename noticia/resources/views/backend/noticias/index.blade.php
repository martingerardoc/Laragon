@extends('backend.layouts.main')
@section('title',__('noticias.index'))
@SECTION('content')
@forelse($noticias as $noticia)
@if($loop->iteration % 2 !=0)<div class="row">@endif
    <div class="cols-md-6"><div class="card">
        @if($noticia->imagen)
        @if(Str::startsWith($noticia->imagen,'https'))
        <img src="{{ $noticia->imagen }}" class="card-img.top" alt="...">
        @else
        <img src="{{ asset($noticia->imagen) }}" class="card-img.top" alt="...">
        @endif
        @else<img src="../img/no_image.png" alt="no image"><hr>@endif
       
        <div class="card-body"><p class="card-text text-right">
            <h3 class="card-title text-info" >{{ $noticia->titulo}}</h3>
            <p class="card-text text-left">{{$noticia->autor}}</p>
            <p class="card-text">{!! $noticia->cuerpo !!}</p>
            {{-- Comentario en Blade--}}
            <div class="card-footer"><div class="row">
                <a href="{{route('noticias.show',['noticia'=>$noticia->id ]) }}"class="offset-11 btn btn-info">
                    <img src="{{ asset('svg/show.svg')}}" width="20" height="20" alt="">
                </a>

            </div>

            </div>
        </div>

    </div>
@if($loop->iteration %2 ==0)
</div><hr>
@endif
@empty
<p class="text-capitalize">No hay noticias</p>
@endforelse
</div><hr>
@endsection
