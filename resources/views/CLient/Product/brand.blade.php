@extends('Layout.clientLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')

<main class="product-main">
    <h1 class="title">SẢN PHẨM</h1>
    <section class="product">
        <div class="container">
            <div class="block">
                <div class="block-top">
                    @foreach($brands as $brand)
                    <div class="item">
                        <a class="block-image" href="{{ route('products.index', ['brand_id' => $brand->id]) }}">
                            <img src="{{$brand->image}}" alt=""/>
                            <span class="block-title">{{$brand->brandname}}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
<style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
@media only screen and (min-width: 1900px) {
    .product-main {
        margin-top: calc(100px + var(--header-height-large));
    }
}
.product-main {
    margin-bottom: 110px;
    display: block;
    unicode-bidi: isolate;
}
.product-main .title {
    font-size: 34px;
    line-height: 51px;
    color: var(--black-222);
    font-weight: 600;
    text-align: center;
    margin-bottom: 50px;
    text-transform: uppercase;
}

.product-main .product .block .block-top {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}
.product-main .product .block .item {
    position: relative;
    overflow: hidden;
}
.block-image {
    text-decoration: none;
}
.block-image, .block-image:visited, .block-image:hover, .block-image:active {
    color: inherit;
}
.product-main .product .block .item .block-title {
    position: absolute;
    left: 17px;
    bottom: 25px;
    color: white;
    font-size: 20px;
    line-height: 29px;
    font-weight: 600;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, .3);
}
</style>
@endsection
