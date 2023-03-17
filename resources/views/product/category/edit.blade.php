@extends('adminlte::page')

@section('title', 'カテゴリー編集')

@section('content_header')
    <h1>カテゴリー編集</h1>
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
        <form action="{{ route('admin.product_categories.update', $category->id) }}" method="post">
            @csrf @method('PUT')
            <div class="card-body">
                {{-- カテゴリー名入力 --}}
                <div class="form-group">
                    <label for="name">カテゴリー名</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $category->name) }}" placeholder="カテゴリー名" />
                </div>
                {{-- 説明入力 --}}
                <div class="form-group">
                    <label for="detail">説明</label>
                    <input type="text" class="form-control" id="detail" name="detail"
                        value="{{ old('detail', $category->detail) }}" placeholder="説明" />
                </div>
                {{-- 順番入力 --}}
                <div class="form-group">
                    <label for="order">説明</label>
                    <input type="number" class="form-control" id="order" name="order"
                        value="{{ old('order', $category->order) }}" placeholder="0" />
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('admin.product_categories.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop