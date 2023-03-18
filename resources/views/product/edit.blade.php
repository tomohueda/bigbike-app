@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品編集  (ID:{{ $product->id }})</h1>
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
        <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
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
                {{-- リンクURL --}}
                <div class="form-group">
                    <label for="name">商品名</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $product->url) }}" placeholder="リンクURL" />
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
                {{-- 画像の登録 --}}
                @include('product.form.images')
                <div class="alert alert-secondary" role="alert">
                    画像を差し替える場合は再登録してください。既存の画像は削除されます。
                </div>
                @if(count($product->images) > 0)
                                <div class="d-flex flex-row bd-highlight mb-3">
                                @foreach($product->images as $image)
                                    <div class="p-2 bd-highlight" style="width:400px">
                                        画像{{$loop->index + 1}}
                                        <img class="img-thumbnail" alt="{{ $image->name }}" class="object-fit w-full" src="{{ asset('storage/images/' . $image->name) }}">
                                    </div>
                                @endforeach
                                </div>

                @endif
                

            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('admin.product.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop