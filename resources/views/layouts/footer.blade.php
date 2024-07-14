<footer class="footer">
    <div class="footer__container">
        <ul class="footer__wrapper">
            <li class="footer__blocks">
                <a class="footer__logo" href="/">
                    <img class="header__logo-img"
                         src="{{ asset('storage/updatedlogo.png') }}"
                         alt="Логотип">
                </a>
            </li>
            <li class="footer__blocks footer__blocks--second">
                <div class="footer__inner">
                    <a class="footer__links footer__links-location"
                       href="#">Кыргызстан, Бишкек
{{--                        <span class="footer__location-span"></span>--}}
                    </a>
                </div>
                <div class="footer__inner">
                    <a class="footer__links footer__links--phone" href="#">
                        <span></span>+996709700435
                    </a>
{{--                    <span class="footer__links footer__links--time">--}}
{{--                        <span></span>12:00-18:00--}}
{{--                    </span>--}}
                </div>
            </li>
            <li class="footer__blocks footer__blocks--social">
                <a class="footer__social" href="https://t.me/dordoicont">
                    <img src="{{ asset('images/telegram.svg') }}" alt="" width="25" height="25">
                </a>
                <a class="footer__social" href="https://wa.me/996709700435">
                    <img src="{{ asset('images/whatsapp.svg') }}" alt="" width="25" height="25">
                </a>
                <a class="footer__social" href="https://www.instagram.com/eagle_express_cargo">
                    <img src="{{ asset('images/instagram.svg') }}" alt="" width="25" height="25">
                </a>
            </li>
        </ul>
    </div>
</footer>
