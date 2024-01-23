@extends('layouts.admin')
@section('title', $viewData['title'])

@section('content')
    <div class="card mb-4">
        <div class="card-header">Edit Product</div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('admin.product.update', ['id' => $viewData['product']->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Наименование:</label>
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['product']->name }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Цена:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="{{ $viewData['product']->price }}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Артикул:</label>
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <input name="article" value="{{ $viewData['product']->article }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Фото:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        @if($viewData['product']->image)
                            <img class="img-fluid" src="{{ asset('/storage/' . $viewData['product']->image) }}" alt="">
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">
                        {{ $viewData['product']->description }}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>

        </div>
    </div>
@endsection
