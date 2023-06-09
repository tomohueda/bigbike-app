@extends('adminlte::page')

@section('title', 'レンタルクラス一覧')

@section('content_header')
    <h1>レンタルクラス一覧</h1>
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

    {{-- 新規登録画面へ --}}
    <a class="btn btn-primary mb-2" href="{{ route('admin.rental_classes.create') }}" role="button">新規登録</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>レンタルクラス名</th>
                        <th>説明</th>
                        <th>1日の価格</th>
                        <th>順番</th>
                        <th style="width: 70px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>{{ $class->name }}</td>
                            {{-- 説明 --}}
                            <td>{!! $class->detail !!}</td>
                            <td>{{ $class->day_price }}</td>
                            {{-- 順番 --}}
                            <td>{{ $class->order }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm mb-2" href="{{ route('admin.rental_classes.edit', $class->id) }}"
                                    role="button">編集</a>
                                <form action="{{ route('admin.rental_classes.destroy', $class->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- 簡易的に確認メッセージを表示 --}}
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('削除してもよろしいですか?');">
                                        削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- ページネーション --}}
        @if ($classes->hasPages())
            <div class="card-footer clearfix">
                {{ $classes->links() }}
            </div>
        @endif
    </div>
@stop