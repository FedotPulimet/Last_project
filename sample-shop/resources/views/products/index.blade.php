

@extends('layouts.app')


@section('content')
<div class="container my-5">
    <h1 class="mb-4">Каталог товаров</h1>
    <div class="product-list" style="display:flex; flex-wrap:wrap; gap:90px; border-radius: 30px; ">
    @foreach($products as $product)
        <div class="product-card" style="border:1px solid #ccc; padding:30px; width:600px; background-color: lightblue; border-radius: 30px;">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width:100%; height:auto;">
            <h3>{{ $product->name }}</h3>
            <p>Автор: {{ $product->author }}</p>
            <p> {{ $product->description }}</p>
            <p>Размер: {{ $product->leght }}</p>
            <p>Цена: {{ number_format($product->price, 2, ',', ' ') }} руб.</p>
            <button type="submit">Заказать картину</button>
            
        </div>
    @endforeach
</div>

    {{-- Кнопка для добавления нового товара (если есть права) --}}
    {{-- <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить товар</a> --}}

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