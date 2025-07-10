@extends('layouts.app')

@section('content')
<h1>Оформление заказа: {{ $painting->title }}</h1>

<form action="{{ route('order.submit', $painting->id) }}" method="POST">
    @csrf

    <div>
        <label for="phone">Номер телефона:</label>
        <input type="text" id="phone" name="phone" required>
    </div>

    <div>
        <label for="postal_office">Почтовое отделение:</label>
        <select id="postal_office" name="postal_office" required>
            <option value="">Выберите отделение</option>
            <option value="Отделение №1">Отделение №1</option>
            <option value="Отделение №2">Отделение №2</option>
            <!-- добавьте свои варианты -->
        </select>
    </div>

    <div>
        <label for="card_number">Номер карты для оплаты:</label>
        <input type="text" id="card_number" name="card_number" required>
    </div>

    <!-- Можно добавить поля для срока действия карты, CVV и т.п -->

    <button type="submit">Произвести оплату</button>
</form>
@endsection