@extends ('web.master')

@section('title', "{{$category->name}}")

@section('content')
    <h2>{{$category->name}}</h2>
    <hr class="my-4">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($products as $product)
            <div class="col mb-4">
                <div class="card .h-100 hover-shadow">
                    <a href={{ URL::action('ViewController@product', $product->id) }}>
                        <div class="card-img">
                            <img src="{{ asset('static/images/products/' . $product->id . '.png') }}" class="img-fluid, card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <span class="price-tag">${{ number_format($product->price / 100, 2) }} €</span>
                        <small class="text-muted float-right">Add to cart</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr class="my-4">
@stop