@extends('layouts.admin')
@section('title', 'todo一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>todo一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\TodoController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\TodoController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-3">todoを検索する</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="70%">todo</th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $todo)
                                <tr>
                                    <th>{{ $todo->id }}</th>
                                    <td>{{ str_limit($todo->content, 100) }}</td>
                                    <td>
                                      <a class="btn btn-outline-success" href="{{ action('Admin\TodoController@edit', ['id' => $todo->id]) }}">編集</a>
                                      <a class="btn btn-outline-danger" href="{{ action('Admin\TodoController@delete', ['id' => $todo->id]) }}">削除</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
