@extends('layouts.admin')
@section('title', 'todo一覧')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <h2>todo一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="{{ action('Admin\TodoController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">作成日</th>
                                <th width="50%">todo</th>
                                <th width="30%"></th>
                            </tr>
                        </thead>
                        <tbody>
                          @if ($auth->todos != NULL)
                            @foreach($auth->todos as $todo)
                                <tr>
                                    <th>{{ $todo->created_at->format('Y年m月d日') }}</th>
                                    <td>{{ str_limit($todo->content, 100) }}</td>
                                    <td>
                                      <a class="btn btn-outline-success" href="{{ action('Admin\TodoController@edit', ['id' => $todo->id]) }}">変更</a>
                                      <a class="btn btn-outline-danger" href="{{ action('Admin\TodoController@delete', ['id' => $todo->id]) }}">完了</a>
                                    </td>
                                </tr>
                            @endforeach
                          @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
