
@extends('layouts.app')

@section('content')
<div class="card-body">
    <h1 class="text-center text-border">どこ？ここ！【ドココ】</h1>

    <!-- <button type="button" onclick="location.href='/login'">ログイン</button> -->

    <button class="position:absolute right:0"><a href="{{ route('found-register') }}">落とし物登録</a></button>

    <form action="{{ route('search') }}" method="GET">   
        <input type="text" name="keyword" value="">
        <!-- <input type="submit" value="検索"> -->
        <button type="submit">検索</button>
        <button><a href="{{ route('top') }}">検索解除</a></button>
    </form>
    
    <h2>New落とし物</h2>
    <div>
        <table class="text-center">
            <tr  style="background-color: #87cefa;"><th>時間</th><th>落とし物名</th><th>備考</th><th>画像</th></tr>
            @foreach($Findings as $Finding)
            <tr class="border-bottom">
                <th><p>{{ $Finding->created_at }}</p></th>
                <td><p>{{ $Finding->foundname }}</p></td>
                <td><p>{{ $Finding->comment }}</p></td>
                <td style="width:40% ;"><img src="{{ asset('storage/'.$Finding->image) }}" alt="" style="width:50%; "></td>
            </tr>


            @endforeach
        </table>
    </div>
</div>
@endsection