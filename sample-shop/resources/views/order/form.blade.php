@extends('layouts.app')

 @section('content')
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
      <div class="product-card" style="border:1px solid #ccc; padding:30px; width:1920px; height: 600px; background-color: white    ; border-radius: 30px; ">
    <h2>Оформление заказа</h2>
<form action="{{ route('order.submit') }}" method="POST">
    @csrf
    <h2>Для того чтобы приобрести картину выберите один из удобных вам вариантов: </h2>

    <h2>1. Связаться с автором картин по WhatsApp или Telegram: </h2>
    <p>Номер телефона: + 7 906-062-41-23</p>
    
    <h2>2. Написать на почту: </h2>
    <p>Почта: zhfedor33@gmail.com</p>

 </form>

    <h3>Спасибо за то что выбрали наш магазин!</h3>
</div>
@endsection