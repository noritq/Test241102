@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="grid">
    <div class="heading">
        <p class="heading__index">商品一覧</p>
        <form class="heading__button" action="">
            <button class="heading__button--submit">+商品を追加</button>
        </form>
    </div>
    <div class="content__search">
        <form class="content__search--form" action="">
            <input class="content__search--input" type="text">
            <button class="content__search--button">検索</button>
        </form>
        <label class="content__display" for="display">価格順で表示</label>
        <select class="content__display--select" name="" id="display">
            <option value="">価格で並べ替え</option>
        </select>
    </div>
    <div class="index">
        <div class="index__content">
            <img class="index__content--img" src="{{asset('storage/kiwi.png')}}" alt="イメージ">
            <div class="index__content--detail">
                <p>フルーツ名</p>
                <p>価格</p>
            </div>
        </div>
        <div class="index__content">
            <img class="index__content--img" src="{{asset('storage/banana.png')}}" alt="イメージ">
            <div class="index__content--detail">
                <p>フルーツ名</p>
                <p>価格</p>
            </div>
        </div>
        <div class="index__content">
            <img class="index__content--img" src="{{asset('storage/melon.png')}}" alt="イメージ">
            <div class="index__content--detail">
                <p>フルーツ名</p>
                <p>価格</p>
            </div>
        </div>
        <div class="index__content">
            <img class="index__content--img" src="{{asset('storage/muscat.png')}}" alt="イメージ">
            <div class="index__content--detail">
                <p>フルーツ名</p>
                <p>価格</p>
            </div>
        </div>
    </div>
</div>
<div class="pagination">ページネーション</div>

@endsection