@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach ($categories as $category)

            <div class="col-xs-6 col-md-3">

                <div class="thumbnail thumbnail-large">
                    <img data-src="holder.js/300x200/text:{{ $category->title }}/{{ $category->theme }}" alt="{{ $category->title }}" />
                    <div class="caption">
                        <h3>{!! link_to_route('products', $category->title, ['id' => $category->id]) !!}</h3>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>

            </div>

        @endforeach

    </div>

@endsection