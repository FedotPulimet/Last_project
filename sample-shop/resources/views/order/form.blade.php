@extends('layouts.app')

 @section('content')
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <h2>Оформление заказа</h2>
<form action="{{ route('order.submit') }}" method="POST">
    @csrf
    <h2>Для того чтобы приобрести картину выбирите один из удобных вам вариантов: </h2>

    <h2>1. Связаться с автором картин по WhatsApp или Telegram: </h2>
    <p>Номер телефона: + 7 906-062-41-23</p>
    
    <h2>2. Написать на почту: </h2>
    <p>Почта: zhfedor33@gmail.com</p>

 </form>

    <h3>Спасибо за то что выбрали наш магазин!</h3>

@endsection