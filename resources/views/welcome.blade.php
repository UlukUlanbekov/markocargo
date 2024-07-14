<x-app-layout>
    <section class="section__main main">
        <div class="main__container">
            <div class="main__wrapper">
                <h1 class="main__title def-title">Мы предлагаем удобную и надежную доставку товаров из Китая в Бишкек. </h1>
                <p class="main__text"> Наша компания специализируется на предоставлении комплексных логистических решений, чтобы вы могли получать свои заказы быстро и без лишних хлопот.</p>
                <p class="main__text">Для получения адреса просто пройдите</p>
                <a class="main__btn" href="{{ route('register') }}"> регистрацию</a>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="services__container">
            <div class="services__wrapper">
                <h2 class="services__title def-title">Выкупим любой товар с китайских сайтов бесплатно</h2>
                <h3 class="services__subtitle">Pinduoduo, Poizon, Taobao, 1688 и.д.</h3>
                <h3 class="services__subtitle">Бесплатная доставка по городу Бишкек</h3>
                <br>
                <div class="services__blocks">
                    <div class="services__inner">
                        <div class="services__img-wrapper"><img
                                    src="{{ asset('images/china.png') }}" alt=""></div>
                        <div class="services__text-wrapper"><h3 class="services__inner-title">Без знания
                                китайского</h3>
                            <p class="services__inner-text">Поможем оформить заказ. заполнить правильно адрес
                                склада, сохранив ваши силы и время</p></div>
                    </div>
                    <div class="services__inner">
                        <div class="services__img-wrapper"><img
                                    src="{{ asset('images/truck.png') }}" alt=""></div>
                        <div class="services__text-wrapper"><h3 class="services__inner-title">Доставим за 7-12 дней
                                со дня поступления на склад в Китае</h3>
                            <p class="services__inner-text">Цена за килограмм 3.3$ (в розницу)</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-we">
        <div class="why-we__container">
            <h2 class="why-we__title def-title">Как сделать заказ?</h2>
            <div class="why-we__text-wrapper">
                <p class="why-we__text def-text">
                    1.  Получите ваш код и адрес
                    - Заполните форму на сайте и мы выдадим вам адрес в китае и ваш личный код
                </p>
                <p class="why-we__text def-text">
                    2. Посылки
                    - Далее вы можете заказывать товары на выданный адрес
                    Или же попросить оформить заказ наших менеджеров
                </p>
                <p class="why-we__text def-text">
                    3. Получение товара
                        - Получите ваш заказ в удобное для вас время и место.
                </p>
                <h2 class="why-we__title def-title">Для оптовых заказов цена договорная</h2>
            </div>
            <div class="why-we__img-wrapper">
                <img class="why-we__img" src="{{ asset('images/fastdelivery.jpeg') }}" alt="">
            </div>
{{--            <ul class="why-we__list">--}}
{{--                <li class="why-we__columns">--}}
{{--                    <div class="why-we__columns-img"><img--}}
{{--                                src="./AdesExpress_files/1.d39fe8cd1cbf1d86b26f5a50ffdca2cd.svg" alt=""></div>--}}
{{--                    <div class="why-we__columns-content"><h3 class="why-we__columns-title def-title">Обрешетка--}}
{{--                            хрупкого товара</h3>--}}
{{--                        <p class="why-we__columns-text def-text">По запросу у нас есть услугу обрешетки товара для--}}
{{--                            защиты хрупких и габаритных товаров. В конце вес считается вместе.</p></div>--}}
{{--                </li>--}}
{{--                <li class="why-we__columns">--}}
{{--                    <div class="why-we__columns-img"><img--}}
{{--                                src="./AdesExpress_files/4.07f6151327115afc77be5d664b055c90.svg" alt=""></div>--}}
{{--                    <div class="why-we__columns-content"><h3 class="why-we__columns-title def-title">Переупаковка и--}}
{{--                            объединение</h3>--}}
{{--                        <p class="why-we__columns-text def-text">Мы соберем все ваши посылки и объединим, для--}}
{{--                            удобного и рационального использования объема</p></div>--}}
{{--                </li>--}}
{{--                <li class="why-we__columns">--}}
{{--                    <div class="why-we__columns-img"><img--}}
{{--                                src="./AdesExpress_files/2.7789913df1a3fae06da3335ada41288a.svg" alt=""></div>--}}
{{--                    <div class="why-we__columns-content"><h3 class="why-we__columns-title def-title">Страхование--}}
{{--                            груза</h3>--}}
{{--                        <p class="why-we__columns-text def-text">Если ваш товар поступит без вашего личного кода или--}}
{{--                            не на тот код, то она не потеряется, в нашем телеграмм канале вы сможете найти свой--}}
{{--                            груз.</p></div>--}}
{{--                </li>--}}
{{--                <li class="why-we__columns">--}}
{{--                    <div class="why-we__columns-img"><img--}}
{{--                                src="./AdesExpress_files/5.155ef37910cb57fc0129f87b51a1e516.svg" alt=""></div>--}}
{{--                    <div class="why-we__columns-content"><h3 class="why-we__columns-title def-title">Собственный--}}
{{--                            склад в Китае</h3>--}}
{{--                        <p class="why-we__columns-text def-text">Позволяет хранить неограчниенное количество заказов--}}
{{--                            клиентов</p></div>--}}
{{--                </li>--}}
{{--                <li class="why-we__columns">--}}
{{--                    <div class="why-we__columns-img"><img--}}
{{--                                src="./AdesExpress_files/3.7da4817a4add2bf1a34105743c1499f8.svg" alt=""></div>--}}
{{--                    <div class="why-we__columns-content"><h3 class="why-we__columns-title def-title">Привезем любой--}}
{{--                            ваш груз в самые быстрые сроки и выгодные цены</h3>--}}
{{--                        <p class="why-we__columns-text def-text">Стоимость рассчитывается в зависимости от обьема и--}}
{{--                            веса груза. Оптовый вес считаем от 50 кг считаем еще ниже!</p></div>--}}
{{--                </li>--}}
{{--                <li class="why-we__columns">--}}
{{--                    <div class="why-we__columns-img"><img--}}
{{--                                src="./AdesExpress_files/6.0d0f74a8645afc1232dced1ac6958f18.svg" alt=""></div>--}}
{{--                    <div class="why-we__columns-content"><h3 class="why-we__columns-title def-title">Отслеживание--}}
{{--                            товара</h3>--}}
{{--                        <p class="why-we__columns-text def-text">Вы всегда можете отследить место- нахождение вашего--}}
{{--                            товара по трек-номеру</p></div>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </div>
    </section>
</x-app-layout>
