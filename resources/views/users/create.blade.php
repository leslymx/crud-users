@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex flex-row justify-content-between">{{ __('Creacion de usuario') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            - {{ $error }} <br>
                            @endforeach
                        </div>
                        @endif

                        <form action="{{ route('users.store')}}" method="POST">
                            <div class="form-group">
                                <label>Name *: </label>
                                <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                            </div>
                            <div class="form-group">
                                <label>Email *: </label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label>Password *: </label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                                <a href="{{route('users.index')}}" class="btn btn-sm btn-danger"> Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection