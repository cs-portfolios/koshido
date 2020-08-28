@extends('layouts.app')
@section('content')
<div class="bg-image-fixed">
  <img src="{{ asset('images/jaredd-craig-HH4WBGNyltc-unsplash (2).jpg') }}" alt="logo">
</div>
<div class="kk-text container text-center">
詳細をまとめよう
</div>
<div class="book-form">
  <form action="{{ url('/comment/create/')}}"  method="POST">
    {{ csrf_field() }}
    <label class="vv" for="name">印象に残った事</label>
    <textarea rows="5" cols="50" type="text" id="name" name="impression"></textarea>
    <!-- <input type="text" id="name" name="impression" required  minlength="" maxlength="80" size="1">  -->
    <label class="vv" for="name">役に立つ場面</label>
    <textarea rows="5" type="text" name="useful" value="" class="edit-new"></textarea>
    <!-- <input type="text" name="useful" value="" class="edit-new"> -->
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="btn-text-gradient mt-5">
           <button type="submit" name="add" class="btn btn-border-shadow btn-border-shadow--radius"><span class="btn-text-gradient--yg">登録
</span>
           </button></div>
         
     <!-- <button type="submit" name="add" class="btn-square-raised">登録</button>  -->
     
   
  </form>
  <ul class="hu">
    <li>印象に残った事</li>
    <li>役に立つ場面</li>
  </ul>
  <div class="main-contents container">
    <table border="1" class="book-table" >
      @foreach ($post->comments as $comment)
        <tr>
          <td width="19000" height="80px">{{ $comment->impression }}</td>
          <td width="19000" height="80px">{{ $comment->useful }}
            <div class="ww">
          <a href="/comment/delete/{{ $comment->id }}" class="btn-delete btn btn-danger">削除</a> </td>
</div>
        </tr>
      @endforeach
    </table>
  </div>
</div>

<div class="footer-link-wrap mt-5">
  <div class="btn-text-gradient foot">
    <a href="{{ url('/hone') }}" class="btn btn-border-shadow btn-border-shadow--radius">
    <span class="btn-text-gradient--yg">一覧ページ</span>
    </a>
  </div>
</div>
<!-- <button class="btn-square-raised">
<a href="{{ url('/hone') }}">
一覧ページ
</a></button>
                     -->



  <!-- <a href="" class="btn-square-raised">登録</a> 
 
  {{ $post->id }}" class="btn-delete btn">
    削除
  </a></td>
  <!-- <div class="kk-text container text-center">
 
  
  印象に残った事
 
</div>

{{ $post->impression }}
<hr>
<div class="kk-text container text-center">

  役に立つ場面
  
</div>

{{ $post->useful }}

<hr>
 -->

<!-- <div class="book-form">
        <form action="{{ url('/booksyousai/create')}}" method="POST">
       
        <label for="name">印象に残った事</label>
          <input type="text" id="name" name="name" required  minlength="4" maxlength="300" size="10">
         
          <label for="name">役に立つ場面</label>
  <input type="text" name="title" value="" class="edit-new">
        </form> -->

  
   <!-- <a href="" class="btn-square-raised">登録</a> 
  <a href="./hone" class="btn-square-raised">
 
 一覧へ</a> --> 
 

 
@endsection