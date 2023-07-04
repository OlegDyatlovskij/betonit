    <footer class="footer" id="footer"
            style="background-image: url(/img/footer-bg.jpg); background-position: center;background-size: cover;">
        <div class="footer__wrapper footer__wrapper--max-width footer__wrapper--container">
            <a class="footer__logo" href="#">
                <div class="footer__logo-picture Picture">
                    <picture class="Picture__block-img">
                        <source class="Picture__img" srcset="img/logo-2.webp" alt="logo-2.png" type="image/webp"/>
                        <img class="Picture__img" src="img/logo-2.png" alt="logo-2.png"/>
                    </picture>
                </div>

            </a>
            <div class="footer__social-networks Social-networks">
                <div class="Social-networks__wrapper">
                    <ul class="Social-networks__list">
                        <li class="Social-networks__item">
                            <a class="Social-networks__link" href="#" target="_blank">
					<span class="Social-networks__link-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#skype"></use>
		</svg>
	</div>
</span>

                            </a>
                        </li>
                        <li class="Social-networks__item">
                            <a class="Social-networks__link" href="#" target="_blank">
					<span class="Social-networks__link-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#whatsapp"></use>
		</svg>
	</div>
</span>

                            </a>
                        </li>
                        <li class="Social-networks__item">
                            <a class="Social-networks__link" href="#" target="_blank">
					<span class="Social-networks__link-icon Icon Icon--l Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#telegram"></use>
		</svg>
	</div>
</span>

                            </a>
                        </li>
                    </ul>
                    <h3 class="Social-networks__title">{{$informationRecords[0]['company']}}<br> ИНН <a href="{{$informationRecords[0]['INN']}}">{{$informationRecords[0]['INN']}}</a></h3>
                </div>
            </div>

            <div class="footer__feedback Feedback">
                <div class="Feedback__wrapper">
                    <h3 class="Feedback__title">Контакты</h3>
                    <div class="Feedback__block-number">
			<span class="Feedback__block-number-icon Icon Icon--s Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#phone"></use>
		</svg>
	</div>
</span>

                        <div class="Feedback__number">
                            <a class="Feedback__number-link Link Link--l Link--color-e " target="_blank"
                               href="tel:{{$informationRecords[0]['phone']}}">{{$informationRecords[0]['phone']}}</a>

                        </div>
                    </div>
                    <div class="Feedback__block-address">
			<span class="Feedback__block-address-icon Icon Icon--s Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#location"></use>
		</svg>
	</div>
</span>

                        <h3 class="Feedback__address-title">{{$informationRecords[0]['address']}}</h3>
                    </div>
                    <div class="Feedback__block-mail">
			<span class="Feedback__block-mail-icon Icon Icon--s Icon--color-e ">
	<div class="Icon__content">
		<svg class="Icon__svg">
			<use class="Icon__svg-use" xlink:href="#mail"></use>
		</svg>
	</div>
</span>

                        <div class="Feedback__mail">
                            <a class="Feedback__mail-link Link Link--s Link--color-e " target="_blank"
                               href="{{$informationRecords[0]['email']}}">{{$informationRecords[0]['email']}}</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <div class="popup-write-us _bs" id="popup-write-us" style="display: none">
        <div class="popup-write-us__wrapper">
            <div class="popup-write-us__heading">
                <div class="popup-write-us__title">
                    <h3 class="popup-write-us__title-text">Оставьте свои контакты</h3>
                    <h4 class="popup-write-us__subtitle">и мы скоро свяжемся с Вами</h4>
                </div>
            </div>

            <div class="popup-write-us__block-input-form">
                @php
                    $main = true;
                    $tableName = 'users';
                @endphp
                <form method="POST" class="popup-write-us__form js-form-validation" action="{{ route('user.create', ['table' => $tableName, 'main' => $main]) }}" novalidate="novalidate">
                    @csrf
                    @method('POST')
                    <div class="popup-write-us__block-inputs">
                        <div class="Input input">
                            <input class="Input__inp" type="text" name="name" placeholder="ФИО" required=""/>
                            <span class="input-validation__message input-validation__message-mod"></span>
                        </div>
                        <div class="Input input">
                            <input class="Input__inp mask-phone-js" type="tel" name="phone" placeholder="Телефон"
                                   required=""/>
                            <span class="input-validation__message input-validation__message-mod"></span>
                        </div>
                        <div class="Input input">
                            <input class="Input__inp" type="email" name="email" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="Action-button">
                        <label class="Action-button__wrapper">
                            <input type="checkbox" name="checkbox" required=""/>
                            <span class="Action-button__content">
							<span class="Action-button__text Action-button__text--policy"> Вы принимаете условия <a
                                    href="privacy-policy"
                                    target="_blank">пользовательского соглашения и политики конфиденциальности</a> </span>
						</span>
                            <span class="input-validation__message input-validation__message-mod"></span>
                        </label>
                    </div>
                    <div class="popup-write-us__btns">
                        <button class="Button Button--full Button--color-a" type="submit">
                            <span class="Button__text">Отправить</span>
                        </button>
                        <span class="popup-write-us__status" style='display: none;'>

					</span>
                    </div>
                </form>
            </div>
        </div>
    </div>