<?php if($pages) : ?>
	<?php $childs = $pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>

    <div class="filter">
        <!-- <div class="filter-wrapper"> -->
            <?php foreach ($childs as $key => $data) : ?>
                <div class="filter__tab">
                    <a class="filter__tab-link" data-tab="tab" href="#page-adress-<?= $data->id; ?>" >
                        <div class="tab-item fl">
                            <?= $data->title; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <!-- </div> -->
    </div>

    <div class="tab-content filter-tab-content">
        <?php foreach ($childs as $key => $data) : ?>
            <div id="page-adress-<?= $data->id; ?>" class="history-tab-content history-tab-content">
                <div class="history-content__wrapper fl fl-w fl-jc-sb">
                    <div class="history-content__item fl fl-d-c fl-jc-sb">
                        <div class="history__text">
                            <div class="history__title year"><?= $data->title; ?> —</div>
                            <?= $data->body_short; ?>
                        </div>
                        <?php if($data->image) : ?>
                            <div class="history__image">
                                <img src="<?= $data->getImageUrl(102,124, false); ?>" href="<?= $data->getImageUrl(); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="history-content__item">
                        <?php $images = $data->photos; ?>
                        <?php if($images) : ?>
                            <div class="history-carousel_wrapper">
                                <div class="history-carousel">
                                    <?php foreach ($images as $key => $image): ?>
                                        <div class="history-carousel__item">
                                            <a class="data-fancybox-<?= $data->id; ?>"  data-fancybox="history" href="<?= $image->getImageUrl(); ?>">
                                                <picture class="absolute-img-picture">
                                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>">
                                                
                                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(350, 230, true, null,'image'); ?>" type="image/webp">
                                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(350, 230, true, null,'image'); ?>">
                                                
                                                    <img src="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $image->title; ?>">
                                                </picture>
                                            </a>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
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
        <?php endforeach; ?>
    </div>

    <?php Yii::app()->getClientScript()->registerScript("filter-content", "
        $('.filter .filter__tab').first().find('a').addClass('active');
        $('.filter .filter__tab').addClass('active');
        $('.filter-tab-content .history-tab-content').first().addClass('active');

        $(document).delegate('.filter a[data-tab=tab]', 'click', function (e) {
            e.preventDefault();
            if(!$(this).hasClass('active')){
                $('.filter .filter__tab a').removeClass('active');
                $('.filter .filter__tab').removeClass('active');
                $('.filter-tab-content .history-tab-content').removeClass('active');
                $(this).addClass('active');
                var id = $(this).attr('href');
                $(id).addClass('active');
                $('.history-carousel').slick('refresh');
            }
            return false;
        });
    "); ?>
<?php endif; ?>


