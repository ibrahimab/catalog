@extends('layouts.master')

@section('content')

    <div class="btn-group" data-isotope-role="filters">
            <button type="button" data-isotope-role="filter" data-isotope-filter="*" class="btn btn-default">All</button>
        @foreach ($categories as $category)
            <button type="button" data-isotope-role="filter" data-isotope-filter="{{ $category->title }}" class="btn btn-{{ $category->theme }}">{{ $category->title }}</button>
        @endforeach
    </div>

    <hr />

    <div class="row"{!! null !== $default_filter ? " data-isotope-default-filter=\"$default_filter->title\" " : '' !!} data-isotope-role="container">
        @foreach ($products as $product)
            <div class="col-xs-6 col-md-3" data-isotope-role="item" data-isotope-filter="{{ $product->category->title }}">
                <div class="thumbnail thumbnail-small">
                    <img src="/images/products/{{ $product->id }}/{{ $product->image }}" alt="{{ $product->title }}"/>
                    <div class="caption">
                        <strong>{{ $product->title }}</strong>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection