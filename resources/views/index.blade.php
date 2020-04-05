@extends('layouts.admin')
@section('title', 'Qiita php記事一覧')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <h2>記事一覧</h2>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="50%">記事タイトル</th>
                                <th width="10%">いいね数</th>
                                <th width="10%">コメント数</th>
                                <th width="30%">作成日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post['title']}}</th>
                                    <td>{{$post['likes_count']}}</td>
                                    <td>{{$post['comments_count']}}</td>
                                    <td>{{date('Y年m月d日',  strtotime($post['created_at']))}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
