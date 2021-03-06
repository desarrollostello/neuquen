@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Permisos
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editando Perfil
                  <p class="pull-right">
                    <a href="{{ route('proyecto.index') }}" class="btn btn-sm btn-primary pull-right">Salir </a>
                  </p>
                </div>

                <div class="panel-body">
                    {!! Form::model($profile, ['method' => 'PATCH', 'route' => ['profile.update', $profile], 'enctype' => 'multipart/form-data']) !!}
                        @include('profiles.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
