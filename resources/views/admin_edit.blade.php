@extends('layouts.app')

@section('edit')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Redaguoti straipsni</div>
                    <div class="panel-body">
                        @foreach($article as $article)
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/edit/') }}/{{ $article->id }}/article">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Pavadinimas</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $article->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mini_text') ? ' has-error' : '' }}">
                                <label for="mini_text" class="col-md-4 control-label">Antraste</label>

                                <div class="col-md-6">
                                    <input id="mini_text" type="text" class="form-control" name="mini_text" value="{{ $article->mini_text }}" required>

                                    @if ($errors->has('mini_text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mini_text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label for="text" class="col-md-4 control-label">Tekstas</label>

                                <div class="col-md-6">
                                    <textarea id="text" class="form-control" name="text" required>{{ $article->text }}</textarea>

                                    @if ($errors->has('mini_text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mini_text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Atnaujinti
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection