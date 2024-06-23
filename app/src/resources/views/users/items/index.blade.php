@extends('layouts.app')
@php($haveItemList = true)
@section('content')
    <div class="bg-warning-subtle rounded">
        <h3 class="display-10">ユーザー所持アイテム一覧</h3>
    </div>

    <div>
        <form method="get" action="{{route('users.showItem')}}">
            <input type="text" name="name" placeholder="ユーザー名を入力">
            <input type="submit" value="検索">
        </form>
    </div>

    <table class="justify-content-start table table-bordered  p-2 overflow-auto">
        <tr>
            <th>ID</th>
            <th>ユーザー名</th>
            <th>アイテム名</th>
            <th>所持個数</th>
        </tr>

        @foreach($haveItems as $haveItem)
            <tr>
                <td>{{$haveItem['id']}}</td>
                <td>{{$haveItem['user_name']}}</td>
                <td>{{$haveItem['item_name']}}</td>
                <td>{{$haveItem['amount']}}</td>
            </tr>
        @endforeach
    </table>
@endsection
