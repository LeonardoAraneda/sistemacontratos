@extends('layouts.main', ['activePage' => 'usuarios', 'titlePage' => 'Nuevo Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-tittle">Crear Usuario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                          {{--  @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif--}}
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre" value="{{old('name')}}" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="error text-danger" for="input-name">{{$errors -> first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="rut" class="col-sm-2 col-form-label">RUT</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="rut" placeholder="Ingrese el RUT" value="{{old('rut')}}">
                                    @if ($errors->has('rut'))
                                        <span class="error text-danger" for="input-rut">{{$errors -> first('rut')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="rol" placeholder="Ingrese el ROL" value="{{old('rol')}}">
                                    @if ($errors->has('rol'))
                                        <span class="error text-danger" for="input-rol">{{$errors -> first('rol')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="area" class="col-sm-2 col-form-label">Área</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="area" placeholder="Ingrese el área" value="{{old('area')}}">
                                    @if ($errors->has('area'))
                                        <span class="error text-danger" for="input-area">{{$errors -> first('area')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese el correo" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                        <span class="error text-danger" for="input-email">{{$errors -> first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                    @if ($errors->has('password'))
                                        <span class="error text-danger" for="input-password">{{$errors -> first('password')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
