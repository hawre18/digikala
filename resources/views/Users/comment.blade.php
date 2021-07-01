@extends('Users.layout.header')
@section('content')
<section class="add-comment container">
    <div class="comment-info">
        <img src="/assets/User/images/p4.jpg" alt="">
        <div class="comment--info">
            <div class="headline">
                <h4> کتاب الفبای موفقیت اثر باب پراکتور </h4>
                <span>کتاب الفبای موفقیت اثر باب پراکتور</span>
            </div>
            <div>rating</div>
        </div>
    </div>
    <div class="comment-new">
        <div class="form-holder">
            <form action="#">
                <label for="">عنوان نظر شما (اجباری)</label>
                <input type="text" placeholder="عنوان نظر خود را بنویسید">
                <div class="group-input">
                    <div class="advantage">
                        <span>نقاط قوت</span>
                        <input type="text">
                    </div>
                    <div class="disadvantage">
                        <span>نقاط ضعف</span>
                        <input type="text">
                    </div>
                </div>
                <label for="">متن نظر شما (اجباری)</label>
                <textarea placeholder="متن نظر خود را بنویسید"></textarea>
                <button class="btn-default">ثبت نظر</button>
                <a class="btn-link-spoiler" href="#">انصراف و بازگشت »</a>
            </form>
        </div>
        <div class="description">
            <h3>دیگران را با نوشتن نظرات خود، برای انتخاب این محصول راهنمایی کنید.</h3>
            <p>لطفا پیش از ارسال نظر، خلاصه قوانین زیر را مطالعه کنید:
                <br>
                فارسی بنویسید و از کیبورد فارسی استفاده کنید. بهتر است از فضای خالی (Space) بیش‌از‌حدِ معمول، شکلک یا ایموجی استفاده نکنید و از کشیدن حروف یا کلمات با صفحه‌کلید بپرهیزید.
                <br>
                نظرات خود را براساس تجربه و استفاده‌ی عملی و با دقت به نکات فنی ارسال کنید؛ بدون تعصب به محصول خاص، مزایا و معایب را بازگو کنید و بهتر است از ارسال نظرات چندکلمه‌‌ای خودداری کنید.
                <br>
                بهتر است در نظرات خود از تمرکز روی عناصر متغیر مثل قیمت، پرهیز کنید.
                <br>
                به کاربران و سایر اشخاص احترام بگذارید. پیام‌هایی که شامل محتوای توهین‌آمیز و کلمات نامناسب باشند، حذف می‌شوند.
                <br>
                از ارسال لینک‌های سایت‌های دیگر و ارایه‌ی اطلاعات شخصی خودتان مثل شماره تماس، ایمیل و آی‌دی شبکه‌های اجتماعی پرهیز کنید.
                <br>
                با توجه به ساختار بخش نظرات، از پرسیدن سوال یا درخواست راهنمایی در این بخش خودداری کرده و سوالات خود را در بخش «پرسش و پاسخ» مطرح کنید.
                <br>
                هرگونه نقد و نظر در خصوص سایت تک‌کالا، خدمات و درخواست کالا را با ایمیل info@site.com یا با شماره‌ی ۲۲۲۲۲ - ۰۲۱ در میان بگذارید و از نوشتن آن‌ها در بخش نظرات خودداری کنید.</p>
        </div>
    </div>
</section>
@endsection