

@extends('layouts.app')


@section('content')
<div class="container my-5">
    <h1 class="mb-4">Каталог товаров</h1>
    <div class="product-list" style="display:flex; flex-wrap:wrap; gap:90px; border-radius: 30px; ">
    @foreach($products as $product)
        <div class="product-card" style="border:1px solid #ccc; padding:30px; width:600px; background-color: white; border-radius: 30px;">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width:90%; height:400px;">
            <h3>{{ $product->name }}</h3>
            <p>Автор: {{ $product->author }}</p>
            <p> {{ $product->description }}</p>
            <p>Размер: {{ $product->leght }}</p>
            <p>Цена: {{ number_format($product->price, 2, ',', ' ') }} руб.</p>

            <form action="{{ route('order.form') }}" method="GET" style="display:inline;">
            <button type="submit">Заказать картину</button>
            </form>
        </div>
    @endforeach
</div>


    {{-- Кнопка для добавления нового товара (если есть права) --}}
    {{-- <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить товар</a> --}}

        <a href="{{ route('about') }}" class="btn btn-primary">Об авторах</a>


    <h4>Конец каталога.</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($products->isEmpty())
        <p>Товары не найдены.</p>
    @else




        {{-- Пагинация --}}
        {{ $products->links() }}
    @endif
</div>
@endsection