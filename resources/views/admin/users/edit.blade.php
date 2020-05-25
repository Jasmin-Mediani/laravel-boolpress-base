@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.users.update' , $user)}}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="name" value="{{(!empty(old('name'))) ? old('name') : $user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                    <input class="form-control" type="text" name="email" value="{{Old('email') ?? $user->email}}">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection 