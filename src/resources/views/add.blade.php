@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/add.css')}}">
@endsection

@section('content')

<div class="back">
    <div class="content">
        <h1 class="content__heading">商品登録</h1>
        <form action="/products/register" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="content__name">
                <label for="name">
                    商品名 <span class="content--required">必須</span>
                </label>
                <div><input class="content__name--input" type="text" name="name" placeholder="商品名を入力"></div>
                <div class="content__error">@error('name'){{$message}}@enderror</div>
            </div>
            <div class="content__price">
                <label for="price">
                    値段 <span class="content--required">必須</span>
                </label>
                <div><input class="content__price--input" type="text" name="price" placeholder="値段を入力"></div>
                <div class="content__error">@error('price'){{$message}}@enderror</div>
            </div>
            <div class="content__image">
                <label for="image">
                    商品画像 <span class="content--required">必須</span>
                </label>
                    <div id="preview" style="width: 300px;"></div>
                    <input id="inputElm" type="file" name="image" accept=".png, .jpeg">
                    <div class="content__error">@error('image'){{$message}}@enderror</div>
                <script>
                    const inputElm = document.getElementById('inputElm');
                    inputElm.addEventListener('change', (e) => {
                        const file = e.target.files[0];
                        const fileReader = new FileReader();
                        fileReader.readAsDataURL(file);
                        fileReader.addEventListener('load', (e) => {
                            const imgElm = document.createElement('img');
                            imgElm.src =e.target.result;
                            const targetElm = document.getElementById('preview');
                            targetElm.appendChild(imgElm);
                        });
                    });
                </script>
            </div>
            <div class="content__season">
                <label for="">季節 <span class="content--required">必須</span>
                <div>
                    <label class="checkbox"><input type="checkbox" name="season" value="1">春</label>
                    <label class="checkbox"><input type="checkbox" name="season" value="2">夏</label>
                    <label class="checkbox"><input type="checkbox" name="season" value="3">秋</label>
                    <label class="checkbox"><input type="checkbox" name="season" value="4">冬</label>
                </div>
                <div class="content__error">@error('season'){{$message}}@enderror</div>
                </label>
            </div>
            <div class="content__description">
                <label for="">商品説明 <span class="content--required">必須</span>
                <textarea class="content__description--input" name="description" id="" cols=100 rows=8></textarea>
            </div>
            <div class="content__error">@error('description'){{$message}}@enderror</div>
            <div class="content__submit">
                <button class="content__submit--button">登録</button>
        </form>
        <form action="/products"><button class="content__submit--back">戻る</button></form>
            </div>
    </div>
</div>


@endsection