<!DOCTYPE html>

@include('includes.header')
<body>
    <main class="index ident-menu-js" id="scroll-top">
        <section class="hero " id="hero"
                 style="background-image: url(/img/hero-bg.jpg); background-position: center;background-size: cover;"
                 data-anchor>
            <div class="hero__wrapper hero__wrapper hero__wrapper--max-width hero__wrapper--container">
                <div class="hero__desc" data-aos="fade-right">
                    <h1 class="hero__desc-title">БетонИт - всё,что нужно для работы с производством</h1>
                    <h2 class="hero__desc-subtitle">БетонИт - для малых и средних производственных предприятий,
                        управляющих продажами, складом и производством, а также работой с клиентами.</h2>
                    <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window>
                        <span class="Button__text">Заказать онлайн-презентацию</span>
                    </a>

                    <h3 class="hero__footnote">Полный доступ ко всем возможностям на 14 дней</h3>

                </div>
                <div class="hero__img" data-aos="fade-left">
                    <div class="hero__logo-picture Picture">
                        <picture class="Picture__block-img">
                            <source class="Picture__img" srcset="img/hero.webp" alt="hero.jpg" type="image/webp"/>
                            <img class="Picture__img" src="img/hero.jpg" alt="hero.jpg"/>
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <section class="ability" id="ability" data-anchor>
            <div class="ability__wrapper ability__wrapper--max-width ability__wrapper--container">
                <h2 class="ability__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Возможности
                    АСУ «БетонИТ»</h2>
                <div class="Tabs">
                    <div class="Tabs__wrapper">
                        <div class="Tabs__btns">
<!--следующая переменная нужна для указания активной кнопки-->
@php
    $first = true;
@endphp
@foreach ($facilitiesRecords as $key=>$value)
                            <div class="Tabs__item @if($first){{'Tabs__item--active'}}@php $first = false; @endphp@endif" data-identification-tab="3" data-index-tab="{{$key}}">
                                <button class="Button Button--line Button--theme-m Button--theme-m-w">
                                    <span class="Button__text">{{ $value['title'] }}</span>
                                </button>
                            </div>
@endforeach
                        </div>

                        <div class="Tabs__blocks">
<!--следующая переменная нужна для указания активной кнопки-->
@php
    $first = true;
@endphp
@foreach ($facilitiesRecords as $key=>$value)
                            <div class="{{ 'Tabs__block ' . ($first ? 'Tabs__block--active' : 'Tabs__block--not-active') }}" :  data-identification-tab="3" data-index-tab="{{$key}}">
                                
                                <div class="block-tabs">
                                    <div class="block-tabs__wrapper">
                                        <div class="block-tabs__img" @if ($first) {{'data-aos="fade-right"'}} @endif>

                                            <div class="block-tabs__logo-picture Picture">
                                                <picture class="Picture__block-img">
                                                    <source class="Picture__img" type="image/webp"
                                                            srcset="{{ $value['srcset'] }}" alt="{{ $value['alt'] }}"
                                                            data-fancybox href="{{ $value['srcset'] }}"/>
                                                    <img class="Picture__img" src="{{ $value['src'] }}"
                                                         alt="{{ $value['alt'] }}" data-fancybox
                                                         href="{{ $value['src'] }}"/>
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="block-tabs__content" @if($first) 'data-aos="fade-left"' @php $first = false; @endphp @endif>
                                            <h2 class="block-tabs__content-title">{{ $value['title'] }}</h2>
                                            <p class="block-tabs__content-text">
                                            @php
                                                echo $value['description'];
                                            @endphp
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bid" id="bid"
                 style="background-image: url(/img/bid-bg.jpg); background-position: center; background-size: cover">
            <div class="bid__wrapper bid__wrapper--max-width bid__wrapper--container">
                <h2 class="bid__heading-title Title Title--xxxl Title--color-e" data-aos="fade-down"> Попробуйте все
                    возможности бесплатно</h2>

                <h3 class="bid__subtitle">14 дней к полному функционалу для новых клиентов. <br> Оцените удобство
                    системы сами.</h3>
                <div class="bid__btn">
                    <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window>
                        <span class="Button__text">Заказать онлайн-презентацию</span>
                    </a>

                </div>
            </div>
        </section>

        <section class="management" id="management"
                 style="background-image: url(/img/management-bg.jpg); background-position: center; background-size: cover"
                 data-anchor>
            <div class="management__wrapper management__wrapper--max-width management__wrapper--container">
                <h2 class="management__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Управление
                    производством <br> без лишних усилий</h2>

                <ul class="management__list">
                    <li class="management__item item-management" data-aos="fade-right">
				<span class="item-management__block-mail-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#hand"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-management__title">АСУ у вас в кармане</h3>
                        <p class="item-management__text">
                            Возможность управления с любого устройства, поддерживающего браузер и имеющее доступ в сеть
                            интернет (работает на облачном решении либо при наличие выделенного ip-адреса).
                        </p>
                    </li>
                    <li class="management__item item-management" data-aos="fade-down">
				<span class="item-management__block-mail-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#progress"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-management__title">Прозрачные <br/>отчеты</h3>
                        <p class="item-management__text">Отчёты предпосылаются в удобном графическом или табличном виде
                            в режиме реального времени.</p>
                    </li>
                    <li class="management__item item-management" data-aos="fade-left">
				<span class="item-management__block-mail-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#zoom"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-management__title">Расходы под контролем</h3>
                        <p class="item-management__text">Программа позволяет вести учет прохождения и расхода
                            материалов. Вы всегда знаете текущее состояние обеспечения производства.</p>
                    </li>
                    <li class="management__item item-management" data-aos="fade-up">
				<span class="item-management__block-mail-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#setting"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-management__title">Планирование в АСУ</h3>
                        <p class="item-management__text">Уникальная система создания рецептов и индивидуальный расчет
                            стоимости марки бетона по контрагентам</p>
                    </li>
                    <li class="management__item item-management" data-aos="fade-up">
				<span class="item-management__block-mail-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#calc"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-management__title">Удобно для бухгалтера</h3>
                        <p class="item-management__text">Возможность интеграции с 1С. Первичный документооборот
                            в программе.</p>
                    </li>
                </ul>
                <div class="management__benefit">
                    <h2 class="management__benefit-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Выгода
                        от внедрения АСУ БетонИТ</h2>

                    <ul class="management__benefit-list">
                        <li class="management__benefit-item item-benefit-management">
                            <h3 class="item-benefit-management__title">18% снижение себестоимости</h3>
                            <h4 class="item-benefit-management__subtitle">за счет системы точной дозировки</h4>
                        </li>
                        <li class="management__benefit-item item-benefit-management">
                            <h3 class="item-benefit-management__title">15% увеличение производительности туду ду ду
                                ду </h3>
                            <h4 class="item-benefit-management__subtitle">завода
                                за счет точности выполняемых операций
                            </h4>
                        </li>
                        <li class="management__benefit-item item-benefit-management">
                            <h3 class="item-benefit-management__title">20% уменьшение <br> затрат </h3>
                            <h4 class="item-benefit-management__subtitle">на персонал за счет снижения потерь
                                времени</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="choice" id="choice"
                 style="background-image: url(/img/hero-bg.jpg); background-position: center; background-size: cover">
            <div class="choice__wrapper choice__wrapper--max-width choice__wrapper--container">
                <h2 class="choice__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Для любого
                    малого и среднего бизнеса</h2>

                <ul class="choice__list">
                    <li class="choice__item item-choice" data-aos='fade-right'>
                        <div class="item-choice__picture  Picture">
                            <picture class="Picture__block-img">
                                <source class="Picture__img" srcset="img/choise-1.webp" alt="choise-1.png"
                                        type="image/webp"/>
                                <img class="Picture__img" src="img/choise-1.png" alt="choise-1.png"/>
                            </picture>
                        </div>

                        <div class="item-choice__content">
					<span class="item-choice__content-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#mixtures"></use>
		</svg>
	</div>
</span>

                            <h4 class="item-choice__content-text">Смеси</h4>
                        </div>
                    </li>
                    <li class="choice__item choice__item--col" data-aos="fade-up">
                        <div class="choice__item-top">
                            <div class="item-choice">
                                <div class="item-choice__picture  Picture">
                                    <picture class="Picture__block-img">
                                        <source class="Picture__img" srcset="img/choise-2.webp" alt="choise-2.png"
                                                type="image/webp"/>
                                        <img class="Picture__img" src="img/choise-2.png" alt="choise-2.png"/>
                                    </picture>
                                </div>

                                <div class="item-choice__content">
							<span class="item-choice__content-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#concrete"></use>
		</svg>
	</div>
</span>

                                    <h4 class="item-choice__content-text">Бетон</h4>
                                </div>
                            </div>
                        </div>
                        <div class="choice__item-middle">
					<span class="item-choice__item-middle-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#arrow-left"></use>
		</svg>
	</div>
</span>

                            <span class="item-choice__item-middle-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#arrow-right"></use>
		</svg>
	</div>
</span>

                        </div>
                        <div class="choice__item-bottom">
                            <div class="item-choice" data-aos="zoom-in">
                                <div class="item-choice__picture  Picture">
                                    <picture class="Picture__block-img">
                                        <source class="Picture__img" srcset="img/choise-4.webp" alt="choise-4.png"
                                                type="image/webp"/>
                                        <img class="Picture__img" src="img/choise-4.png" alt="choise-4.png"/>
                                    </picture>
                                </div>

                                <div class="item-choice__content">

                                    <h4 class="item-choice__content-text">Бетонно-растворный узел</h4>
                                </div>
                            </div>
                            <div class="item-choice" data-aos="zoom-in">
                                <div class="item-choice__picture  Picture">
                                    <picture class="Picture__block-img">
                                        <source class="Picture__img" srcset="img/choise-4.webp" alt="choise-4.png"
                                                type="image/webp"/>
                                        <img class="Picture__img" src="img/choise-4.png" alt="choise-4.png"/>
                                    </picture>
                                </div>

                                <div class="item-choice__content">
                                    <h4 class="item-choice__content-text">Железо-бетонные изделия</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="choice__item item-choice" data-aos="fade-left">
                        <div class="item-choice__picture  Picture">
                            <picture class="Picture__block-img">
                                <source class="Picture__img" srcset="img/choise-3.webp" alt="choise-3.png"
                                        type="image/webp"/>
                                <img class="Picture__img" src="img/choise-3.png" alt="choise-3.png"/>
                            </picture>
                        </div>

                        <div class="item-choice__content">
					<span class="item-choice__content-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#asphalt"></use>
		</svg>
	</div>
