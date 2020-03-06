@extends('layout.app')

@section('title-blog')Главная@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores assumenda eaque eligendi maiores, nisi numquam odio. Eaque inventore minima optio provident sapiente! Atque blanditiis distinctio ducimus, ex excepturi explicabo in inventore ipsum laborum nisi officiis, quas qui velit voluptas voluptate. Aliquid blanditiis delectus dignissimos dolorem dolorum ex, magnam non, placeat, praesentium quo quos repudiandae vero! Beatae neque sapiente suscipit voluptatibus!
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
