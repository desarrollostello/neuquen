@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Sectores
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editando Sector
                  <p class="pull-right">
                    <a href="{{ route('sector.index') }}" class="btn btn-sm btn-primary pull-right">
                      Volver
                    </a>
                  </p>
                </div>

                <div class="panel-body">
                  {!! Form::model($sector, ['method' => 'PATCH', 'route' => ['sector.update', $sector]]) !!}
                        @include('sectores._form')
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
