@extends('adminlte::page')

@section('title', 'カテゴリー登録')

@section('content_header')
    <h1>カテゴリー登録</h1>
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

    {{-- 登録画面 --}}
    <div class="card">
        <form action="{{ route('admin.product_categories.store') }}" method="post">
            @csrf
            <div class="card-body">
                {{-- カテゴリー名入力 --}}
                <div class="form-group">
                    <label for="name">カテゴリー名</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="カテゴリー名" />
                </div>
                {{-- カテゴリー詳細入力 --}}
                <div class="form-group">
                    <label for="detail">カテゴリー詳細</label>
                    <input type="text" class="form-control" id="detail" name="detail" value="{{ old('detail') }}"
                        placeholder="詳細" />
                </div>
                {{-- カテゴリー順番入力 --}}
                <div class="form-group">
                    <label for="order">カテゴリー順番</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order') }}"
                        placeholder="0" />
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('admin.product_categories.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
編集