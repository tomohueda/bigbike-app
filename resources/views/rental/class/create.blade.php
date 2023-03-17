@extends('adminlte::page')

@section('title', 'レンタルクラス登録')

@section('content_header')
    <h1>レンタルクラス登録</h1>
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
        <form action="{{ route('admin.rental_classes.store') }}" method="post">
            @csrf
            <div class="card-body">
                {{-- レンタルクラス名入力 --}}
                <div class="form-group">
                    <label for="name">レンタルクラス名</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="レンタルクラス名" />
                </div>
                {{-- レンタルクラス詳細入力 --}}
                <div class="form-group">
                    <label for="detail">レンタルクラス詳細</label>
                    <textarea class="form-control" id="detail" name="detail" value="{{ old('detail') }}" placeholder="詳細" /></textarea>
                </div>
                {{-- レンタルクラス順番入力 --}}
                <div class="form-group">
                    <label for="order">レンタルクラス順番</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order') }}" placeholder="0" />
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('admin.rental_classes.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
編集