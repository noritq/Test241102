@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/update.css')}}">
@endsection

@section('content')
<div class="content">
    <form action="/products" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$products->id}}">
    <div class="grid">
        <div class="heading">
            <p>商品一覧><a href="">キウイ</a></p>
        </div>
        <div class="content__img">
            <img class="content__img--data" src="{{asset('storage/' . $products->image)}}" alt="イメージ">
            <input class="content__img--select" type="file">
            <div class="content__error">@error('image'){{$message}}@enderror</div>
        </div>
        <div class="content__detail">
            <div class="content__detail--name">
                <p>商品名</p>
                <input class="content__detail--name--input" type="text" name="name" value="{{$products->name}}">
            </div>
            <div class="content__error">@error('name'){{$message}}@enderror</div>
            <div class="content__detail--price">
                <p>値段</p>
                <input class="content__detail--price--input" type="text" name="price" value="{{$products->price}}">
            </div>
            <div class="content__error">@error('price'){{$message}}@enderror</div>
            <div class="content__detail--season">
                <p>季節</p>
                    <label class="checkbox"><input type="checkbox" name="season" value="spring">春</label>
                    <label class="checkbox"><input type="checkbox" name="season" value="summer">夏</label>
                    <label class="checkbox"><input type="checkbox" name="season" value="autumn">秋</label>
                    <label class="checkbox"><input type="checkbox" name="season" value="winter">冬</label>
            </div>
            <div class="content__error">@error('season'){{$message}}@enderror</div>
        </div>
        <div class="content__description">
            <p>商品説明</p>
            <textarea class="content__description--input" name="description" cols="130" rows="8">{{$products->description}}</textarea>
        <div class="content__error">@error('description'){{$message}}@enderror</div>
        </div>
        <div class="content__button">
            <button class="content__button--submit">変更を保存</button>
        </form>
            <form action="/products"><button class="content__button--back">戻る</button></form>
        </div>
    </div>
</div>


@endsection