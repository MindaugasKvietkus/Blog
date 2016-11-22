@extends('base')


@section('header')
    <div class="col-lg-12">
        <img src="{{ asset("Desert.jpg") }}" class="img-responsive"  style="height: 250px; width: 100%">
    </div>
@endsection

@section('left-sub')
    <div class="col-lg-12">
            @foreach ($articles as $article)
            <label class="col-lg-12"> <a href="/projectblog/public/straipnis/{{ $article->id }}"><h2> {{ $article->name }}</h2></a></label>
            <label class="col-lg-12"> <h4> {{ $article->mini_text }} </h4></label>
            <label class="col-lg-12"> <a href="/projectblog/public/straipsnis/{{ $article->id }}">Skaitykite toliau</a></label>
                @endforeach
    </div>
    @endsection


@section('right-sub')
        <label class="col-lg-12"><button class="btn btn-default btn-block">Delfi</button></label>
        <label class="col-lg-12"><button class="btn btn-default btn-block">Vakarų Ekspresas</button></label>
        <label class="col-lg-12"><button class="btn btn-default btn-block">15 min</button></label>
        <label class="col-lg-12"><button class="btn btn-default btn-block">Lietuvos rytas</button></label>
    @endsection
