@extends('layouts.backend_master')

@section('title', 'Upload News')
@section('breadcrumb_title', 'Upload News')
@section('breadcrumb_item', 'Upload News')

@section('content')
    <upload-news id="{{ $id }}"></upload-news>
@endsection
