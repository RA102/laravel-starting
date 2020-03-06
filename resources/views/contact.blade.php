@extends('layout.app')

@section('title-blog')
    Контакты
@endsection

@section('content')
<h1>Страница контактов</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Введите имя</label>
        <input class="form-control" id="name" type="text" name="name" placeholder="Введите имя" >
    </div>

    <div class="form-group">
        <label for="name">Введите Email</label>
        <input class="form-control" id="email" type="text" name="email" placeholder="Введите email" >
    </div>

    <div class="form-group">
        <label for="subject">Тема сообщение</label>
        <input class="form-control" id="subject" type="text" name="subject" placeholder="Тема сообщение" >
    </div>

    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea class="form-control" id="message" type="text" name="message" placeholder="Введите сообщение" ></textarea>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
