@extends('admin_base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prisijungti</div>
                    <div class="panel-body">
                        <div>
                            <label>vartotojas: admin</label>
                            <label>slaptažodis: admin</label>
                        </div>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login/check') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Vartotojas</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name">
                                </div>
                                </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Slaptažodis</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Prisijungti
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