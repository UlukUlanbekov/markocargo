<header class="header">
    <div class="header__container">
        <nav class="header__nav">
            <a class="header__logo" href="/">
                <img class="header__logo-img"
                     src="{{ asset('images/updatedlogo.png') }}"
                     alt="Логотип">
            </a>
            <div class="header__wrapper">
                <div class="header__contacts">
                    <a class="header__phone header__links" href="https://wa.me/996709700435">Написать на Whats App</a>
                </div>
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