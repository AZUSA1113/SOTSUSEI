
@extends('layouts.app')

@section('content')

<div class="card-body">
    <h1>落とし物登録</h1>


    <form action="/finding/store" method="POST" enctype = "multipart/form-data">
    <!-- 　　// csrfは必ず入れる。二重送信対策。@csrfはformタグの中の一番上に入れると無難。 -->
    
    @csrf

        <table class="text-center">
            <tr style="background-color: #adff2f;"><th>画像</th><th>落とし物名</th><th>緯度</th><th>経度</th><th>備考</th></tr>
            <tr>
                <!-- //画像 -->
                <td><input type="file" name="image"></td>
                
                <!-- //名前 -->
                <td><input type="text" name="foundname"></td>

                <!-- //緯度 -->
                <td><input type="text" name="lat" value="43.06417"></td>
                
                <!-- //経度 -->
                <td><input type="text" name="lng" value="141.34694"></td>

                <!-- //コメント -->
                <td><input type="textarea" name="comment"></input></td>
            </tr>
        </table>

        <button><a href="https://www.geocoding.jp/">住所から緯度経度を検索</a></button>

        <button>登録</button>
    </form>
</div>
@endsection