@extends('adminlte::page')

@section('title', '商品管理画面')

@section('content_header')
    <h1>商品管理画面</h1>
@stop

@section('content')
    {{-- 完了メッセージ --}}
    @if (session('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            {{ session('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
        </div>
    </div>
@stop