</span>

                            <h4 class="item-choice__content-text">Асфальт</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="advantage" id="advantage">
            <div class="advantage__wrapper advantage__wrapper--max-width advantage__wrapper--container">
                <h2 class="advantage__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> «Плюшки» для
                    пользователя АСУ «БетонИТ»</h2>

                <ul class="advantage__list">
                    <li class="advantage__item item-advantage" data-aos='fade-down'>
				<span class="advantage__block-mail-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-advantage__text">Создание контрагентов по вводу ИНН</h3>
                    </li>
                    <li class="advantage__item item-advantage" data-aos='fade-down'>
				<span class="advantage__block-mail-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-advantage__text">Уникальная система создания рецептов</h3>
                    </li>
                    <li class="advantage__item item-advantage" data-aos='fade-down'>
				<span class="advantage__block-mail-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-advantage__text">Ручной и автоматический режим работы</h3>
                    </li>
                    <li class="advantage__item item-advantage" data-aos='fade-down'>
				<span class="advantage__block-mail-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-advantage__text">Алгоритмы точного дозирования. Экономное расходование
                            сырья</h3>
                    </li>
                    <li class="advantage__item item-advantage" data-aos='fade-down'>
				<span class="advantage__block-mail-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-advantage__text">Программа оператора имеет индикаторы доступности РБУ и сервера
                            баз данных</h3>
                    </li>
                    <li class="advantage__item item-advantage" data-aos='fade-down'>
				<span class="advantage__block-mail-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                        <h3 class="item-advantage__text">Ведение архива прохождения заявки, статистика по работе каждого
                            пользователя</h3>
                    </li>
                </ul>
            </div>
        </section>

        <section class="stages" id="stages">
            <div class="stages__wrapper stages__wrapper--max-width stages__wrapper--container">
                <h2 class="stages__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Этапы
                    автоматизации завода</h2>

                <ul class="stages__list">
                    <li class="stages__item item-stages" data-aos="flip-left" data-aos-duration="1000">
                        <div class="item-stages__info">
                            <div class="item-stages__info-numb">1</div>
                            <div class="item-stages__info-text">этап</div>
                        </div>

                        <p class="item-stages__text">
                            Обследование бизнес-процессов предприятия (для действующих заводов), аналитика, создание
                            дорожной каты проекта с целями, задачами и просчетом необходимых ресурсов
                        </p>
                    </li>
                    <li class="stages__item item-stages" data-aos="flip-right" data-aos-duration="1000">
                        <div class="item-stages__info">
                            <div class="item-stages__info-numb">2</div>
                            <div class="item-stages__info-text">этап</div>
                        </div>

                        <p class="item-stages__text">Подбор, поставка, настройка оборудования для автоматизации</p>
                    </li>
                    <li class="stages__item item-stages" data-aos="flip-left"
                        data-aos-duration="1400">
                        <div class="item-stages__info">
                            <div class="item-stages__info-numb">3</div>
                            <div class="item-stages__info-text">этап</div>
                        </div>

                        <p class="item-stages__text">Внедрение ПО, адаптация программного комплекса под нужды
                            предприятия, доработка (при необходимости), интеграция с контроллером</p>
                    </li>
                    <li class="stages__item item-stages" data-aos="flip-right"
                        data-aos-duration="1400">
                        <div class="item-stages__info">
                            <div class="item-stages__info-numb">4</div>
                            <div class="item-stages__info-text">этап</div>
                        </div>

                        <p class="item-stages__text">Обучение сотрудников работе с программным обеспечением,
                            предоставление письменных инструкций</p>
                    </li>
                    <li class="stages__item item-stages" data-aos="fade-up"
                        data-aos-anchor-placement="center-bottom" data-aos-duration="1200">
                        <div class="item-stages__info">
                            <div class="item-stages__info-numb">5</div>
                            <div class="item-stages__info-text">этап</div>
                        </div>

                        <p class="item-stages__text">Техническая поддержка, которая не бросит трубку телефона, а будет
                            сопровождать вас пока возникшая проблема не будет решена (первый год бесплатно).</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="bid bid--two" id="bid"
                 style="background-image: url(/img/bid-bg.jpg); background-position: center; background-size: cover">
            <div class="bid__wrapper bid__wrapper--max-width bid__wrapper--container">
                <h2 class="bid__heading-title Title Title--xxxl Title--color-e" data-aos="fade-down"> Посмотрите на своё
                    производство изнутри</h2>

                <h3 class="bid__subtitle">14 дней бесплатного доступа к полному функционалу.<br> Специально для новых
                    клиентов.</h3>
                <div class="bid__btn">
                    <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window>
                        <span class="Button__text">Заказать онлайн-презентацию</span>
                    </a>

                </div>
            </div>
        </section>

        <section class="price" id="price" data-anchor>
            <div class="price__wrapper price__wrapper--max-width price__wrapper--container">
                <h2 class="price__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Сколько стоит
                    АСУ «БетонИТ»</h2>
@php
    $count = count($productsRecords);
    $counter = 0;
@endphp
@for ($i = 0; $i < $count; $i += 3)
                <ul class="price__list">
                    <li class="price__item item-price" data-aos='fade-left' data-aos-anchor-placement="center-bottom"
                        data-aos-duration='800'>
                        <div class="item-price__top">
                            <div class="item-price__top-wrap">
                                <h3 class="item-price__title">{{$productsRecords[$counter]['title']}}</h3>
                                <div class="item-price__price">{{$productsRecords[$counter]['price']}} ₽</div>
                                <h4 class="item-price__subtitle">{{$productsRecords[$counter]['period']}}</h4>
                            </div>
                        </div>
                        <div class="item-price__bottom">
                            <ul class="item-price__bottom-list">
@foreach($productsRecords[$counter]['description'] as $des)
                                <li class="item-price__bottom-item">
							<span class="item-price__bottom-item-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                                    <h3 class="item-price__text">{{$des}}</h3>
                                </li>
@endforeach

                            </ul>

                            <div class="item-price__bottom-btn">
                                <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window>
                                    <span class="Button__text">Заказать онлайн-презентацию</span>
                                </a>

                            </div>
                        </div>
                    </li>
@php
    $counter += 1;
    if ($counter == $count)
    {
        echo '</ul>';
        break;
    }
@endphp
                    <li class="price__item item-price" data-aos="fade-up" data-aos-anchor-placement="center-bottom" 
                    data-aos-duration='500'>
                        <div class="item-price__top">
                            <div class="item-price__top-wrap">
                                <h3 class="item-price__title">{{$productsRecords[$counter]['title']}}</h3>
                                <div class="item-price__price">{{$productsRecords[$counter]['price']}} ₽</div>
                                <h4 class="item-price__subtitle">{{$productsRecords[$counter]['period']}}</h4>
                            </div>
                        </div>
                        <div class="item-price__bottom">
                            <ul class="item-price__bottom-list">
@foreach($productsRecords[$counter]['description'] as $des)
                                <li class="item-price__bottom-item">
							<span class="item-price__bottom-item-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                                    <h3 class="item-price__text">{{$des}}</h3>
                                </li>
@endforeach
                            </ul>

                            <div class="item-price__bottom-btn">
                                <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window>
                                    <span class="Button__text">Заказать онлайн-презентацию</span>
                                </a>

                            </div>
                        </div>
                    </li>
@php
    $counter += 1;
    if ($counter == $count)
    {
        echo '</ul>';
        break;
    }
@endphp
                    <li class="price__item item-price" data-aos='fade-right' data-aos-anchor-placement="center-bottom"
                        data-aos-duration='800'>
                        <div class="item-price__top">
                            <div class="item-price__top-wrap">
                                <h3 class="item-price__title">{{$productsRecords[$counter]['title']}}</h3>
                                <div class="item-price__price">{{$productsRecords[$counter]['price']}} ₽</div>
                                <h4 class="item-price__subtitle">{{$productsRecords[$counter]['period']}}</h4>
                            </div>
                        </div>
                        <div class="item-price__bottom">
                            <ul class="item-price__bottom-list">
@foreach($productsRecords[$counter]['description'] as $des)
                                <li class="item-price__bottom-item">
							<span class="item-price__bottom-item-icon Icon Icon--m Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#select"></use>
		</svg>
	</div>
</span>

                                    <h3 class="item-price__text">{{$des}}</h3>
                                </li>
@endforeach
                            </ul>

                            <div class="item-price__bottom-btn">
                                <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window>
                                    <span class="Button__text">Заказать онлайн-презентацию</span>
                                </a>

                            </div>
                        </div>
                    </li>
@php
    $counter += 1;
    if ($counter == $count)
    {
        echo '</ul>';
        break;
    }
@endphp
                </ul>
@endfor
            </div>
        </section>

        <section class="info" id="info" data-anchor>
            <div class="info__wrapper info__wrapper--max-width info__wrapper--container">
                <h2 class="info__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Разработано
                    командой с 20-летним опытом</h2>

                <div class="info__inner">
                    <div class="info__content">
                        <p class="info__content-text">
                            Наша компания провела глубокий анализ текущего положения на рынке программных продуктов
                            автоматизации технологических процессов и в 2018 году приступила к разработке своего
                            улучшенного
                            программного обеспечения для ряда бетонных заводов Краснодарского края. <br/>
                            В настоящее время наша программа, которая прошла весь спектр задач, возникающих в работе
                            бетонного завода, успешно запущена и работает на предприятиях.
                        </p>
                        <p class="info__content-text">
                            Программа работает на самой защищенной среде, построенной на базе операционной системы
                            Linux, что позволяет не переживать за сохранность и быстродействие процессов базы данных.
                        </p>
                        <p class="info__content-text">Мы РОССИЙСКИЙ разработчик и используем программные компоненты,
                            независящие от санкций и других ограничений, вводимых иными государствами.</p>
                    </div>
                    <div class="info__desc">
                        <ul class="info__desc-list">
                            <li class="info__desc-list-item">
						<span class="info__desc-list-item-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#success"></use>
		</svg>
	</div>
</span>

                                <h3 class="info__desc-list-text">20 лет опыта в разработке ПО</h3>
                            </li>
                            <li class="info__desc-list-item">
						<span class="info__desc-list-item-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#success"></use>
		</svg>
	</div>
</span>

                                <h3 class="info__desc-list-text">98 производств автоматизировали</h3>
                            </li>
                            <li class="info__desc-list-item">
						<span class="info__desc-list-item-icon Icon Icon--l Icon--color-a ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#success"></use>
		</svg>
	</div>
</span>

                                <h3 class="info__desc-list-text">15+ разработчиков в команде</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="integration" id="integration">
            <div class="integration__wrapper integration__wrapper--max-width integration__wrapper--container">
                <h3 class="integration__text">14 дней бесплатного доступа к полному функционалу. Специально для новых
                    клиентов.</h3>
                <a class="Button Button--m Button--color-a" href="#popup-write-us" data-fancybox-window
                   data-aos="fade-left">
                    <span class="Button__text">Заказать внедрение</span>
                </a>

            </div>
        </section>

        <section class="partners">
            <div class="partners__wrapper partners__wrapper--max-width partners__wrapper--container">
                <h2 class="partners__heading-title Title Title--xxxl Title--color-b" data-aos="fade-down"> Наши
                    партнёры</h2>
                <div class="swiper-container partners__swiper-container">
                    <div class="swiper-wrapper partners__wrapper-slide">
                        <div class="swiper-slide partners__slide">
                            <div class="partners__slide-picture  Picture">
                                <picture class="Picture__block-img">
                                    <source class="Picture__img" srcset="img/partners-1.webp" alt="partners-1.png"
                                            type="image/webp"/>
                                    <img class="Picture__img" src="img/partners-1.png" alt="partners-1.png"/>
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide partners__slide">
                            <div class="partners__slide-picture  Picture">
                                <picture class="Picture__block-img">
                                    <source class="Picture__img" srcset="img/partners-2.webp" alt="partners-2.png"
                                            type="image/webp"/>
                                    <img class="Picture__img" src="img/partners-2.png" alt="partners-2.png"/>
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide partners__slide">
                            <div class="partners__slide-picture  Picture">
                                <picture class="Picture__block-img">
                                    <source class="Picture__img" srcset="img/partners-1.webp" alt="partners-1.png"
                                            type="image/webp"/>
                                    <img class="Picture__img" src="img/partners-1.png" alt="partners-1.png"/>
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide partners__slide">
                            <div class="partners__slide-picture  Picture">
                                <picture class="Picture__block-img">
                                    <source class="Picture__img" srcset="img/partners-2.webp" alt="partners-2.png"
                                            type="image/webp"/>
                                    <img class="Picture__img" src="img/partners-2.png" alt="partners-2.png"/>
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide partners__slide">
                            <div class="partners__slide-picture  Picture">
                                <picture class="Picture__block-img">
                                    <source class="Picture__img" srcset="img/partners-1.webp" alt="partners-1.png"
                                            type="image/webp"/>
                                    <img class="Picture__img" src="img/partners-1.png" alt="partners-1.png"/>
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide partners__slide">
                            <div class="partners__slide-picture  Picture">
                                <picture class="Picture__block-img">
                                    <source class="Picture__img" srcset="img/partners-2.webp" alt="partners-2.png"
                                            type="image/webp"/>
                                    <img class="Picture__img" src="img/partners-2.png" alt="partners-2.png"/>
                                </picture>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>


        <a class="Button Button--m Button--color-a up" href="#hero">
	<span class="Button__icon">
		<svg class="Button__icon-svg">
			<use class="Button__icon-svg-use" xlink:href="#up"></use>
		</svg>
	</span>
            <span class="Button__text"></span>
        </a>

    </main>
@include('includes.footer')

</div>
<script src="js/1_jquery.min.js"></script>
<script src="js/jquery.fancybox.min.min.js"></script>
<script src="js/aosAnimate.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/messages_ru.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/lazy.min.js"></script>
<script src="js/main.min.js"></script>

<script>
    AOS.init({
        easing: 'ease-in-out-sine',
    })
