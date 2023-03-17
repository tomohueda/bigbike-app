@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品編集</h1>
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
        <form action="{{ route('admin.product.update', $product->id) }}" method="post">
            @csrf @method('PUT')
            <div class="card-body">
            {{-- 商品名 --}}
                <div class="form-group">
                    <label for="name">商品名</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" placeholder="商品名" />
                </div>
                {{-- サブタイトル --}}
                <div class="form-group">
                    <label for="copy">サブタイトル</label>
                    <input type="text" class="form-control" id="copy" name="copy" value="{{ old('copy', $product->name) }}" placeholder="サブタイトル" />
                </div>
                {{-- 詳細説明 --}}
                <div class="form-group">
                    <label for="detail">詳細説明</label>
                    <textarea class="form-control" id="detail" name="detail" placeholder="詳細説明" />{{ old('detail', $product->detail) }}</textarea>
                </div>
                {{-- スペック --}}
                <div class="form-group">
                    <label for="spec">スペック</label>
                    <textarea class="form-control" id="spec" name="spec" placeholder="詳細説明" />{{ old('spec', $product->spec) }}</textarea>
                </div>
                {{-- カテゴリー --}}
                <div class="form-group">
                    <label for="order">カテゴリー</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $product->category_id)selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- クラス --}}
                <div class="form-group">
                    <label for="order">クラス</label>
                    <select class="form-control" id="class_id" name="class_id">
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}" @if($class->id ==  $product->class_id)selected @endif>{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- 順番 --}}
                <div class="form-group">
                    <label for="order">順番</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $product->order) }}" placeholder="0" />
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('admin.product.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop