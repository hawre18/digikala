@extends('Users.layout.header')
@section('content')
<section class="search container">
    <div class="o-page__aside">
        <div class="c-listing-sidebar">
            <div class="c-box">
                <div class="c-box__header">جستجو در نتایج:</div>
                <div class="c-box__content"><input type="text" placeholder="نام محصول یا برند مورد نظر را بنویسید…"></div>
            </div>
            <div class="c-box">
                <div class="c-filter c-filter--switcher">
                    <span>فقط کالاهای موجود</span>
                    <div class="scroll">
                            <span id="circle">
                                <input id="circle_input" type="checkbox">
                            </span>
                    </div>
                </div>
            </div>
            <div class="c-box">
                <div class="c-filter c-filter--switcher">
                    <span>فقط کالاهای آماده ارسال</span>
                    <div class="scroll">
                            <span id="circle">
                                <input id="circle_input" type="checkbox">
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="o-page__content">
        <article>
            <nav>
                <ul class="c-breadcrumb">
                    <li><span>فروشگاه اینترنتی تک‌کالا</span></li>
                    <li><span>۸۵۵,۲۶۷ کالا</span></li>
                </ul>
            </nav>
            <div class="c-listing">
                <div class="c-listing__header">
                    <ul class="c-listing__sort" data-label="مرتب‌سازی بر اساس :">
                        <li><span>مرتب سازی بر اساس :</span></li>
                        <li><a href="#" class="is-active">پربازدیدترین</a></li>
                        <li><a href="#">محبوب ترین</a></li>
                        <li><a href="#">جدیدترین</a></li>
                        <li><a href="#">پرفروش ترین</a></li>
                        <li><a href="#">ارزان ترین</a></li>
                        <li><a href="#">گران ترین</a></li>
                    </ul>
                    <ul class="c-listing__type">
                        <li><button><i class="fa fa-bars"></i></button></li>
                        <li><button class="is-active"><i class="fa fa-grip-horizontal"></i></button></li>
                    </ul>
                </div>
                <ul class="c-listing__items">
                    <li><div class="c-product-box c-promotion-box ">
                            <a href="#" class="c-product-box__img c-promotion-box__image"><img src="/assets/User/images/113800046.jpg" alt=""></a>
                            <div class="c-product-box__content">
                                <a href="#" class="title">تبلت اپل مدل iPad mini 4 WiFi ظرفیت 128 گیگابایت</a>
                                <span class="price">۶,۰۸۰,۰۰۰ تومان</span>
                            </div>
                            <div class="c-product-box__tags">
                                <span class="c-tag c-tag--rate">۳.۹</span>
                            </div>
                        </div></li>
                    <li><div class="c-product-box c-promotion-box ">
                            <a href="#" class="c-product-box__img c-promotion-box__image"><img src="/assets/User/images/113800046.jpg" alt=""></a>
                            <div class="c-product-box__content">
                                <a href="#" class="title">تبلت اپل مدل iPad mini 4 WiFi ظرفیت 128 گیگابایت</a>
                                <span class="price">۶,۰۸۰,۰۰۰ تومان</span>
                            </div>
                            <div class="c-product-box__tags">
                                <span class="c-tag c-tag--rate">۳.۹</span>
                            </div>
                        </div></li>
                    <li><div class="c-product-box c-promotion-box ">
                            <a href="#" class="c-product-box__img c-promotion-box__image"><img src="/assets/User/images/113800046.jpg" alt=""></a>
                            <div class="c-product-box__content">
                                <a href="#" class="title">تبلت اپل مدل iPad mini 4 WiFi ظرفیت 128 گیگابایت</a>
                                <span class="price">۶,۰۸۰,۰۰۰ تومان</span>
                            </div>
                            <div class="c-product-box__tags">
                                <span class="c-tag c-tag--rate">۳.۹</span>
                            </div>
                        </div></li>
                    <li><div class="c-product-box c-promotion-box ">
                            <a href="#" class="c-product-box__img c-promotion-box__image"><img src="/assets/User/images/113800046.jpg" alt=""></a>
                            <div class="c-product-box__content">
                                <a href="#" class="title">تبلت اپل مدل iPad mini 4 WiFi ظرفیت 128 گیگابایت</a>
                                <span class="price">۶,۰۸۰,۰۰۰ تومان</span>
                            </div>
                            <div class="c-product-box__tags">
                                <span class="c-tag c-tag--rate">۳.۹</span>
                            </div>
                        </div></li>
                </ul>
                <div class="c-pager">
                    <ul class="c-pager__items">
                        <li><a class="c-pager__item is-active" href="#">1</a></li>
                        <li><a class="c-pager__item" href="#">2</a></li>
                        <li><a class="c-pager__item" href="#">3</a></li>
                        <li><a class="c-pager__item" href="#">4</a></li>
                        <li><a class="c-pager__item" href="#">>></a></li>
                    </ul>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection