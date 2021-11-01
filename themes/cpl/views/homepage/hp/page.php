 <?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->meta_description) ? $page->meta_description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->meta_keywords) ? $page->meta_keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<div class="main">
    <div class="content-wrapper">
        <div class="content-site">
            <div class="main-content fl fl-w">
                <div class="main__text fl fl-d-c fl-jc-sb">
                    <div class="main__text-info">
                        <div class="main__title"><?= $page->getAttributeValue('box1')['name']; ?></div>
                        <div class="main__description"><?= $page->getAttributeValue('box1')['value']; ?></div>
                        <a href="#" class="btn btn-blue">Заказать CPL</a>
                    </div>
                    <div class="scroll fl fl-ai-c">
                        Подробнее о продукте
                    </div>
                </div>
                <div class="main__img fl fl-ai-c">
                    <img src="<?= $this->mainAssets . '/images/1/cpl-2.png' ?>" alt="CPL">
                </div>
            </div>
        </div>
        <div class="main-right fl fl-ai-fe fl-jc-c">
            <div class="cpl-label">БАД. Не является лекарственным средством</div>
        </div>
    </div>
</div>

<div class="whatIs" id="whatis">
    <div class="content-site">
        <div class="fl fl-w fl-jc-sb">
            <div class="whatIs__content fl fl-d-c fl-jc-c pt pb">
                <div class="subheading">Что такое cpl</div>
                <h2 class="heading heading-mb"><?= $page->getAttributeValue('box2')['name']; ?></h2>
                <div class="whatIs__description"><?= $page->getAttributeValue('box2')['value']; ?></div>
                <a href="#" class="btn btn-blue" data-toggle="modal" data-target="#consultationModal" tabindex="0">Получить консультацию </a>
            </div>
            <div class="whatIs__img">
                <div class="whatIs__img-wrap">
                    <img src="<?= $this->mainAssets . '/images/2/cpl.jpg' ?>" alt="CPL">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="whatIs-right"></div> -->
</div>

<div class="country pt pb" id="country">
    <div class="content-site">
        <div class="country-content fl fl-w fl-jc-sb">
            <div class="country__text">
                <div class="subheading">Made in Japan</div>
                <h2 class="heading heading-mb"><?= $page->getAttributeValue('box3')['name']; ?></h2>
                <?= $page->getAttributeValue('box3')['value']; ?>
            </div> 
            <div class="country__jpn fl fl-ai-fs fl-jc-c">
                <span>環状ボリ乳酸</span>
                <span class="color-blue">ロシアに初上陸</span>
            </div>
        </div>
    </div>
</div>

<div class="properties pt pb" id="properties">
    <div class="content-site">
        <div class="subheading">Свойства CPL</div>
        <div class="properties-content fl fl-w fl-jc-sb">
            <div class="properties__text">
                <h2 class="heading heading-mb"><?= $page->getAttributeValue('box4')['name']; ?></h2>
                <?= $page->getAttributeValue('box4')['value']; ?>
                <a href="#" class="btn btn-blue" data-toggle="modal" data-target="#consultationModal" tabindex="0">Получить консультацию </a>
            </div>
            <div class="properties__items">
                <?= $page->getAttributeValue('properties')['value']; ?>
                <span class="reference properties-reference">Все эти свойства подтверждены Yuuko-Enterprise Corp.</span>
            </div>
        </div>
    </div>
</div>

<div class="infoCard">
    <div class="content-site">
        <div class="infoCard-content fl fl-w fl-ai-c fl-jc-sb">
            <div class="infoCard__text">
                <div class="infoCard__title">Закажите CPL прямо сейчас с бесплатной доставкой по России</div>
                <div class="cpl-label color-white">БАД. Не является лекарственным средством</div>
            </div>
            <div class="infoCard__image">
                <div class="infoCard__image-box">
                    <img src="<?= $this->mainAssets . '/images/infoCard2.png' ?>" alt="CPL скидка">
                </div>
            </div>
            <div class="infoCard__sale fl fl-w fl-ai-fe">
                <div class="infoCard-price price">
                    <div class="price-base price-old">
                        23 990
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                    <div class="price-new">
                        <span>от</span> 18 000
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
                <a href="#" class="btn btn-white">Заказать CPL </a>
            </div>
        </div>
    </div>
</div>

<div class="history" id="history">
    <div class="content-wrapper pt">
        <div class="content-site">
            <div class="subheading">1982 — 2021</div>
            <h2 class="heading heading-mb">История создания</h2>
            <div class="history-content fl fl-w fl-jc-sb">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id' => 11,
                    'view' => 'history'
                ]); ?> 
            </div>
        </div>
        <div class="history-right"></div>
    </div>
</div>

<div class="about pt" id="about">
    <div class="content-site">
        <div class="subheading">О CPL</div>
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id' => 2,
            'view' => 'about'
        ]); ?> 
    </div>
</div>

<div class="results" id="results">
    <div class="content-wrapper">
        <div class="results-left fl fl-ai-fe fl-jc-c"></div>
        <div class="content-site">
            <div class="results__content fl fl-w">
                <div class="results__title">
                    <h2 class="heading">Более <span class="big">95 </span><span>% <br>положительных <br>результатов</span></h2>
                </div>
                <div class="results__text">
                    <?= $page->getAttributeValue('box6')['value']; ?>
                    <div class="citation">Киотака Сато, DVM</div>
                </div>
            </div>
            <div class="results__image">
                <img src="<?= $this->mainAssets . '/images/result/cpl-2.png' ?>" alt="CPL">
            </div>
            <div class="cpl-label">БАД. Не является лекарственным средством</div>
        </div>
    </div>
</div>

<div class="reviews pt pb" id="reviews">
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id' => 5,
            'view' => 'reviews'
        ]); ?>
    </div>
</div>

<div class="product pt" id="product">
    <div class="content-site">
        <div class="heading-block">
            <h2 class="heading heading-mb">Стоимость препарата</h2>
        </div>
        <div class="product-block fl fl-w">
            <?php $this->widget('application.modules.store.widgets.ProductWidget', [
                'view' => 'product'
            ]); ?>
        </div>
        <span class="product-reference">Цена препарата указана с учетом доставки по всему Миру</span>
    </div>
</div>

<div class="questions pt pb" id="questions">
    <div class="content-site">
        <div class="subheading">Вопрос-ответ</div>
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id' => 8,
            'view' => 'questions'
        ]); ?>
        <div class="questions-bottom fl fl-w fl-ai-c">
            <div class="questions-bottom__item">
                <span class="reference">Не нашли ответа на свой вопрос? Напишите нам и мы с радостью ответим <br>Вам в ближайшее время</span>
            </div>
            <div class="questions-bottom__item">
                <a href="#" class="btn btn-blue btn-hover" data-toggle="modal" data-target="#questModal" tabindex="0">Задать вопрос специалисту</a>
            </div>
        </div>
    </div>
</div>

<div class="contacts" id="contacts">
    <div class="content-site">
        <div class="contacts-wrapper pt">
            <h2 class="heading heading-mb">Есть вопросы или нужна <br><span>консультация специалиста?</span></h2>
            <p>Свяжитесь с нами любым удобным для вас способом. Наш консультант свяжется с Вами и ответит на все Ваши вопросы.</p>
                
            <div class="contacts-block fl fl-w fl-jc-sb">
                <div class="contacts-block__item contacts-item">
                    <div class="contacts-item__link">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="contacts-item__label">
                        <p>Мы работаем каждый день</p>
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
                        <?php endif; ?>
                    </div>  
                </div>
                <div class="contacts-block__item contacts-item">
                    <div class="contacts-item__link">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="contacts-item__label">
                        <p>Доставляем грузовыми компаниями <br>в любую точку России</p>
                    </div> 
                </div>
                <div class="contacts-block__item contacts-item">
                    <div class="contacts-item__link social">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'social']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="contacts-item__label">
                        <p>Мы оперативно отвечаем <br>в мессенджерах</p>
                    </div> 
                </div>
            </div>
            <div class="contacts__btn fl fl-w fl-ai-c">
                <a href="#" class="btn btn-blue btn-hover" data-toggle="modal" data-target="#callbackModal" tabindex="0">Связаться с нами</a>
                <a href="#" class="btn btn-white">Заказать CPL</a>
            </div>
        </div>
    </div>
</div>

