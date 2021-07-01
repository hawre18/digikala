@extends('Users.layout.header')
@section('content')
<section class="cart-empty container">
    <div class="cart-empty__icon"></div>
    <div class="cart-empty__title">سبد خرید شما خالیست!</div>
    <div class="cart-empty__links">
        <p>می‌توانید برای مشاهده محصولات بیشتر به صفحات زیر بروید:</p>
        <div class="cart-empty__link-urls">
            <a href="#" class="btn-link-spoiler">لیست مورد علاقه من</a>
            <a href="#" class="btn-link-spoiler">محصولات شگفت‌انگیز</a>
            <a href="#" class="btn-link-spoiler">محصولات پرفروش روز</a>
        </div>
    </div>
    <a href="#" class="btn btn-cart">ادامه خرید در تک کالا</a>
</section>

<section class="icon-wrapper container">
    <div class="icon">
        <div class="icon-item">
            <a href="#">
                <img src="/assets/User/images/icon/1.svg" alt="">
                <span>7 روز ضمانت بازگشت</span>
            </a>
        </div> <!--icon-item-->
        <div class="icon-item">
            <a href="#">
                <img src="/assets/User/images/icon/2.svg" alt="">
                <span>پرداخت در محل</span>
            </a>
        </div> <!--icon-item-->
        <div class="icon-item">
            <a href="#">
                <img src="/assets/User/images/icon/4.svg" alt="">
                <span>تحویل اکسپرس</span>
            </a>
        </div> <!--icon-item-->
        <div class="icon-item">
            <a href="#">
                <img src="/assets/User/images/icon/3.svg" alt="">
                <span>پشتیبانی ۲۴ ساعته</span>
            </a>
        </div> <!--icon-item-->
        <div class="icon-item">
            <a href="#">
                <img src="/assets/User/images/icon/5.svg" alt="">
                <span>ضمانت اصل بودن کالا</span>
            </a>
        </div> <!--icon-item-->
    </div>
</section>

<section class="product-wrapper container">
    <div class="headline"><h3>احتمالا به محصولات زیر هم علاقه‌مند باشید</h3></div>
    <div id="pslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/119240285.jpg" alt=""></a> <a class="title" href="#">کاور مدل SOR-010 مناسب برای گوشی موبایل سامسونگ</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/363465.jpg" alt=""></a> <a class="title" href="#">شارژر همراه انکر مدل A1271 PowerCore ظرفیت 20100 م</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/112551619.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy Note 10 Plus N975F/DS</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/111253599.jpg" alt=""></a> <a class="title" href="#">تبلت سامسونگ مدل Galaxy Tab S5e 10.5 LTE 2019 SM-T725</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/113944020.jpg" alt=""></a> <a class="title" href="#">اندروید باکس مدل R69</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/2901119.jpg" alt=""></a> <a class="title" href="#">دسته بازی هویت مدل G89W</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>

        </div><!--wrapper-->
        <!-- Add Arrows -->
        <div id="pslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section> <!--product slider-->

@endsection