@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="grid">
    <div class="heading">
        <p class="heading__index">商品一覧</p>
        <form class="heading__button" action="/products/register">
            <button class="heading__button--submit">+商品を追加</button>
        </form>
    </div>
    <div class="content__search">
        <form class="content__search--form" action="/products/search" method="get">
            <input class="content__search--input" type="text" name="keyword" value="{{$keyword}}">
            <input class="content__search--button" type="submit" value="検索">
        </form>
        <label class="content__display" for="display">価格順で表示</label>
        <select class="content__display--select" name="" id="display">
            <option value="">価格で並べ替え</option>
        </select>
    </div>
    <div class="index">
        @if (@isset($products))
        @foreach ($products as $product)
        <div class="index__content">
            <a href="/products/{{$product->id}}"><img class="index__content--img" src="{{asset('storage/' . $product->image)}}" alt="イメージ"></a>
            <div class="index__content--detail">
                <p>{{$product->name}}</p>
                <p>¥{{$product->price}}</p>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div class="pagination">{{$products->Links('vendor.pagination.bootstrap-4')}}</div>
</div>

@endsection