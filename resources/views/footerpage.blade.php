@extends('layouts.frontend_master')

@section('title')
{{$footerpage->title}}
@endsection

@section('content')

<style>
    .footerpage p{
        text-align: justify;
    }
</style>

<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mt-4 footerpage">
                    <p>{!! $footerpage->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection