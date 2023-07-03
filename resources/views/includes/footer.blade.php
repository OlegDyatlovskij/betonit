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