</script>
<div style="display: none"> @php //<?xml version="1.0" encoding="utf-8"?> @endphp
    <svg viewBox="0 0 158 158" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <style>:root > svg {
            display: none
        }

        :root > svg:target {
            display: block
        }</style>
        <svg fill="none" viewBox="0 0 156 156" id="arrow-left" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M78.73 74.51C37.798 115.492 4.5 149 3.999 149.022c0 0 .002-3.93.002-9.021v-6.01H0V156h22v-4H7c0-.169 33.503-33.88 74.485-74.91L156 2.489l-1.191-1.244C154.154.56 153.514 0 153.387 0s-33.723 33.53-74.656 74.51z"
                  fill="#2A2323"/>
        </svg>
        <svg viewBox="0 0 67 67" id="arrow-left-m" xmlns="http://www.w3.org/2000/svg">
            <rect x="33.039" y="66.077" width="4.792" height="46.724" rx="2.396"
                  transform="rotate(-135 33.039 66.077)"/>
            <rect x="29.65" y="3.389" width="4.792" height="46.724" rx="2.396" transform="rotate(-45 29.65 3.389)"/>
        </svg>
        <svg fill="none" viewBox="0 0 156 156" id="arrow-right" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M77.27 74.51c40.933 40.981 74.23 74.49 74.732 74.511 0 0-.002-3.93-.002-9.021v-6.01h4V156h-22v-4h15c0-.169-33.503-33.88-74.485-74.91L0 2.489l1.191-1.244C1.846.56 2.486 0 2.613 0S36.336 33.53 77.27 74.51z"
                  fill="#2A2323"/>
        </svg>
        <svg fill="none" viewBox="0 0 158 158" id="arrow-rightsvg" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 2l153.5 153.5m0 0V132m0 23.5h-21" stroke="#2A2323" stroke-width="4"/>
        </svg>
        <svg viewBox="0 0 48 50" id="asphalt" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.043 4.797c-.217.135-.466.388-.553.563C11.273 5.794 1 42.388 1 42.724c0 .432.328.946.743 1.166.345.184.608.202 2.895.204 1.485 0 2.655-.044 2.855-.109.348-.113.903-.61 1.057-.947.047-.103 1.746-8.462 3.775-18.574C14.882 11.724 16 5.969 15.968 5.724c-.127-.969-.513-1.171-2.238-1.171-1.179 0-1.326.021-1.687.244zm5.58-.008c-.256.154-.45.367-.55.605-.233.553-5.374 37.067-5.285 37.531.09.463.488.94.887 1.063.474.146 22.238.13 22.664-.017.416-.144.784-.584.873-1.046.089-.464-5.052-36.978-5.284-37.53a1.322 1.322 0 00-.55-.606l-.396-.236H18.017l-.395.236zm14.94-.03c-.32.228-.567.702-.567 1.09 0 .324 7.339 36.937 7.454 37.19.154.336.71.833 1.057.946.2.065 1.37.11 2.855.109 2.286-.002 2.55-.02 2.895-.204.414-.22.742-.734.743-1.164C47 42.394 36.728 5.8 36.51 5.352c-.089-.18-.34-.432-.56-.563-.36-.214-.526-.236-1.75-.236-1.18 0-1.386.026-1.638.206zM14.35 6.525c-.026.101-1.643 8.145-3.593 17.876-1.95 9.731-3.571 17.741-3.603 17.8-.07.133-4.448.15-4.448.017 0-.07 9.826-35.14 10.016-35.746.028-.092.286-.131.858-.131.737 0 .813.018.77.184zm7.236 2.467c-.03 2.547-.027 2.607.171 2.984.313.591.59.675 2.242.675 1.651 0 1.93-.084 2.242-.675.198-.377.202-.437.17-2.984l-.031-2.599h3.229l2.49 17.613c1.369 9.688 2.514 17.769 2.544 17.958l.056.345h-2.003c-1.102 0-2.817-.032-3.812-.07l-1.808-.068-.066-2.902c-.074-3.266-.11-3.46-.74-3.917-.329-.24-.4-.247-2.271-.247-1.872 0-1.942.007-2.271.247-.63.458-.666.651-.74 3.917l-.067 2.902-2.077.069c-1.143.037-2.859.068-3.814.069h-1.737l.052-.29c.028-.158 1.163-8.145 2.522-17.747a5714.546 5714.546 0 012.518-17.697c.048-.239.05-.24 1.64-.21l1.593.028-.032 2.6zm3.253-1.784c.031.478.058 1.495.058 2.262v1.393h-1.796V9.47c0-.767.027-1.784.058-2.262l.058-.867h1.564l.058.867zM40.275 24.26c2.76 9.827 5.018 17.908 5.018 17.958 0 .133-4.378.116-4.448-.017-.032-.059-1.653-8.069-3.603-17.8-1.95-9.73-3.567-17.777-3.594-17.88-.045-.173.02-.186.78-.158l.828.03 5.019 17.867zm-18.183-9.605c-.62.384-.681.705-.714 3.737-.026 2.464-.004 2.574.583 2.993.259.184.46.205 2.039.205 1.578 0 1.78-.02 2.04-.205.582-.416.602-.522.58-2.988-.029-3.051-.09-3.364-.732-3.747-.315-.188-.524-.21-1.907-.207-1.367.005-1.594.03-1.889.212zm2.966 3.386l.024 1.761h-2.16v-1.717c0-.945.028-1.751.063-1.791.034-.04.51-.06 1.055-.044l.993.03.025 1.76zm-2.945 6.398c-.357.172-.715.633-.803 1.038-.045.205-.095 1.611-.111 3.125-.028 2.643-.022 2.763.156 3.043.44.693.53.722 2.31.76 1.993.043 2.316-.006 2.714-.415.484-.497.505-.688.427-3.8-.078-3.076-.075-3.063-.684-3.596-.228-.2-.387-.218-2.016-.24-1.048-.013-1.86.022-1.993.085zm3.146 3.225c0 .853.026 1.87.057 2.261l.058.71h-2.748l.058-.71c.031-.39.057-1.408.057-2.261l.001-1.551h2.516v1.55zm.146 9.32c.008.008.043 1.185.079 2.617l.065 2.603h-3.076v-.658c0-.361.027-1.542.059-2.624l.059-1.967.457-.042c.377-.035 2.314.024 2.357.071z"/>
        </svg>
        <svg fill="none" viewBox="0 0 48 48" id="calc" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3.817.097C3.305.245 2.63.772 2.333 1.253l-.284.46-.029 2.933c-.027 2.852-.023 2.938.164 3.125.207.206.567.25.845.1.327-.174.379-.608.379-3.165 0-2.169.02-2.513.16-2.75.346-.586-.213-.558 10.683-.532l9.923.024.046 2.86c.053 3.234.06 3.264.848 3.975.723.654.76.66 3.852.694l2.778.03.057.345c.031.19.058 1.172.058 2.183.001 1.72.013 1.848.19 2.008.258.234.712.217.965-.035.194-.194.207-.302.236-1.885.018-.923-.01-2.015-.059-2.426-.17-1.407-.21-1.459-3.844-5.105C27.512 2.298 25.859.709 25.627.561c-.928-.59-.446-.567-11.478-.558C8.436.008 3.984.048 3.817.097zm26.872 7.42c0 .04-.908.071-2.018.071-3.125 0-2.988.133-3.024-2.939l-.027-2.264 2.534 2.53c1.395 1.393 2.535 2.563 2.535 2.602zM16.663 5.24c-2.002.317-3.86 1.652-4.708 3.382-.515 1.05-.698 1.811-.698 2.905 0 1.055.183 1.853.633 2.765a6.451 6.451 0 004.174 3.387c.791.201 2.207.201 3 0 1.763-.445 3.35-1.7 4.11-3.247.521-1.066.705-1.82.707-2.905.003-1.123-.133-1.697-.664-2.806-.352-.736-.553-1.014-1.193-1.654-.641-.641-.917-.84-1.654-1.192-.486-.232-1.075-.467-1.308-.522-.61-.143-1.841-.202-2.399-.113zm.245 3.648c0 2.17.006 2.245.213 2.552.117.174.356.413.53.53.307.207.381.213 2.552.213 2.564 0 2.379-.087 2.013.948-.706 2-2.505 3.286-4.605 3.291-1.955.006-3.583-1.003-4.446-2.753-1.314-2.669-.027-5.798 2.795-6.794 1.035-.366.948-.55.948 2.013zM18.977 6.8c1.667.49 3.048 1.975 3.412 3.671l.065.305h-4.14V8.713c0-1.134.035-2.062.077-2.062.042 0 .306.067.586.15zM2.205 9.775L2 9.993l.024 15.04c.024 14.662.03 15.049.206 15.406.247.496.745.976 1.263 1.216.428.198.48.199 9.492.224l9.06.026.04 1.615c.033 1.397.067 1.688.25 2.154.246.628.953 1.446 1.554 1.798.918.538.756.53 10.093.502l8.567-.026.635-.301a3.989 3.989 0 001.818-1.784l.265-.54.026-7.615c.025-7.536.023-7.617-.164-7.805-.19-.19-.507-.242-.795-.131-.426.163-.426.155-.428 7.835-.002 8.082.033 7.63-.654 8.297-.702.683-.01.637-9.563.637-8.19 0-8.593-.007-8.906-.174a2.57 2.57 0 01-1.063-1.044l-.203-.375-.024-11.938c-.017-8.063.006-12.056.072-12.3.144-.533.639-1.125 1.17-1.398l.465-.24h8.534c8.142 0 8.548.009 8.861.175.18.096.47.307.641.469.636.598.62.493.672 4.404l.047 3.547.263.226c.323.278.528.285.852.03l.25-.197-.026-3.67-.027-3.67-.29-.61c-.494-1.038-1.322-1.724-2.425-2.01-.466-.122-1.282-.146-4.934-.146h-4.376l-.037-.939c-.043-1.064-.194-1.343-.728-1.343-.55 0-.663.222-.663 1.307v.964l-3.445.029-3.445.028-.621.295c-.729.345-1.271.808-1.665 1.422-.457.712-.574 1.35-.574 3.131v1.574h-4.438c-4.33 0-4.443.005-4.61.189-.234.259-.217.712.035.965.205.205.218.206 4.61.233l4.403.027v2.336H17.7c-2.616 0-4.433.037-4.534.09-.093.05-.22.214-.283.366-.094.226-.088.325.03.555.08.153.213.305.297.337.084.032 2.11.059 4.503.059h4.352v2.338l-4.404.026c-4.392.026-4.404.027-4.609.232-.252.252-.269.706-.035.965.167.184.28.189 4.61.189h4.438V35.433H17.68c-4.761 0-4.71-.006-4.84.514-.065.255.069.585.31.771.113.086 1.235.115 4.532.117l4.383.003v3.66l-9.007-.026-9.007-.024-.321-.35-.321-.35V25.04c0-10.495-.03-14.791-.104-15.003-.178-.513-.739-.647-1.1-.263zm5.387 10.664c-.322.254-.336.72-.03 1.008.2.187.315.204 1.41.204 1.143 0 1.204-.01 1.425-.23.126-.127.23-.34.23-.473 0-.134-.104-.347-.23-.473-.22-.22-.284-.23-1.394-.23-1.035 0-1.19.021-1.41.194zm5.587-.132c-.202.082-.404.575-.34.83.127.507.177.514 3.745.514h3.291l.204-.217c.288-.307.27-.75-.043-.995-.24-.189-.345-.194-3.492-.187-1.785.004-3.3.029-3.365.055zm12.803.124c-.428.13-.799.452-1.003.875-.178.366-.196.571-.196 2.173 0 2.05.092 2.388.778 2.842l.38.252 7.534.026c5.07.017 7.654-.006 7.9-.073.463-.124.926-.51 1.093-.907.18-.433.18-3.847 0-4.28-.164-.39-.624-.779-1.07-.903-.421-.117-15.03-.122-15.416-.005zm15.186 2.994c.02 1.244-.003 1.652-.094 1.71-.066.041-3.39.076-7.39.077-5.53.001-7.297-.026-7.382-.111-.159-.158-.158-3.086 0-3.244.087-.087 1.827-.108 7.477-.09l7.363.024.026 1.634zm-33.635.85c-.236.237-.24.664-.01.949.16.199.265.221 1.184.256 1.18.043 1.652-.064 1.81-.41.152-.334.139-.45-.085-.735-.192-.245-.205-.247-1.453-.247-1.134 0-1.277.019-1.446.188zm.016 3.78c-.288.307-.269.75.043.995.22.173.376.195 1.41.195 1.111 0 1.175-.01 1.394-.23.127-.127.23-.34.23-.474 0-.133-.103-.346-.23-.473-.22-.22-.28-.23-1.436-.23-1.14 0-1.218.012-1.41.217zm18.218-.04c-.798.366-.984.822-.984 2.416 0 1.414.15 1.85.778 2.265.353.234.464.254 1.562.284 1.693.046 2.231-.143 2.631-.928.157-.308.185-.553.185-1.626 0-1.36-.062-1.644-.451-2.06-.42-.45-.732-.528-2.1-.526-1.007.002-1.318.035-1.62.175zm6.422-.072c-.3.12-.729.526-.899.852-.182.348-.185 2.766-.004 3.2.163.39.623.778 1.07.902.48.133 2.306.123 2.769-.016.484-.145.93-.592 1.076-1.076.154-.516.14-2.417-.023-2.871-.314-.882-.798-1.093-2.489-1.088-.696.003-1.37.046-1.5.097zm6.217.077c-.246.113-.49.326-.656.578l-.264.399v15.12l.252.38c.414.627.853.779 2.248.779 1.283 0 1.673-.086 2.082-.458.547-.497.527-.198.527-8.31 0-8.115.028-7.69-.53-8.218-.41-.389-.697-.452-2.03-.45-1.011.002-1.308.035-1.629.18zm-9.893 2.342c.02.794-.005 1.09-.094 1.147-.195.124-1.988.096-2.117-.033-.122-.122-.164-2.055-.047-2.172.035-.036.552-.053 1.148-.039l1.083.026.027 1.071zm6.338-.97c.031.082.057.563.057 1.067 0 .672-.035.948-.13 1.027-.087.072-.48.1-1.15.082l-1.017-.027-.027-1.025c-.015-.564-.005-1.08.02-1.148.036-.092.32-.123 1.12-.123.89 0 1.08.025 1.127.148zm6.291 7.165v7.266l-1.017.026c-.67.018-1.063-.01-1.149-.081-.11-.092-.13-1.245-.13-7.168 0-3.882.026-7.127.058-7.21.05-.13.216-.147 1.148-.125l1.09.026v7.266zM7.838 31.654c-.463.09-.653.805-.305 1.153.169.169.312.188 1.446.188 1.248 0 1.26-.002 1.453-.247.333-.424.204-.866-.311-1.062-.246-.094-1.846-.116-2.283-.032zm17.836 2.547c-.748.465-.891.843-.891 2.365 0 1.197.09 1.59.458 1.995.413.453.718.527 2.18.527 1.247 0 1.355-.014 1.727-.233.652-.382.791-.788.791-2.313 0-1.146-.02-1.308-.218-1.681a1.598 1.598 0 00-.586-.623c-.335-.19-.492-.21-1.774-.21-1.21-.001-1.445.023-1.687.173zm6.345-.017a1.943 1.943 0 00-.563.482c-.244.32-.252.368-.277 1.79-.023 1.376-.012 1.482.19 1.834.119.206.382.467.588.584.338.192.497.211 1.712.213 1.495.002 1.8-.075 2.2-.551.349-.414.444-.84.444-1.979 0-1.132-.096-1.565-.436-1.97-.427-.508-.635-.561-2.16-.559-1.092.002-1.453.035-1.698.156zm-24.47 1.465c-.288.307-.269.75.043.995.22.173.376.194 1.41.194 1.111 0 1.175-.01 1.394-.23.127-.126.23-.34.23-.473 0-.133-.103-.346-.23-.473-.22-.22-.28-.23-1.436-.23-1.14 0-1.218.012-1.41.217zm20.937.908v1.078h-2.25l-.027-.978c-.015-.538-.005-1.035.022-1.104.038-.099.293-.121 1.152-.1l1.103.026v1.078zm6.375 0v1.078h-2.25l-.026-1.104-.027-1.105 1.152.027 1.151.026v1.078zm-9.094 3.739c-.8.367-.985.822-.982 2.422.002.961.036 1.273.174 1.573.368.801.823.986 2.422.983 1.394-.003 1.802-.131 2.24-.707l.271-.355v-3.029l-.27-.354c-.442-.58-.845-.705-2.26-.705-.985 0-1.292.033-1.595.172zm6.375-.004c-.435.206-.743.515-.884.888-.055.145-.1.828-.1 1.518 0 1.31.065 1.634.405 2.004.416.454.853.57 2.167.572 1.436.002 1.867-.144 2.286-.776.245-.37.251-.417.251-1.793 0-1.312-.015-1.438-.215-1.76a2.09 2.09 0 00-.563-.563c-.312-.194-.478-.218-1.66-.241-1.128-.023-1.364-.002-1.687.151zm-3.656 2.406v1.125h-2.25l-.027-1.018c-.018-.682.01-1.062.085-1.151.086-.105.34-.128 1.151-.108l1.041.027v1.125zm6.31-1.06c.168.169.152 1.988-.019 2.13-.086.071-.478.099-1.148.081l-1.018-.026-.027-1.026c-.015-.563-.005-1.08.02-1.148.064-.166 2.026-.176 2.191-.01z"
                  fill="#E42320"/>
        </svg>
        <svg viewBox="0 0 48 50" id="concrete" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.536 8.794a.681.681 0 00-.336.19c-.079.087-.831 2.723-1.672 5.859L1 20.543v9.562l.217.252.216.252 1.94.028 1.94.027v1.518c0 1.445.01 1.53.202 1.752.157.183.312.246.704.286l.502.052.104.667a5.053 5.053 0 003.519 4.082c.801.249 2.076.248 2.875-.001 1.685-.526 3.101-2.017 3.43-3.612.06-.291.134-.53.163-.53.03 0 .1.224.157.498.342 1.628 1.745 3.115 3.437 3.644.8.25 2.075.25 2.875 0a5.134 5.134 0 003.455-3.697c.075-.319.137-.69.138-.827l.001-.247h6.448l.062.517a5.104 5.104 0 003.553 4.255c.8.249 2.075.248 2.874-.001 2.228-.696 3.727-2.833 3.565-5.083-.028-.396-.078-.81-.11-.918l-.058-.196 1.679-.029 1.679-.028.216-.252.217-.252v-9.697l-1.885-3.77c-1.134-2.268-1.955-3.808-2.06-3.864-.116-.062-1.74-.094-4.757-.094h-4.582l-.186.237c-.147.187-.186.365-.186.853 0 .34-.016.617-.036.617-.02 0-.245-.14-.501-.313-.619-.416-1.485-.675-2.258-.675-.34 0-.62-.03-.62-.068-.002-.037.128-.577.288-1.201.321-1.252.297-1.526-.148-1.695-.122-.047-3.186-.88-6.807-1.853l-6.584-1.767-4.223.358-4.223.359-.763-.207c-1.944-.527-2.755-.717-2.933-.688zm2.733 2.13c.021.02-2.11 8.052-2.459 9.269l-.131.458-1.009-.272c-.554-.15-1.019-.28-1.033-.288-.02-.013 2.377-9.033 2.546-9.58.04-.13.154-.116 1.053.123.554.147 1.02.278 1.033.29zm8.246-.154c-.113.47-3.834 14.352-3.851 14.37-.01.008-1.23-.832-2.713-1.869a288.793 288.793 0 00-2.813-1.953c-.092-.054.179-1.177 1.24-5.138a540.224 540.224 0 011.377-5.082c.031-.025 6.035-.55 6.428-.563.383-.012.39-.007.332.235zm7.631 1.43c3.064.819 5.602 1.518 5.64 1.553.054.05-3.664 14.203-3.958 15.067-.063.183-.195.154-4.646-1.04l-5.863-1.572c-.893-.239-1.28-.381-1.28-.471 0-.115 3.89-14.723 4-15.021.055-.15-.623-.314 6.107 1.484zM43.9 19.6l1.663 3.324v6.292l-3.976.002c-4.25 0-4.395.013-5.383.469-.264.122-.692.39-.951.596l-.472.376V16.275H42.238L43.9 19.6zm-12.218-2.35c.612.29 1.141.825 1.424 1.44.275.6.265 1.681-.021 2.322-.25.56-.928 1.223-1.514 1.482-.917.406-2.21.187-2.935-.497l-.397-.375.598-2.223c.683-2.536.577-2.386 1.677-2.398.514-.006.727.04 1.168.248zm4.723.7c-.178.226-.186.345-.186 2.6v2.365l.216.252.217.253 2.905.027c1.599.015 3.037.003 3.198-.027.355-.065.651-.362.651-.654 0-.221-2.158-4.615-2.405-4.896-.124-.142-.352-.157-2.274-.157h-2.136l-.186.236zm4.396 2.639l.72 1.438h-3.865V19.15h2.425l.72 1.438zm-37.659 1.13l.98.272.472.13v1.344H2.437v-.944c0-.624.034-.944.099-.944.054 0 .327.064.606.142zm5.405 3.03l2.47 1.732.025 1.37.025 1.368-2.495-.024-2.496-.023-.023-3.079c-.013-1.693-.013-3.078 0-3.077.013 0 1.135.78 2.494 1.733zm24.797-.745v.898h-.719v-.66c0-.659 0-.659.336-.898.185-.131.346-.239.36-.239.012 0 .023.404.023.899zm-5.253-.574c.202.133.221.203.221.809v.663h-.449c-.247 0-.45-.03-.45-.067-.002-.122.387-1.55.422-1.55.02 0 .134.065.256.145zm3.096 1.09v.383H29.75v-.778l.719.006.718.006v.383zm5.218-.1c-.245.312-.235.595.03.904.2.233.267.253.862.253s.661-.02.861-.253c.266-.309.276-.592.03-.904-.172-.22-.236-.237-.891-.237s-.72.017-.892.237zM4.594 25.621v.72H2.437v-1.438h2.157v.719zm28.75 2.158v1.437h-3.55c-1.95 0-3.548-.023-3.548-.051 0-.029.168-.676.373-1.438l.372-1.387h6.353v1.439zm-5.53-.499c-.279.28-.28.598-.003.92l.216.253h2.067c2.064 0 2.068 0 2.3-.218.282-.266.299-.615.045-.939l-.186-.236h-4.218l-.22.22zm-11.688.898c1.92.516 3.513.96 3.541.988.028.028-1.574.05-3.558.05H12.5v-.988c0-.544.03-.989.067-.988.037 0 1.639.422 3.559.938zm-11.532.32v.718H2.437V27.78h2.157v.718zm3.265 2.583c-.18.235-.468.72-.638 1.079-.171.358-.347.651-.391.651-.044 0-.08-.485-.08-1.078v-1.079h1.436l-.327.427zm5.473-.084c2.672 1.315 2.7 5.068.047 6.408-2.24 1.13-4.926-.392-5.162-2.925-.098-1.047.32-2.107 1.127-2.863.79-.74 1.43-.971 2.581-.936.711.022.895.063 1.407.316zm4.571.101a5.44 5.44 0 00-.814 1.466c-.06.16-.158.247-.276.247-.12 0-.217-.088-.277-.247a5.442 5.442 0 00-.814-1.466l-.351-.444h2.883l-.35.444zm5.492-.101c1.584.78 2.378 2.566 1.875 4.22-.525 1.73-2.16 2.77-3.965 2.524-.567-.078-1.407-.461-1.812-.827-1.494-1.35-1.64-3.611-.326-5.05.828-.906 1.578-1.22 2.82-1.183.712.022.895.063 1.408.316zm9.949.736v1.078H26.69l-.092-.247a5.442 5.442 0 00-.815-1.466l-.35-.444h7.91v1.079zm6.538-.772c.742.341 1.54 1.18 1.82 1.912.297.782.33 1.583.099 2.347-.407 1.338-1.551 2.338-2.886 2.52-1.45.199-2.919-.502-3.645-1.74-.755-1.287-.577-3.035.421-4.128.844-.923 1.552-1.228 2.774-1.194.72.02.942.065 1.417.283zm5.68.053v.36h-3.024l-.289-.36-.289-.36h3.602v.36zM10.77 32.319c-1.06.564-1.442 1.927-.83 2.97.41.7 1.014 1.042 1.846 1.044 2.125.005 2.934-2.688 1.177-3.923-.338-.237-.474-.275-1.076-.295-.591-.02-.75.008-1.117.204zm10.086-.015c-1.085.554-1.476 1.972-.83 3.016 1.057 1.711 3.707 1.14 3.942-.851.154-1.305-.8-2.372-2.123-2.372-.432 0-.69.054-.989.207zm16.532 0c-1.086.554-1.477 1.972-.831 3.016 1.057 1.711 3.707 1.14 3.942-.851.154-1.305-.8-2.372-2.123-2.372-.432 0-.69.054-.988.207zm-25.073 1.463c.102.13.186.327.186.437 0 .11-.084.307-.186.438-.144.182-.266.236-.533.236s-.389-.054-.532-.236c-.103-.13-.187-.327-.187-.438 0-.11.084-.307.187-.437.143-.183.265-.237.532-.237s.39.054.533.237zm10.062 0c.103.13.186.327.186.437 0 .11-.083.307-.186.438-.143.182-.265.236-.532.236s-.39-.054-.533-.236c-.102-.13-.186-.327-.186-.438 0-.11.084-.307.186-.437.144-.183.266-.237.533-.237s.389.054.532.237zm16.531 0c.103.13.187.327.187.437 0 .11-.084.307-.187.438-.143.182-.265.236-.532.236s-.389-.054-.532-.236c-.103-.13-.187-.327-.187-.438 0-.11.084-.307.187-.437.143-.183.265-.237.532-.237s.389.054.532.237z"/>
        </svg>
        <svg fill="none" viewBox="0 0 48 48" id="hand" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16.344.081a3.15 3.15 0 00-1.894 1.647l-.216.469-.029 5.42c-.022 4.147-.055 5.409-.14 5.373-.57-.241-1.18-.356-1.62-.304-1.365.16-2.418 1.128-2.657 2.442-.067.37-.1 3.308-.1 8.768v8.212l-.643.638-.643.638-.5-.148c-.965-.287-2.172-.137-3.056.38-.553.324-1.224 1.076-1.517 1.701-.225.48-.25.645-.25 1.57 0 .986.014 1.062.32 1.687.28.573.617.953 2.715 3.071 1.317 1.33 2.49 2.442 2.609 2.471.356.09.67-.045.831-.355.11-.213.127-.348.06-.493-.05-.11-1.173-1.305-2.496-2.655-1.442-1.472-2.46-2.587-2.543-2.785-.076-.18-.137-.593-.135-.917.003-.964.453-1.734 1.263-2.165.513-.273 1.62-.284 2.156-.022.565.277 8.092 7.898 8.366 8.472.432.903.184 2.142-.56 2.795-.97.852-2.36.769-3.438-.204-.432-.39-.816-.427-1.117-.108a.832.832 0 00-.204.488c0 .531 1.299 1.484 2.355 1.727 1.688.39 3.534-.528 4.285-2.13.222-.475.25-.649.25-1.52 0-.861-.031-1.06-.255-1.593l-.256-.61.628-.633.629-.633h.763c2.399 0 4.748-.973 6.537-2.706.582-.564 1.304-1.496 1.658-2.14l.215-.393 2.354-.029 2.353-.029.503-.278a3.18 3.18 0 001.3-1.417c.148-.328.169-.767.194-4.088l.028-3.72.458-.153c1.152-.382 1.878-1.396 1.874-2.617-.002-.736-.212-1.328-.623-1.758l-.24-.25.24-.316c.818-1.071.84-2.494.055-3.473l-.282-.352.282-.351c.765-.955.765-2.468 0-3.422l-.282-.352.282-.351c1.134-1.415.458-3.76-1.239-4.296l-.523-.165-.03-3.008c-.028-2.941-.033-3.018-.25-3.452A3.184 3.184 0 0032.79.267l-.46-.226-4.932-.027c-4.73-.025-4.94-.02-5.151.152-.272.22-.303.78-.058 1.024.149.15.572.167 5.027.21 4.73.046 4.872.052 5.124.24.413.309.616.644.668 1.109l.049.432H15.688v-.408c0-.503.296-.98.751-1.209.258-.13.57-.164 1.48-.164 1.098 0 1.163-.01 1.382-.23.127-.127.23-.34.23-.473 0-.134-.103-.347-.23-.473-.222-.222-.273-.23-1.476-.222-.686.004-1.352.04-1.481.08zM33.03 6.37V8.15h-.358c-1.334 0-2.549 1.27-2.547 2.663 0 .764.13 1.185.52 1.697l.326.428-.279.348c-.765.955-.762 2.466.009 3.426l.288.36-.234.25c-.389.415-.565.87-.61 1.573-.052.792.067 1.222.514 1.852l.324.455-.237.248c-.647.677-.823 1.967-.395 2.888.424.91 1.46 1.624 2.357 1.624h.326l-.025 1.758-.026 1.758H19.698l-.224-.775c-.576-1.997-1.647-3.562-3.133-4.577l-.654-.447V4.588h17.344v1.78zm-22.27-.801c-.295.295-.3.702-.013.972.36.338.827.257 1.054-.182.373-.72-.47-1.36-1.04-.79zm25.746.204c-.244.31-.245.507-.005.813.254.323.495.385.826.214.296-.153.39-.316.39-.672 0-.578-.842-.825-1.211-.355zm-17.858 2.11c-1.023 1.067-1.18 1.273-1.18 1.54 0 .51.575.847 1.028.604.095-.05.687-.643 1.316-1.317 1.017-1.092 1.136-1.253 1.082-1.478a.758.758 0 00-.756-.581c-.274 0-.443.14-1.49 1.232zm2.235 2.236c-2.96 3.048-3.372 3.508-3.397 3.792-.037.414.236.708.661.711.276.002.528-.225 2.628-2.367a333.792 333.792 0 003.454-3.57c1.009-1.07 1.125-1.228 1.072-1.453a.757.757 0 00-.75-.581c-.273 0-.615.324-3.668 3.468zM8.03 8.057c-.419.168-.54.801-.217 1.124.26.26.704.242.988-.042.304-.304.29-.568-.044-.902-.288-.289-.393-.315-.727-.18zm31.593.185c-.656.271-.43 1.314.286 1.314.32 0 .716-.381.716-.688 0-.47-.549-.812-1.002-.626zM34.785 9.74c.827.505.77 1.854-.099 2.325-.427.23-2.047.226-2.48-.007-.863-.467-.913-1.813-.084-2.318.25-.152.473-.183 1.331-.183s1.082.03 1.331.183zM5.463 11.323c-.31.25-.29.729.041 1.014.315.27.522.276.842.025.18-.142.247-.28.247-.516 0-.61-.651-.911-1.13-.523zm36.329.245c-.127.126-.23.339-.23.473 0 .312.39.703.703.703.312 0 .703-.39.703-.703 0-.313-.39-.704-.703-.704-.134 0-.347.104-.473.23zm-7.008 2.297c.378.23.59.636.59 1.129s-.212.898-.59 1.128c-.25.152-.474.184-1.313.184-.731 0-1.09-.04-1.293-.145-.837-.432-.87-1.8-.057-2.296.25-.152.473-.183 1.331-.183s1.082.03 1.331.183zm-21.184.53c.593.435.586.375.586 5.363 0 2.865.035 4.594.095 4.706.052.097.4.337.773.533.821.43 1.782 1.348 2.244 2.142.832 1.431 1.157 2.782 1.08 4.49-.061 1.392-.214 1.99-.816 3.196-.258.518-.47 1.021-.47 1.12 0 .288.372.611.704.611.316 0 .548-.198.85-.726l.175-.305h7.282l-.169.305c-.093.167-.571.705-1.062 1.195-1.028 1.025-1.824 1.52-3.186 1.978-.8.27-1.038.306-2.365.356l-1.475.057-.783.78-.784.78-3.339-3.359-3.339-3.358.723-.728.722-.73.047-8.85c.046-8.796.048-8.851.243-9.115.108-.145.34-.363.515-.483.27-.186.41-.214.905-.183.395.024.669.097.844.225zm-9.632.29c-.3.11-.469.346-.469.651 0 .844 1.169.934 1.365.105.048-.204.004-.311-.223-.539-.28-.28-.398-.318-.673-.217zm39.511.445c-.256.256-.28.401-.124.744.217.475.96.518 1.2.068.4-.745-.48-1.408-1.076-.812zm-8.725 2.801c.855.56.811 1.929-.075 2.35-.441.209-2.013.209-2.453 0-1.023-.486-.885-2.129.208-2.477.466-.149 2.03-.063 2.32.127zm-32.186.778c-.222.283-.236.402-.088.727.16.35.556.483.904.303.443-.23.536-.716.205-1.071a.68.68 0 00-1.02.041zm42.117.053c-.325.157-.45.562-.275.898.08.154.213.306.296.338.744.285 1.35-.669.733-1.154-.27-.213-.444-.232-.754-.082zm-10.063 3.24c.744.373 1.005 1.396.507 1.988-.398.473-.677.566-1.683.566-.752 0-.967-.034-1.262-.2-.496-.279-.692-.677-.634-1.288.052-.538.297-.885.777-1.098.43-.191 1.891-.171 2.295.032zm-32.13.407c-.227.084-.493.438-.493.655 0 .085.087.266.194.401.382.486 1.212.22 1.212-.388 0-.513-.446-.84-.912-.668zm42.367.395c-.288.308-.27.75.043.995.403.318.8.244 1.024-.19.37-.715-.521-1.385-1.067-.805zM2.78 26.336c-.655.27-.425 1.314.289 1.314.368 0 .712-.326.712-.675 0-.482-.543-.828-1.001-.639zm41.71.335c-.264.185-.29.783-.045 1.004.474.427 1.149.16 1.149-.454 0-.594-.609-.897-1.104-.55zM3.708 30.234c-.278.194-.289.782-.02 1.026.451.408 1.124.073 1.124-.559 0-.547-.617-.808-1.104-.468zm39.654.232c-.578.538.22 1.563.845 1.087.265-.201.351-.547.216-.87-.19-.45-.7-.554-1.062-.217zm-10.33 1.482c0 .877-.03 1.072-.214 1.42-.419.792-.03.75-7.121.75-3.443 0-6.259-.03-6.258-.07 0-.038.065-.302.143-.586.078-.283.169-.969.2-1.523l.059-1.008h13.19v1.017zm8.567 2.015c-.505.434-.224 1.187.443 1.187.617 0 .889-.826.398-1.212-.32-.251-.526-.245-.841.025zm-2.474 3.156c-.423.422-.105 1.125.509 1.125.344 0 .71-.339.71-.657 0-.089-.088-.273-.195-.409a.706.706 0 00-1.024-.06zm-2.625 2.41c-.313.114-.469.344-.469.693 0 .401.25.647.657.647.407 0 .656-.246.656-.647 0-.482-.436-.84-.844-.692zm-3.597 2.19a.573.573 0 00-.247.512c0 .74.93.975 1.27.32.163-.318.067-.651-.253-.876-.286-.2-.473-.19-.77.044zm-3.701 1.376a.92.92 0 00-.254.42c-.049.205-.005.312.223.539.333.333.556.355.895.09a.572.572 0 00.247-.5c0-.586-.674-.918-1.111-.549zm-7.883.74c-.107.135-.194.32-.194.409 0 .213.332.63.56.702.217.069.707-.166.788-.378.285-.744-.669-1.35-1.154-.733zm3.974-.017c-.127.126-.23.339-.23.473 0 .133.103.346.23.473.126.126.339.23.473.23.133 0 .346-.104.473-.23.126-.127.23-.34.23-.473 0-.134-.104-.347-.23-.473-.127-.127-.34-.23-.473-.23-.134 0-.347.103-.473.23z"
                  fill="#E42320"/>
        </svg>
        <svg viewBox="0 0 12 18" id="location" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 0C2.692 0 0 2.839 0 6.328c0 1.179.31 2.33.896 3.328l4.762 8.095c.092.155.252.249.425.249h.004a.495.495 0 00.425-.256l4.642-8.174A6.584 6.584 0 0012 6.328C12 2.838 9.308 0 6 0zm4.296 9.029l-4.22 7.43L1.746 9.1a5.482 5.482 0 01-.753-2.772c0-2.908 2.25-5.28 5.007-5.28 2.757 0 5.003 2.372 5.003 5.28 0 .954-.247 1.888-.707 2.7z"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 3.164c-1.654 0-3 1.42-3 3.164 0 1.734 1.324 3.164 3 3.164 1.697 0 3-1.45 3-3.164 0-1.745-1.346-3.164-3-3.164zM3.993 6.328c0 1.166.898 2.117 2.007 2.117 1.126 0 2.003-.968 2.003-2.117 0-1.163-.9-2.116-2.003-2.116-1.103 0-2.007.953-2.007 2.116z"/>
        </svg>
        <svg fill="none" viewBox="0 0 18 18" id="mail" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.554 2.813H1.696a.558.558 0 00-.571.545v10.909c0 .302.255.546.571.546h14.858a.558.558 0 00.571-.546V3.358a.558.558 0 00-.571-.546zM15.839 4.7v8.884H2.411V4.701l-.493-.366.702-.861.764.567h11.484l.764-.567.702.86-.495.367zm-.971-.661L9.125 8.3 3.382 4.04l-.764-.568-.702.861.493.366 6.1 4.528c.175.13.391.2.613.2.222 0 .438-.07.614-.2L15.839 4.7l.493-.366-.702-.861-.762.566z"
                  fill="#fff"/>
        </svg>
        <svg viewBox="0 0 48 50" id="mixtures" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M15.61 1.754c-.295.12-.703.516-.876.852-.268.522-.175.987.643 3.187.426 1.145.774 2.154.774 2.242 0 .087-.165.406-.366.708-.669 1.004-1.082 1.954-1.452 3.34-.08.3-.124 2.398-.161 7.711l-.05 7.3-.717.315c-2.532 1.116-4.478 3.452-5.208 6.251-.197.76-.272 2.618-.145 3.597l.068.516-.519.255c-1.042.514-2.129 1.912-2.326 2.992-.05.274-.11.355-.3.397-1.17.26-2.057.738-2.71 1.462-.996 1.104-1.494 2.781-1.163 3.917.146.502.894 1.26 1.39 1.409.285.085 4.007.11 16.068.11 14.11 0 15.739-.014 16.117-.145.542-.187 1.164-.87 1.325-1.454.142-.514.075-1.385-.16-2.094l-.17-.51 4.887-.026 4.887-.025.362-.243c.2-.134.44-.402.532-.595.322-.665.25-.991-.707-3.207-.483-1.117-.878-2.126-.877-2.241 0-.116.243-.54.541-.942.893-1.208 1.429-2.483 1.624-3.865.07-.495.092-3.688.072-10.546l-.027-9.836-.249-.803a9.69 9.69 0 00-1.457-2.9c-.283-.378-.505-.77-.505-.892 0-.119.395-1.13.878-2.248.957-2.216 1.029-2.541.707-3.207a1.81 1.81 0 00-.532-.595l-.363-.243-14.805-.017c-9.686-.012-14.882.014-15.03.073zm29.455 1.443c.027.045-.342.981-.82 2.082-1.208 2.778-1.217 3.038-.168 4.465.651.886 1.025 1.64 1.274 2.568.163.61.171 1.099.171 10.613 0 9.292-.01 10.014-.16 10.565-.239.875-.705 1.793-1.322 2.602-.998 1.31-.982 1.654.206 4.389.477 1.1.846 2.037.819 2.081-.028.046-2.324.081-5.232.081H34.65l-.43-.31c-.911-.657-1.837-.967-2.896-.97-.51 0-.567-.019-.51-.161.135-.341.148-1.625.02-2.101l-.127-.477 4.415-.026 4.416-.027.217-.256c.267-.315.277-.604.031-.92l-.187-.242H29.94l-.49-.444c-.809-.73-1.959-1.203-2.929-1.203h-.42l-.105-.827c-.605-4.78-4.744-8.29-9.458-8.02l-.935.054.029-7.064c.029-7.015.03-7.067.231-7.733a9.35 9.35 0 011.175-2.43c.41-.593.6-1.194.534-1.692-.026-.195-.376-1.245-.779-2.334-.402-1.089-.732-2.062-.732-2.162 0-.18.087-.182 14.477-.182 8.298 0 14.498.035 14.527.081zM18.719 4.622a.742.742 0 00-.222.507c0 .178.082.366.222.508.21.213.274.224 1.312.224s1.102-.01 1.313-.224a.742.742 0 00.221-.508.742.742 0 00-.221-.507c-.21-.214-.275-.225-1.313-.225-1.038 0-1.101.011-1.312.225zm4.421 0a.742.742 0 00-.221.507c0 .178.082.366.221.508.22.221.241.224 1.857.224h1.635l.264-.267c.145-.147.264-.356.264-.465 0-.108-.119-.317-.264-.464l-.264-.268h-1.635c-1.616 0-1.638.003-1.857.225zm5.611-.035a.71.71 0 000 1.084c.22.176.356.19 1.838.19 1.482 0 1.617-.014 1.837-.19.184-.146.238-.27.238-.542s-.054-.396-.238-.542c-.22-.176-.355-.19-1.837-.19s-1.618.014-1.838.19zm5.53.078c-.145.147-.263.356-.263.464 0 .109.118.318.263.465l.264.267h1.635c1.616 0 1.638-.003 1.857-.224a.742.742 0 00.222-.508.742.742 0 00-.222-.507c-.219-.222-.24-.225-1.857-.225h-1.635l-.264.268zm5.553-.043a.742.742 0 00-.222.507c0 .178.082.366.222.508.21.213.274.224 1.312.224s1.102-.01 1.313-.224a.742.742 0 00.221-.508.742.742 0 00-.221-.507c-.211-.214-.275-.225-1.313-.225-1.038 0-1.102.011-1.312.225zM21.39 7.475c-.245.317-.236.605.031.92l.218.257h17.898l.217-.257c.267-.315.277-.603.031-.92l-.187-.241h-18.02l-.188.24zm2.566 5.424c-.814.204-1.557.819-1.943 1.609l-.223.457v6.862l.308.577c.343.64.624.916 1.306 1.281l.461.247h13.445l.569-.313c.631-.347.903-.632 1.263-1.324l.243-.468v-6.862l-.243-.467c-.36-.692-.632-.977-1.263-1.325l-.569-.312-6.542-.015c-3.598-.008-6.664.015-6.813.053zm13.364 1.614c.138.104.333.303.436.442.18.243.186.363.186 3.441s-.007 3.198-.186 3.442a2.593 2.593 0 01-.435.441c-.247.187-.326.189-6.733.189-6.408 0-6.487-.002-6.733-.189a2.603 2.603 0 01-.435-.44c-.178-.242-.188-.39-.214-3.198-.015-1.619-.003-3.076.026-3.239.067-.367.446-.834.81-.995.222-.1 1.488-.12 6.652-.103 6.285.02 6.381.023 6.627.21zM18.42 28.24c1.56.299 2.907 1.041 4.048 2.23 1.413 1.475 2.165 3.368 2.165 5.449 0 .997.142 1.206.782 1.154 1.274-.105 1.777-.062 2.297.197.6.298 1.277.998 1.551 1.603.303.667.28 1.809-.05 2.524-.293.634-.31.876-.076 1.168.164.207.235.218 1.601.264 1.32.044 1.471.067 1.971.302 1.062.499 1.813 1.564 1.916 2.718.044.482.026.553-.185.767l-.234.237H2.88l-.234-.237c-.212-.215-.228-.285-.185-.772.145-1.62 1.41-2.843 3.108-3.008.794-.077 1.019-.259 1.019-.826 0-.851.537-1.895 1.24-2.411.212-.155.657-.371.99-.481.399-.13.667-.28.782-.437.17-.232.171-.256.017-.951-.419-1.895-.234-3.616.566-5.275 1.518-3.146 4.867-4.86 8.238-4.215zm-3.397 2.449c-1.027.347-1.868 1.126-2.214 2.05-.34.912-.237 2.336.2 2.736.263.242.78.21.998-.063.154-.193.169-.295.107-.728-.197-1.38.196-2.203 1.216-2.55.793-.269 1.708.067 2.163.794.405.646.523.75.853.75a.7.7 0 00.692-.693c-.002-.654-.88-1.703-1.775-2.118-.599-.277-1.69-.364-2.24-.178zm8.07 9.279c-.576.296-1.076.908-1.076 1.315 0 .369.356.72.73.72.226 0 .364-.087.651-.411.324-.365.409-.412.747-.412.316 0 .422.049.616.282.258.31.282.492.133.997-.271.918.82 1.404 1.297.577.093-.161.192-.515.22-.787.185-1.825-1.694-3.116-3.317-2.281zm12.049.156a.742.742 0 00-.222.507c0 .178.082.366.221.508.211.213.275.224 1.313.224 1.038 0 1.102-.01 1.312-.224a.743.743 0 00.222-.508.742.742 0 00-.222-.507c-.21-.214-.274-.225-1.312-.225s-1.102.011-1.313.225zm4.692 0a.742.742 0 00-.222.507c0 .178.082.366.222.508.21.213.274.224 1.312.224s1.102-.01 1.313-.224a.742.742 0 00.221-.508.742.742 0 00-.221-.507c-.211-.214-.275-.225-1.313-.225-1.038 0-1.102.011-1.312.225zm-28.068.814c-.567.189-1.156.645-1.46 1.13-.726 1.16-.583 2.393.278 2.403.372.004.695-.363.695-.794 0-1 .979-1.676 1.803-1.244.364.192.723.69.723 1.006 0 .314.383.669.722.669.367 0 .722-.356.722-.724 0-.427-.33-1.219-.68-1.634-.625-.74-1.903-1.11-2.803-.812z"/>
        </svg>
        <svg viewBox="0 0 19 19" id="phone" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.84 13.284l-2.289-2.186a1.584 1.584 0 00-2.237.052l-.993 1.04a1.2 1.2 0 01-1.695.04l-4.51-4.309a1.198 1.198 0 01-.039-1.695l.993-1.04c.6-.628.586-1.629-.052-2.238L4.73.771a1.584 1.584 0 00-2.236.05l-.796.827a5.712 5.712 0 00.187 8.067L9.03 16.54a5.703 5.703 0 008.068-.187l.794-.833a1.584 1.584 0 00-.052-2.236zM4.002 1.534a.528.528 0 00-.747.017l-.362.376 3.05 2.912.364-.381a.527.527 0 00-.017-.746L4.002 1.534zM2.613 8.952l7.146 6.825a4.628 4.628 0 006.263.146l-3.041-2.903c-.868.802-2.218.799-3.083-.027l-4.51-4.309a2.251 2.251 0 01-.17-3.078l-3.04-2.904a4.637 4.637 0 00.435 6.25zm14.152 6.222l.364-.382a.528.528 0 00-.017-.745l-2.29-2.186a.528.528 0 00-.745.018l-.364.381 3.052 2.914z"/>
        </svg>
        <svg fill="none" viewBox="0 0 48 48" id="progress" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M36.036.319c-.222.23-.309.402-.309.619 0 .216.087.389.31.618.197.204.469.319.752.319H40.045l-4.498 4.64-4.498 4.639-1.825-1.874c-1.822-1.871-1.826-1.874-2.228-1.874a.951.951 0 00-.683.29l-8.097 8.359c-5.812 6-8.388 8.72-8.412 8.883-.096.649.27 1.125.866 1.125h.373l7.977-8.225 7.978-8.225 1.796 1.843c1.796 1.842 2.053 2.038 2.495 1.902.116-.036 2.41-2.327 5.097-5.093l4.887-5.028.005 1.545c.006 1.805.079 2.123.546 2.381.385.213.724.155 1.047-.178.141-.145.22-.34.22-.542V3.701c0-1.917-.035-3.124-.094-3.237C42.77.026 42.564 0 39.36 0h-2.57c-.283 0-.555.115-.753.319zm-.763 13.657c-.55.256-.977.691-1.238 1.258l-.215.47v15.21l-.002 15.211H28.727v-8.32c0-5.38-.034-8.443-.094-8.666-.156-.582-.639-1.203-1.18-1.52l-.498-.29h-2.91c-2.81 0-2.921.006-3.277.203a2.82 2.82 0 00-1.166 1.25c-.192.418-.193.478-.218 8.882l-.025 8.461h-4.984l-.028-4.477c-.029-4.442-.03-4.48-.238-4.945-.287-.643-.78-1.136-1.359-1.36-.442-.17-.71-.187-3.1-.187-2.885 0-3.142.04-3.769.572a3.237 3.237 0 00-.586.724l-.25.439-.026 4.617-.026 4.617H3.856c-1.497 0-1.856.182-1.856.938 0 .392.132.625.453.795C2.687 47.984 5.196 48 24 48c18.804 0 21.313-.017 21.547-.142.32-.17.453-.403.453-.795 0-.75-.363-.938-1.814-.938h-1.095l-.001-15.21V15.702l-.214-.469c-.27-.593-.618-.952-1.194-1.23-.446-.217-.507-.22-3.227-.22-2.593.001-2.8.014-3.182.192zm5.833 1.835c.16.15.167.745.167 15.235v15.079H35.636V31.062c0-13.885.012-15.076.15-15.234.14-.159.345-.172 2.653-.172 2.2 0 2.521.019 2.667.155zM7.393 27.534c-.108.022-.303.148-.431.281-.524.54-.123 1.529.62 1.529.957 0 1.245-1.365.368-1.743-.17-.072-.32-.127-.333-.12-.015.007-.115.031-.224.053zM26.7 29.36l.21.204v16.561h-5.727V29.616l.223-.23.223-.23h2.43c2.37 0 2.436.005 2.64.204zm-14.447 7.817l.202.146v8.802H6.818v-4.36c0-4.234.005-4.364.182-4.546.173-.178.303-.188 2.616-.188 2.056 0 2.466.023 2.636.146z"
                  fill="#E42320"/>
        </svg>
        <svg viewBox="0 0 23 25" id="search" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.93 22.707l-7.465-7.623a8.847 8.847 0 001.785-5.367c0-2.354-.9-4.561-2.527-6.226A8.473 8.473 0 008.625.911c-2.303 0-4.47.919-6.098 2.58A8.83 8.83 0 000 9.717c0 2.352.9 4.565 2.527 6.226a8.468 8.468 0 006.098 2.58c1.926 0 3.755-.64 5.253-1.82l7.466 7.621a.235.235 0 00.257.052.235.235 0 00.076-.052l1.254-1.277a.24.24 0 00.069-.17.244.244 0 00-.07-.17zm-9.751-8.34a6.34 6.34 0 01-4.554 1.926 6.34 6.34 0 01-4.554-1.926 6.61 6.61 0 01-1.886-4.65c0-1.755.67-3.408 1.886-4.65a6.34 6.34 0 014.554-1.925c1.72 0 3.338.681 4.554 1.926a6.61 6.61 0 011.886 4.65c0 1.755-.67 3.408-1.886 4.65z"/>
        </svg>
        <svg fill="none" viewBox="0 0 32 32" id="select" xmlns="http://www.w3.org/2000/svg">
            <rect width="32" height="32" rx="15.6" fill="#E42320"/>
            <path d="M15.068 23.366l-.028.028L8 16.354l2.292-2.292 4.776 4.776 7.638-7.638L25 13.492l-9.903 9.902-.028-.028z"
                  fill="#fff"/>
        </svg>
        <svg fill="none" viewBox="0 0 48 48" id="setting" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M23.076 1.204c-1.272.58-1.746 1.871-1.14 3.105.74 1.506 3.015 1.661 3.95.27.587-.873.543-1.995-.107-2.725-.736-.826-1.772-1.075-2.703-.65zm1.483 1.472c.561.519.2 1.418-.57 1.418-.76 0-1.115-.849-.588-1.401.332-.349.793-.355 1.158-.017zm-8.263.33c-3.285 1.156-6.084 2.901-8.571 5.345-3.76 3.694-6.045 8.444-6.63 13.787-.31 2.81.187 7.545.815 7.782.393.149.773.065.957-.211.167-.25.168-.374.012-1.109-.53-2.5-.56-5.827-.074-8.254C4.311 12.828 9.68 6.778 17.065 4.274c1.03-.35 1.322-.5 1.43-.736.104-.222.103-.364-.002-.56-.304-.57-.508-.567-2.197.027zm13.658-.111c-.134.132-.244.318-.244.413 0 .35.564.76 1.4 1.02 1.32.41 4.138 1.834 5.402 2.729 5.925 4.195 9.263 10.895 8.977 18.018-.041 1.022-.158 2.29-.26 2.818-.335 1.739-.352 2.032-.125 2.255.248.244.835.266 1.027.038.191-.226.58-2.052.736-3.458 1.146-10.298-5.21-20.256-15.128-23.7-1.262-.438-1.46-.453-1.785-.133zM20.629 9.26c-.208.227-.235.49-.269 2.617l-.037 2.364-.607.215c-.334.118-1.122.554-1.751.968l-1.143.753-1.986-1.125c-1.098-.622-2.127-1.126-2.302-1.127-.174 0-.398.094-.498.209-.427.49-3.02 5.09-3.02 5.356 0 .16.076.367.169.459.093.092 1.053.668 2.133 1.28l1.964 1.112-.09.437c-.082.39-.086 2.65-.007 3.342.026.229-.267.436-2.04 1.444-1.906 1.085-2.072 1.206-2.106 1.543-.028.284.28.91 1.39 2.812.784 1.346 1.507 2.541 1.607 2.657.1.115.32.21.487.21.168 0 1.2-.511 2.296-1.135l1.99-1.135.942.628c.518.345 1.308.788 1.755.985l.812.357.04 2.355c.035 2.117.063 2.382.271 2.608.225.244.336.252 3.36.252 3.023 0 3.135-.008 3.359-.252.208-.226.236-.492.271-2.608l.04-2.355.813-.357c.446-.197 1.236-.64 1.754-.985l.942-.628 1.99 1.135c1.096.624 2.128 1.135 2.296 1.135a.73.73 0 00.487-.21c.1-.116.823-1.311 1.608-2.657 1.117-1.917 1.418-2.527 1.389-2.817-.034-.344-.189-.456-2.135-1.561l-2.098-1.19.085-.489c.113-.657.114-2.408.002-3.027l-.09-.5 1.948-1.098c1.072-.604 2.03-1.178 2.13-1.276a.76.76 0 00.182-.474c0-.27-2.594-4.872-3.018-5.353-.102-.115-.327-.209-.5-.208-.175.002-1.207.509-2.298 1.13l-1.982 1.127-1.148-.756c-.63-.416-1.42-.853-1.754-.97l-.608-.216-.037-2.364c-.034-2.127-.06-2.39-.27-2.617-.223-.243-.335-.252-3.358-.252-3.024 0-3.135.009-3.36.252zm5.55 3.51c0 1.714.04 2.356.153 2.446.084.068.59.29 1.126.493a9.254 9.254 0 012.77 1.65c.276.243.585.402.782.402.185 0 1.039-.407 1.978-.942.909-.519 1.77-1.003 1.915-1.078.248-.128.324-.032 1.321 1.67.582.992 1.04 1.818 1.016 1.835-.024.017-.882.506-1.907 1.087-1.025.58-1.946 1.179-2.047 1.33-.152.23-.158.36-.035.794.189.665.19 2.981.004 3.741-.119.483-.114.631.03.848.097.145 1.017.739 2.044 1.32 1.027.581 1.885 1.071 1.907 1.09.072.058-2.067 3.653-2.15 3.61-.044-.023-.918-.516-1.943-1.094-1.024-.58-1.996-1.053-2.16-1.053-.17 0-.506.186-.792.44-.733.653-1.701 1.23-2.763 1.645-.52.204-1.011.424-1.094.489-.106.085-.159.777-.182 2.414l-.033 2.296h-4.26l-.034-2.296c-.023-1.637-.076-2.33-.182-2.414-.083-.066-.53-.268-.996-.45-1.095-.429-2.051-.985-2.781-1.618-.342-.296-.706-.506-.878-.506-.162 0-1.05.43-1.973.957a124.14 124.14 0 01-1.939 1.091c-.244.126-.324.025-1.318-1.672-.581-.993-1.04-1.82-1.018-1.836.022-.017.88-.505 1.905-1.085s1.945-1.175 2.043-1.323c.148-.222.154-.368.035-.853-.185-.757-.184-2.934.002-3.695.129-.525.12-.627-.076-.886-.175-.23-3.361-2.155-3.86-2.332-.094-.033 1.949-3.682 2.062-3.682.02 0 .888.485 1.927 1.079 1.038.593 2.02 1.079 2.182 1.079.168 0 .604-.246 1.02-.575.937-.74 1.674-1.162 2.693-1.54.45-.167.889-.36.972-.428.112-.092.152-.735.152-2.447v-2.324h4.382v2.323zm-3.908 7.186c-1.24.512-2.099 1.312-2.648 2.466-.283.594-.321.823-.321 1.935 0 1.18.025 1.313.394 2.051a5.04 5.04 0 002.318 2.241c.617.285.842.322 1.977.322 1.198 0 1.332-.025 2.082-.389A5.036 5.036 0 0028.35 26.3c.289-.607.326-.83.326-1.944 0-1.115-.037-1.337-.326-1.945a5.04 5.04 0 00-2.275-2.283c-.708-.343-.936-.392-1.96-.42-.99-.029-1.26.008-1.843.249zm3.057 1.411c1.224.545 1.946 1.655 1.944 2.988-.004 1.865-1.394 3.235-3.283 3.235-1.89 0-3.28-1.37-3.283-3.235-.004-1.86 1.39-3.232 3.283-3.232.535 0 .968.079 1.339.244zM4.45 32.821c-.864.466-1.278 1.146-1.278 2.1 0 1.934 2.276 2.947 3.794 1.689.461-.382.826-1.134.83-1.71.003-.604-.519-1.556-1.045-1.907-.57-.38-1.752-.467-2.3-.172zm37.13-.023c-.756.332-1.404 1.322-1.398 2.135.004.546.378 1.303.829 1.677 1.518 1.258 3.794.245 3.794-1.689 0-1.338-.956-2.298-2.276-2.288-.322.003-.749.077-.95.165zm-35.525 1.53c.365.337.358.754-.017 1.123-.58.572-1.405.22-1.405-.598 0-.73.859-1.046 1.422-.525zm37.067-.062c.51.454.112 1.48-.574 1.48-.383 0-.908-.496-.908-.856 0-.66.978-1.073 1.482-.624zM7.989 39.65c-.2.197-.243.499-.117.822.042.106.576.606 1.187 1.111 7.146 5.905 16.938 7.084 25.178 3.031 1.993-.98 4.62-2.772 5.486-3.742.275-.308.271-.722-.01-.972-.408-.364-.765-.23-1.906.71-3.764 3.103-8.137 4.766-12.972 4.933-5.539.192-10.605-1.546-14.873-5.1-1.219-1.016-1.594-1.166-1.973-.793z"
                  fill="#E42320"/>
        </svg>
        <svg viewBox="0 0 40 40" id="skype" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#qclip0_126_254)">
                <path d="M38.59 23.341a19.24 19.24 0 00.315-3.434c0-2.556-.5-5.038-1.485-7.37a18.855 18.855 0 00-4.05-6.02 18.788 18.788 0 00-6.007-4.056 18.725 18.725 0 00-7.35-1.488c-1.2 0-2.406.115-3.576.34A11.234 11.234 0 0011.181 0a11.1 11.1 0 00-7.906 3.284A11.144 11.144 0 000 11.209c0 1.905.49 3.78 1.405 5.435a19.26 19.26 0 00-.285 3.263c0 2.557.5 5.038 1.485 7.37a18.842 18.842 0 004.046 6.02 18.79 18.79 0 006.006 4.056c2.33.988 4.8 1.489 7.35 1.489 1.11 0 2.22-.1 3.31-.296A11.167 11.167 0 0028.82 40a11.08 11.08 0 007.906-3.284A11.135 11.135 0 0040 28.791a11.173 11.173 0 00-1.41-5.45zm-18.503 8.167c-6.71 0-9.71-3.309-9.71-5.785 0-1.274.934-2.161 2.225-2.161 2.87 0 2.13 4.136 7.485 4.136 2.746 0 4.261-1.494 4.261-3.023 0-.918-.45-1.94-2.26-2.387l-5.971-1.493c-4.806-1.209-5.68-3.815-5.68-6.262 0-5.083 4.775-6.993 9.26-6.993 4.131 0 9.002 2.29 9.002 5.339 0 1.308-1.13 2.065-2.42 2.065-2.451 0-2.001-3.399-6.937-3.399-2.45 0-3.805 1.113-3.805 2.702 0 1.59 1.935 2.096 3.615 2.482l4.42.983c4.841 1.082 6.067 3.915 6.067 6.582 0 4.126-3.166 7.214-9.552 7.214z"/>
            </g>
            <defs>
                <clipPath id="qclip0_126_254">
                    <path d="M0 0h40v40H0z"/>
                </clipPath>
            </defs>
        </svg>
        <svg fill="none" viewBox="0 0 41 31" id="success" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M25.526 10.693L17.57 20.886l.647.81.646.808 7.91-10.131c4.35-5.572 7.908-10.228 7.908-10.347 0-.207-.974-1.526-1.127-1.526-.04 0-3.653 4.587-8.028 10.193zm3.6 3.168L18.698 27.224l-5.64-7.222-5.638-7.223-.632.829-.63.828 6.27 8.032 6.27 8.033 11.106-14.228L40.909 2.045l-.589-.773C39.996.848 39.692.5 39.644.5c-.048 0-4.781 6.013-10.517 13.361zM.594 13.556L0 14.332l6.23 7.98 6.23 7.98.6-.768.598-.767-6.236-7.99-6.237-7.99-.592.778z"
                  fill="#E42320"/>
        </svg>
        <svg viewBox="0 0 40 40" id="telegram" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#sclip0_126_258)">
                <path d="M20 0C8.951 0 0 8.952 0 20s8.952 20 20 20c11.049 0 20-8.952 20-20S31.048 0 20 0zm9.823 13.702L26.541 29.17c-.243 1.097-.896 1.363-1.807.847l-5-3.685-2.411 2.322c-.266.266-.492.492-1.008.492l.355-5.09 9.265-8.37c.404-.356-.088-.557-.621-.202l-11.452 7.209-4.936-1.54c-1.072-.339-1.096-1.073.226-1.59l19.283-7.435c.895-.323 1.677.218 1.387 1.573h.001z"/>
            </g>
            <defs>
                <clipPath id="sclip0_126_258">
                    <path d="M0 0h40v40H0z"/>
                </clipPath>
            </defs>
        </svg>
        <svg viewBox="0 0 25 15" id="up" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.971 14.8L12.4 6.05 3.828 14.8.4 13.05 12.4.8l12 12.25-3.429 1.75z"/>
        </svg>
        <svg viewBox="0 0 23 24" id="vk" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.03.339H7.97C1.527.339 0 1.899 0 8.476v7.209c0 6.578 1.527 8.138 7.97 8.138h7.06c6.443 0 7.97-1.56 7.97-8.138V8.476C23 1.898 21.458.34 15.03.34zm3.538 16.752h-1.67c-.633 0-.827-.512-1.965-1.69-.988-.978-1.426-1.107-1.67-1.107-.344 0-.442.099-.442.58v1.541c0 .413-.127.661-1.198.661-1.77 0-3.736-1.093-5.113-3.13-2.078-2.986-2.647-5.222-2.647-5.684 0-.249.097-.481.565-.481h1.673c.424 0 .585.199.75.66.826 2.44 2.204 4.576 2.773 4.576.21 0 .307-.1.307-.646V9.852c-.064-1.161-.663-1.261-.663-1.674 0-.198.161-.397.419-.397h2.631c.356 0 .487.199.487.626v3.398c0 .367.16.497.258.497.21 0 .39-.13.778-.528 1.202-1.376 2.063-3.497 2.063-3.497.112-.249.307-.482.73-.482h1.673c.502 0 .614.264.502.63-.21.994-2.257 3.945-2.257 3.945-.177.298-.244.428 0 .76.18.25.764.765 1.152 1.227.715.83 1.265 1.525 1.412 2.007.165.477-.078.726-.55.726h.002z"/>
        </svg>
        <svg viewBox="0 0 40 40" id="whatsapp" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#vclip0_126_256)">
                <path d="M.008 40l2.704-9.936A19.908 19.908 0 010 20C0 8.954 8.954 0 20 0s20 8.954 20 20-8.954 20-20 20a19.908 19.908 0 01-10.06-2.71L.008 40zm12.774-29.384c-.258.016-.51.084-.742.2a2.587 2.587 0 00-.588.456c-.24.226-.376.422-.522.612A5.458 5.458 0 009.8 15.24c.004.98.26 1.934.66 2.826.818 1.804 2.164 3.714 3.942 5.484.428.426.846.854 1.296 1.252a18.896 18.896 0 007.68 4.092l1.138.174c.37.02.74-.008 1.112-.026a3.98 3.98 0 001.666-.462c.262-.135.517-.282.766-.44 0 0 .086-.056.25-.18.27-.2.436-.342.66-.576.166-.172.31-.374.42-.604.156-.326.312-.948.376-1.466.048-.396.034-.612.028-.746-.008-.214-.186-.436-.38-.53l-1.164-.522s-1.74-.758-2.802-1.242a.996.996 0 00-.354-.082.962.962 0 00-.756.254v-.004c-.01 0-.144.114-1.59 1.866a.7.7 0 01-.736.26 2.836 2.836 0 01-.382-.132c-.248-.104-.334-.144-.504-.218l-.01-.004a12.02 12.02 0 01-3.14-2c-.252-.22-.486-.46-.726-.692a12.596 12.596 0 01-2.04-2.536l-.118-.19a1.848 1.848 0 01-.204-.41c-.076-.294.122-.53.122-.53s.486-.532.712-.82c.188-.24.364-.488.526-.746.236-.38.31-.77.186-1.072-.56-1.368-1.14-2.73-1.736-4.082-.118-.268-.468-.46-.786-.498a8.877 8.877 0 00-.324-.032 6.773 6.773 0 00-.806.008v.002z"/>
            </g>
            <defs>
                <clipPath id="vclip0_126_256">
                    <path d="M0 0h40v40H0z"/>
                </clipPath>
            </defs>
        </svg>
        <svg viewBox="0 0 32 24" id="youtube" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.332 4.007a4.249 4.249 0 00-1.036-1.878 3.973 3.973 0 00-1.792-1.087C26.007.339 16 .339 16 .339s-10.007 0-12.504.7a3.967 3.967 0 00-1.793 1.085 4.243 4.243 0 00-1.035 1.88C0 6.62 0 12.08 0 12.08s0 5.46.668 8.073c.368 1.444 1.453 2.58 2.828 2.965 2.497.704 12.504.704 12.504.704s10.007 0 12.504-.704c1.378-.385 2.46-1.521 2.828-2.965C32 17.54 32 12.081 32 12.081s0-5.46-.668-8.074zm-18.51 13.085V7.07l8.285 4.973-8.286 5.049z"/>
        </svg>
        <svg fill="none" viewBox="0 0 48 48" id="zoom" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#xclip0_34_167)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M28.553.132C22.834.83 17.703 4.476 15.21 9.618c-2.671 5.506-2.29 12.04.998 17.094.296.455.617.913.714 1.018.175.19.162.206-1.262 1.622l-1.439 1.43-.279-.292c-.874-.917-2.265-1.002-3.187-.194-.518.454-.76 1.607-.497 2.36l.148.422-4.978 4.975C-.14 43.616-.008 43.455.002 44.672c.005.604.05.79.315 1.306.374.727 1.113 1.483 1.753 1.793.378.183.62.228 1.225.229 1.264.002 1.49-.15 4.17-2.803 2.142-2.119 2.287-2.283 2.286-2.6 0-.412-.262-.679-.666-.679-.248 0-.583.293-2.473 2.164-1.202 1.19-2.322 2.233-2.488 2.316-.413.207-1.178.194-1.617-.03-.7-.355-1.16-1.403-.956-2.175.1-.371.602-.904 4.978-5.272l4.869-4.86 1.32 1.316 1.32 1.315-1.72 1.714c-1.521 1.518-1.719 1.75-1.719 2.019 0 .393.286.68.678.68.263 0 .516-.213 2.05-1.726l1.749-1.725.377.174c1.671.77 3.522-1.086 2.785-2.794a2.907 2.907 0 00-.53-.789c-.177-.172-.323-.348-.323-.391 0-.06 1.52-1.58 2.78-2.78.02-.02.429.227.909.547 2.062 1.375 4.344 2.25 7.008 2.688 1.442.237 3.918.213 5.467-.053 3.793-.651 6.949-2.272 9.537-4.899.98-.993 1.372-1.473 2.141-2.616 1.395-2.073 2.466-5.03 2.743-7.576.059-.541.046-.6-.177-.822-.297-.296-.66-.306-.942-.026-.166.165-.24.405-.331 1.057-.644 4.627-3.364 8.85-7.276 11.294-4.505 2.815-10.498 3.167-15.339.902-4.656-2.179-7.837-6.318-8.796-11.447-.291-1.56-.294-4.108-.005-5.688a15.855 15.855 0 019.754-11.929c2.821-1.128 6.298-1.398 9.35-.726 6.448 1.419 11.45 6.857 12.304 13.376.127.97.312 1.258.807 1.258.221 0 .362-.07.508-.255.176-.223.194-.33.141-.822-.246-2.26-1.087-4.778-2.261-6.765C42.152 2.555 35.506-.715 28.553.132zM27.517 3.41c-2.718.633-5.01 1.9-6.972 3.854-4.934 4.914-5.646 12.53-1.712 18.304 1.183 1.735 3.212 3.54 5.055 4.497 2.416 1.253 4.533 1.717 7.399 1.623 2.885-.095 5.223-.83 7.54-2.37 4.278-2.846 6.774-8.063 6.271-13.108-.36-3.61-1.741-6.526-4.284-9.045-1.92-1.903-4.324-3.192-7.077-3.797-1.569-.345-2.152-.216-2.152.473 0 .464.268.637 1.217.79 4.828.778 8.82 4.189 10.3 8.802.853 2.654.853 5.366 0 8.05-.319 1.004-1.259 2.81-1.908 3.668-.772 1.018-2.186 2.368-3.138 2.994a14.036 14.036 0 01-4.67 1.945c-.608.133-1.195.17-2.665.17-2.012 0-2.355-.045-3.958-.53-4.193-1.268-7.444-4.667-8.56-8.95-1.956-7.506 2.842-14.923 10.445-16.147.697-.112.886-.18 1.06-.379.264-.3.268-.511.017-.829-.172-.217-.26-.246-.73-.24-.295.003-.96.105-1.478.225zm-4.151 6.663l-.232.23v7.122c0 7.037.002 7.124.192 7.327l.192.205h7.207c7.08 0 7.21-.003 7.395-.187.185-.185.188-.313.188-7.327v-7.14l-.231-.23-.231-.23H23.597l-.231.23zm4.952 2.684c0 2.091-.15 1.968 2.386 1.968 1.804 0 1.94-.012 2.172-.195l.249-.194V11.25h3.77V23.55H24.547V11.251h3.77v1.507zm3.393-.473v1.032h-1.98v-2.065h1.98v1.033zm.361 5.694l-1.947 1.94-.572-1.138c-.564-1.12-.746-1.333-1.139-1.333-.27 0-.662.409-.662.69 0 .279 1.423 3.168 1.693 3.437a.75.75 0 00.497.191c.272 0 .556-.251 2.686-2.372 2.073-2.065 2.382-2.41 2.382-2.66 0-.363-.34-.694-.714-.694-.234 0-.574.296-2.224 1.94zM18.59 29.583l.49.495-1.39 1.384-1.392 1.383-.514-.518-.514-.518 1.363-1.36c.75-.749 1.386-1.361 1.415-1.361.028 0 .272.223.542.495zm-3.706 3.82l2.152 2.152-.058.357c-.069.428-.353.686-.755.686-.257 0-.564-.269-2.487-2.185-1.932-1.924-2.193-2.22-2.193-2.48a1.6 1.6 0 01.06-.454c.094-.24.585-.415.881-.312.136.047 1.216 1.054 2.4 2.237z"
                      fill="#E42320"/>
            </g>
            <defs>
                <clipPath id="xclip0_34_167">
                    <path fill="#fff" d="M0 0h48v48H0z"/>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>
</body>
</html>
