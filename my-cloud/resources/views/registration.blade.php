@extends('layouts/default')
@section('content')
<h1>Регистрация</h1>
<form name="col-3 offset-4  border rounded" method="POST" action="{{ route('user.registration') }}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Ваш email</label>
        <input type="text" id="email" name="email" value="" placeholder="email" class="form-control">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label-lg">Пароль</label>
        <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger"> {{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Зарегистрироваться</button>
    </div>
</form>
@stop
