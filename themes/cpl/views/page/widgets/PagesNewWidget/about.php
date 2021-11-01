<?php if($pages) : ?>
	<?php $childs = $pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>

    <div class="about-content fl fl-w fl-jc-sb">
        <div class="about__text about__item">
            <h2 class="heading heading-mb">КЛИНИЧЕСКИЕ <br>ИССЛЕДОВАНИЯ <span>CPL</span></h2>
            <div class="big-text"><?= $pages->body_short; ?></div>
        </div>
        <div class="about__description about__item">
            <p><?= $pages->getAttributeValue('box1')['name']; ?></p>
            <div class="big-text bold"><?= $pages->getAttributeValue('box1')['value']; ?></div>
        </div>
    </div>

    <div class="sertificate-nav fl fl-ai-c">
        <div class="arrows fl fl-ai-c"></div>
        <div class="counter sertificateCounter"></div>
    </div>
    <div class="about-content fl fl-w fl-jc-sb">
        <div class="about__sertificate about__item">
            <?php $images = $pages->photos; ?>
            <div class="sertificate-slider">
                <?php if($images) : ?>
                    <?php foreach ($images as $key => $image): ?>
                        <div class="sertificate-slider__item">
                            <a class="data-fancybox-<?= $data->id; ?>" data-fancybox="sertificate" href="<?= $image->getImageUrl(); ?>"> 
                                <img src="<?= $image->getImageUrl(277,400, false); ?>" href="<?= $image->getImageUrl(); ?>">
                            </a> 
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="about__body about__item">
            <?= $pages->getAttributeValue('box2')['value']; ?>
        </div>
    </div>
    <?php $fancybox = $this->widget(
            'gallery.extensions.fancybox3.AlFancybox', [
                'target' => ".data-fancybox-{$data->id}",
                'lang'   => 'ru',
                'config' => [
                    'animationEffect' => "fade",
                    'buttons' => [
                        "zoom",
                        "close",
                    ]
                ],
            ]
        ); ?>

    <div class="about-content impact pt">
        <div class="impact-header fl fl-ai-c fl-jc-sb">
            <h2 class="heading">Воздействие CPL <br>на пациентов</h2>
            <div class="impact-nav fl fl-ai-c">
                <div class="arrows fl fl-ai-c"></div>
                <div class="impactCounter counter"></div>
            </div>
        </div>
        
        <div class="impact-slider slick-slider">
            <?php foreach ($childs as $key => $data) : ?>
                <div class="impact__item">
                    <div class="impact__image">
                        <div class="impact__image-box">
                            <picture class="absolute-img-picture">
                                <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">
                            
                                <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(350, 230, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(350, 230, true, null,'image'); ?>">
                            
                                <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $data->title; ?>">
                            </picture>
                        </div>
                    </div>
                    <div class="impact__text">
                        <?= $data->body; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="impact-bottom fl fl-w fl-ai-c">
            <div class="about__item">
                <p>Свяжитесь с нами, если хотите получить больше информации о полезных свойствах CPL или получить консультацию по применению.</p>
            </div>
            <div class="about__item">
                <a href="#" class="btn btn-blue btn-hover" data-toggle="modal" data-target="#consultationModal" tabindex="0">Получить консультацию </a>
            </div>
        </div>
    </div>
<?php endif; ?>


