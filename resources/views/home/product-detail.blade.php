@extends('layouts.home')

@section('title', $viewData['title'])

@section('content')

    @php($product = $viewData['product'])

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/product/' . $product->vendor . '.jpg') }}" alt="">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-8">
                        <h1 class="h4">{{ $product->name }}</h1>
                        <p>{{ $product->vendor }}</p>
                        <p>{{ $product->size }}</p>
                    </div>
                    <div class="col-4">
                        <div class="btn-group">
                            <a href="{{ route('home.product-detail', $product->uuid) }}" class="btn btn-sm btn-outline-secondary">Купить</a>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#delivery">Доставка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#payment">Оплата</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#return">Гарантия и возврат</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="delivery" class="tab-pane fade in active">
                        <p>Доставка осуществляется службой.</p>
                    </div>
                    <div id="payment" class="tab-pane fade">
                        <p>Some content in menu 1.</p>
                    </div>
                    <div id="return" class="tab-pane fade">
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
