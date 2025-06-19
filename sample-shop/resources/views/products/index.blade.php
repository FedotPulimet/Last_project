

@extends('layouts.app')


@section('content')
<div class="container my-5">
    <h1 class="mb-4">Каталог товаров</h1>

    {{-- Кнопка для добавления нового товара (если есть права) --}}
    {{-- <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить товар</a> --}}

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($products->isEmpty())
        <p>Товары не найдены.</p>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="card h-100">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" class="card-img-top" alt="Нет изображения">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="mt-auto"><strong>Цена:</strong> {{ number_format($product->price, 2, ',', ' ') }} ₽</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Подробнее</a>
                            {{-- Можно добавить кнопку "Купить" или "В корзину" --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Пагинация --}}
        {{ $products->links() }}
    @endif
</div>
@endsection