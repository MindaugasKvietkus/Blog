@extends('layouts.app')

@section('add')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prideti straipsni</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/add/article') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Pavadinimas</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                    <input id="mini_text" type="text" class="form-control" name="mini_text" value="{{ old('mini_text') }}" required>

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
                                    <textarea id="text" class="form-control" name="text" value="{{ old('mini_text') }}" required></textarea>

                                    @if ($errors->has('mini_text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mini_text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Prideti
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