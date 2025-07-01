@extends('layouts.app')

@section('content')
<h2>Мой профиль</h2>

@if(session('status'))
<div style="color: green;">{{ session('status') }}</div>
@endif

<form action="{{ route('profile.update') }}" method="POST">
@csrf
<a href="{{ route('profile.edit') }}">Редактировать профиль</a>

<div>
<label for="full_name">Имя:</label>
<input type="text" id="full_name" name="full_name" value="{{ old('full_name', $profile->full_name) }}">
</div>

<div>
<label for="phone">Телефон:</label>
<input type="text" id="phone" name="phone" value="{{ old('phone', $profile->phone) }}">
</div>

<div>
<label for="address">Адрес:</label>
<textarea id="address" name="address">{{ old('address', $profile->address) }}</textarea>
</div>

<div>
<label for="preferred_payment_method">Предпочитаемый способ оплаты:</label>
<input type="text" id="preferred_payment_method" name="preferred_payment_method" value="{{ old('preferred_payment_method', $profile->preferred_payment_method) }}">
</div>

<button type="submit">Сохранить</button>
</form>
@endsection