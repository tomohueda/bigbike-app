@extends('adminlte::page')

@section('title', 'レンタルクラス編集')

@section('content_header')
    <h1>レンタルクラス編集</h1>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            {{-- エラーの表示 --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 編集画面 --}}
    <div class="card">
        <form action="{{ route('admin.rental_classes.update', $class->id) }}" method="post">
            @csrf @method('PUT')
            <div class="card-body">
                {{-- レンタルクラス名入力 --}}
                <div class="form-group">
                    <label for="name">レンタルクラス名</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $class->name) }}" placeholder="レンタルクラス名" />
                </div>
                {{-- 説明入力 --}}
                <div class="form-group">
                    <label for="detail">説明</label>
                    <textarea class="form-control" id="detail" name="detail" />{{ old('detail', $class->detail) }}</textarea>
                </div>
                {{-- 順番入力 --}}
                <div class="form-group">
                    <label for="order">説明</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $class->order) }}" placeholder="0" />
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('admin.rental_classes.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop