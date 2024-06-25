<header class="header">
    <div class="header__container">
        <nav class="header__nav">
            <a class="header__logo" href="/">
                <img class="header__logo-img"
                     src="{{ asset('storage/logo.png') }}"
                     alt="Логотип">
            </a>
            <div class="header__wrapper">
                <div class="header__contacts">
                    <a class="header__phone header__links" href="tel:+996709700435">+996 709 700 435</a>
                    <a class="header__phone header__links" href="tel:+996703163050">+996 703 163 050</a>
                    <a class="header__phone header__links" href="tel:+996500123102">+996 500 123 102</a>
                    <span class="header__time header__links">12:00-18:00</span></div>
                <div class="header__reg-wrapper">
                    @auth
                        <a class="header__sign-up header__links" href="{{ route('dashboard') }}">ЛИЧНЫЙ КАБИНЕТ</a>
                        <a class="header__sign-up header__links" href="{{ route('logout') }}">Выйти</a>
                    @endauth
                    @guest
                        <a class="header__sign-up header__links"  href="{{ route('login') }}">Login</a>
                        <a class="header__sign-up header__links"  href="{{ route('register') }}">Register</a>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</header>