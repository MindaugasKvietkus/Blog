@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-10 col-lg-offset-1">
    <label><a href="{{ url('/admin/add') }}" role="button" class="btn">Prideti Straipsni</a></label>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
        @foreach( $articles as $article)
        <label class="col-lg-3">{{ $article->name }}</label>
            <label class="col-lg-7">{{ $article->mini_text }}</label>
            <label class="col-lg-1"><a href="{{ url('/admin/edit') }}/{{ $article->id }}">Redaguoti</a></label>
            <label class="col-lg-1"><a href="{{ url('/admin/delete/') }}/{{ $article->id }}">Šalinti</a></label>
            @endforeach
    </div>
@endsection
