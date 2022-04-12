@extends('layouts.main',['activePage' => 'users', 'titlePage' =>'Detalles del Usuario'])
@section('content')
<div class="content">
    <div class="conteiner-fuid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">{{ $user->rol }}</div>
                        <p class="card-category">Vista detallada del usuario {{ $user->name}}</p>
                       </div>
                       <!--Body-->
                       <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('users.index') }}" class="btn btn-success"><i class="material-icons">arrow_back</i></a>
                                </div>
                            </div>
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="card card-user">
                                       <div class="card-body">
                                           <p class="card-text">
                                               <div class="autor">
                                                   <a href="#">
                                                       <img src="{{ asset('/img/faces/default-avatar.png')}}" alt="image" class="avatar col-sm-4">
                                                       <h5 class="title" mt-3>{{ $user->name}}</h5>
                                                   </a>
                                                   <p class="description">
                                                   {{ $user->rut}}  <br>
                                                   {{ $user->email}}  <br>
                                                   {{ $user->area}}  <br>
                                                   Creacion del usuario: {{ $user->created_at}}  <br>
                                                   </p>
                                               </div>
                                        </p>
                                         <div class="card-description">
                                            loremore ipsum dolor sit amet consectetur adipiscing elit. Veniam officia corporis molestiar aliquid provident placeat.
                                        </div>
                                       </div>
                                       <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning "><i class="material-icons">edit</i></a>
                                       </div>
                                   </div>
                               </div><!-- end card user -->
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
