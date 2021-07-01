@extends('Users.layout.header')
@section('content')
    <section class="c-checkout-alert container">
    <div class="c-checkout-alert__icon failed"><i class="fa fa-plus"></i></div>
    <div class="c-checkout-alert__title">
        <h4>سفارش <span class="c-checkout-alert__highlighted c-checkout-alert__highlighted--success">DKC-39637837</span> ثبت شد اما پرداخت ناموفق بود.</h4></div>
    <div class="c-checkout-alert__content"> <span class="c-checkout-alert__content--failed">برای جلوگیری از لغو سیستمی سفارش، تا ۶ ساعت آینده پرداخت را انجام دهید.</span>
        <br> <span class="c-checkout-alert__content--small">چنانچه طی این فرایند مبلغی از حساب شما کسر شده است، طی ۷۲ ساعت آینده به حساب شما باز خواهد گشت.</span></div>
</section>
<form action="#">
    <section class="payment-methods container">
        <div class="o-headline o-headline--checkout"><span>انتخاب شیوه پرداخت </span></div>
        <ul class="c-checkout-paymethod">
            <li>
                <div class="c-checkout-paymethod__item c-checkout-paymethod__item--cc has-options js-checkout-paymethod__item is-selected is-select-mode">
                    <label class="c-ui-radio c-ui-radio--primary">
                        <input type="radio" name="payment_method" checked> <span class="c-ui-radio__check"></span> </label>
                    <h4 class="c-checkout-paymethod__title"> پرداخت اینترنتی ( آنلاین با تمامی کارت‌های بانکی ) <span>سرعت بیشتر در ارسال و پردازش سفارش</span></h4></div>
                <div class="c-checkout-paymethod__options">
                    <div class="c-checkout-paymethod__providers">
                        <div class="c-checkout-paymethod__providers-arrow"></div>
                        <label> <span class="c-ui-radio"> <input type="radio" cheked name="bank_id"> <span class="c-ui-radio__check"></span> </span> <span class="c-checkout-paymethod__source-title">بانک سامان</span> <img src="assets/images/samanbank.png" alt=""> </label>
                        <label class="is-selected"> <span class="c-ui-radio"> <input type="radio" cheked name="bank_id"> <span class="c-ui-radio__check"></span> </span> <span class="c-checkout-paymethod__source-title">بانک ملت</span> <img src="assets/images/dpay.png" alt=""> </label>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <div class="btn-container container">
        <button class="btn-payment btn-payment--large">پرداخت سفارش</button>
    </div>
</form>
<section class="c-checkout-details container">
    <h4 class="c-checkout-details__title">کد سفارش: DKC-39637837</h4>
    <div class="c-checkout-details__row">
        <div class="c-checkout-details__col--text">
            <p>سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span class="text-highlight text-highlight--error">در انتظار پرداخت</span> است. جزئیات این سفارش را می‌توانید با کلیک بر روی دکمه <a href="#" class="btn-link-spoiler">پیگیری سفارش</a> مشاهده نمایید.</p>
        </div> <a href="#" class="btn-order-traking btn-order-traking--gray">پیگیری سفارش</a></div>
    <div class="c-checkout-details__row">
        <div class="c-checkout-details__col--table">
            <div class="c-checkout-table">
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col"><span>نام تحویل گیرنده: حسن شفعی </span></div>
                    <div class="c-checkout-table__col"><span>شماره تماس : ۰۹۱۴۵۱۴۰۴۱۴</span></div>
                </div>
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col"><span>تعداد مرسوله : ۱ </span></div>
                    <div class="c-checkout-table__col"><span>مبلغ کل: ۱۵۰,۰۰۰ تومان </span></div>
                </div>
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col"><span>وضعیت پرداخت: پرداخت آنلاین <span class="red">(ناموفق)</span> </span>
                    </div>
                    <div class="c-checkout-table__col"><span>وضعیت سفارش: در انتظار پرداخت </span></div>
                </div>
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col full-col"><span>آدرس : استان آذربایجان غربی ، شهرماکو، سایت ب</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="payment-methods container">
    <div class="o-headline o-headline--checkout"><span>جزئیات پرداخت </span></div>
    <div class="c-checkout-details">
        <div class="c-checkout-orders-table">
            <div class="c-checkout-orders-table__row">
                <div>
                    <p>رديف</p>
                </div>
                <div>
                    <p>درگاه</p>
                </div>
                <div>
                    <p>شماره پيگيري</p>
                </div>
                <div>
                    <p>تاريخ</p>
                </div>
                <div>
                    <p>مبلغ</p>
                </div>
                <div>
                    <p>وضعيت</p>
                </div>
            </div>
            <div class="c-checkout-orders-table__row">
                <div>
                    <p>۱</p>
                </div>
                <div>
                    <p>بانک سامان</p>
                </div>
                <div>
                    <p>24139856</p>
                </div>
                <div>
                    <p>۲۶ آبان ۱۳۹۷</p>
                </div>
                <div>
                    <p> ۱۵۰,۰۰۰ تومان</p>
                </div>
                <div>
                    <p>پرداخت ناموفق</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-wrapper container">
    <div class="headline">
        <h3>محصولات پیشنهادی برای شما</h3></div>
    <div id="pslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="/assets/User/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
        </div>
        <div id="pslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>
@endsection