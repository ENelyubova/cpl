<?php if($pages) : ?>
	<?php $childs = $pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>

    <h2 class="heading heading-mb"><?= $pages->title; ?></h2>

    <div class="reviews-slider fl fl-w fl-ai-fs">
        <div class="reviews-nav fl fl-ai-c">
            <div class="arrows fl fl-ai-c"></div>
            <div class="counter reviewsCounter"></div>
        </div>
        <div class="reviews-carousel">
            <?php foreach ($childs as $key => $data) : ?>
                <div class="reviews-carousel__item reviews-item js-reviews-item fl fl-w fl-jc-sb">
                    <?php if ($data->image): ?>
                        <div class="reviews-item__img">
                            <picture class="absolute-img-picture">
                                <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">
            
                                <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(80, 80, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(80, 80, true, null,'image'); ?>">
            
                                <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $data->title; ?>">
                            </picture>
                        </div>
                    <?php else : ?>
                        <div class="reviews-item__img">
                            <?= CHtml::image(Yii::app()->getTheme()->getAssetsUrl() . '/images/nophoto.jpg','', ['class' => 'absolute-img absolute-img-contain']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="reviews-item__text">
                        <div class="reviews-item__header fl fl-ai-c">
                            <?php if ($data->image): ?>
                                <div class="reviews-item__avatar">
                                    <picture class="absolute-img-picture">
                                        <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                        <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">
                    
                                        <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(80, 80, true, null,'image'); ?>" type="image/webp">
                                        <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(80, 80, true, null,'image'); ?>">
                    
                                        <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $data->title; ?>">
                                    </picture>
                                </div>
                            <?php else : ?>
                                <div class="reviews-item__img">
                                    <?= CHtml::image(Yii::app()->getTheme()->getAssetsUrl() . '/images/nophoto.jpg','', ['class' => 'absolute-img absolute-img-contain']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="reviews-item__title"><?= $data->title; ?></div>
                        </div>
                        <div class="reviews-item__subtitle"><?= $data->body_short; ?></div>
                        <div class="reviews-item__description js-reviews-desc">
                            <div class="reviews-item__body js-reviews-text"><?= $data->body; ?></div>
                        </div>
                        <div class="reviews-item__more js-reviews-more" style="display: block;">
                            <a class="btn btn-link" href="#" tabindex="-1" data-toggle="modal" data-target="#">
                                Читать полностью
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


