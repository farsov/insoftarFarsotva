@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-sm-8">
            <br>
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar usuario</h2>
                    </div>
                    <div class="pull-right">
                        <!-- <a class="btn btn-warning" href="{{ route('home') }}">Regresar</a> -->
                        <br><br>
                    </div>

                    <form method="POST" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                          
                        <div class="form-group">
                            <label for="name">Nombres:</label>
                            <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}"
                                name="name" value="{{ old('name', $user->name) }}"/>
                            {!! $errors->first('name', '* <span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="last_name">Apellidos:</label>
                            <input id="last_name" type="text" class="form-control {{ $errors->has('last_name') ? 'border border-danger' : '' }}"
                                name="last_name" value="{{ old('name', $user->last_name) }}"/>
                            {!! $errors->first('last_name', '* <span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="document">Cédula:</label>
                            <input id="document" type="text" class="form-control {{ $errors->has('document') ? 'border border-danger' : '' }}"
                                name="document" value="{{ old('document', $user->document) }}"/>
                            {!! $errors->first('document', '* <span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'border border-danger' : '' }}"
                                name="email" value="{{ old('email', $user->email) }}" readonly />
                            {!! $errors->first('email', '* <span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="phone">Télefono:</label>
                            <input id="phone" type="text" class="form-control {{ $errors->has('phone') ? 'border border-danger' : '' }}"
                                name="phone" value="{{ old('phone', $user->phone) }}"/>
                            {!! $errors->first('phone', '* <span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-warning">
                                <i class="far fa-save"></i> Editar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection