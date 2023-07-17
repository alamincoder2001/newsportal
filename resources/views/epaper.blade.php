@extends('layouts.frontend_master')

@section('title')
ই-পেপার
@endsection

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @if(count($epapers) > 0)
                @foreach($epapers->take(6) as $item)
                <div class="col-md-4 mt-4 epaper">
                    <a href="{{ asset($item->image != null ? $item->image : 'noImage.jpg') }}" class="image-popup-vertical-fit">
                        <img src="{{ asset($item->image != null ? $item->image : 'noImage.jpg') }}">
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