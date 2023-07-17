@extends('layouts.frontend_master')

@section('title')
Archive News
@endsection

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-md-12 category">
            <div class="row">
                @if(count($news) > 0)
                @foreach($news as $item)
                <div class="col-md-3 mt-4">
                    <a class="list-item" href="{{ route('singlenews', [$item->category[0]->slug, $item->slug]) }}">
                        <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}">
                        <p>{{ $item->title }}</p>
                    </a>
                </div>
                @endforeach
                @else
                    <div class="col-md-12">
                        <p class="m-0 text-center bg-warning text-white">Not found data</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection