@extends('layouts.app')
@section('content')

<div class="bg-image-fixed">
    <img src="{{ asset('images/jaredd-craig-HH4WBGNyltc-unsplash (2).jpg') }}" alt="logo">
  </div>
  <div>
    <div class="head-text container text-center">
      一覧ページ
    </div>
    <div class="main-contents container">
    <table class="book-table">
      <tr>
        <td class="td-center" width="500px" height="80px">タイトル</td>
        <td class="td-center" width="500px" height="80px">著者名</td>
        <td class="td-center" width="200px" height="80px">編集</td>
      </tr>
    </table>
      <table border="1" class="book-table">
        @foreach ($posts as $post)
          <tr>
            <td width="500px" height="80px">{{ $post->name }}</td>
            <td width="500px" height="80px">{{ $post->title }}</td>
            <td class="td-flex" width="200px" height="80px">
              <a class="btn btn-secondary"href="./touroku/{{ $post->id }} ">詳細</a> 
              <a href="/hello/delete/{{ $post->id }}" class="btn-delete btn btn-danger left">削除</a>
            </td>
          </tr>
        @endforeach
      </table>
        <!-- <tr>
          <td width="360"></td>
          <td></td>
          <td><a href="././touroku">詳細</a></td>
        </tr> -->
        <!-- <tr>
          <td></td>
          <td></td>
          <td><a href="././touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="././touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./touroku">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./syousai">詳細</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="./syousai">詳細</a></td>
        </tr> -->
      </table>
      <div class="book-form">
        <form action="{{ url('/book/create')}}" method="POST">
        {{ csrf_field() }}
        <label class="vv" for="name">タイトル</label>
          <input type="text" id="name" name="name" required  minlength="2" maxlength="80" size="10">
         
          <label class="vv" for="name">著者名</label>
  <input type="text" name="title" value="" class="edit-new">
           <!-- <button type="submit" name="add" class="btn-square-raised">登録</button>  -->
           <div class="btn-text-gradient">
              <button type="submit" name="add" class="btn btn-border-shadow btn-border-shadow--radius">
                <span class="btn-text-gradient--yg">登録</span>
              </button>
            </div>
         
        </form>
      </div>
    </div>
  </div>
@endsection



<!-- 110行目のbuttonのサイズを親要素目一杯に広げる
中の色を黒にする
109行目のdivにpaddingを指定　する→グラデーションが見えるようになる
 -->
