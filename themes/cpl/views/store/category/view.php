<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
// Yii::app()->getClientScript()->registerCssFile( $mainAssets . '/css/store-frontend.css' );
// Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/store.js' );
Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/index.js', CClientScript::POS_END);
/* @var $category StoreCategory */

$this->title = $category->getMetaTitle();
$this->description = $category->getMetaDescription();
$this->keywords = $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [ Yii::t( "StoreModule.store", "Products" ) => [ '/store/product/index' ] ];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs( false )
);

?>
<!-- Конкретная категория -->
<div class="store-container category pb">
    <div class="content-site">
        <div class="breadcrumbs">
            <div class="row">
                <div class="col-xs-12">
                    <?php $this->widget(
                        'bootstrap.widgets.TbBreadcrumbs',
                        [
                          'links' => $this->breadcrumbs,
                        ]
                    );?>
                </div>
            </div>
        </div>

        <?php $child = $category->children(); ?>

        <?php $images = $category->photos; ?>
        <?php if($images) : ?>
            <div class="category-gallery">
                <div class="catalog-carousel category-slider slick-slider">
                    <?php foreach ($images as $key => $image) : ?>
                        <div class="catalog-carousel__item">
                            <a data-fancybox="image" href="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>">
                                <picture class="absolute-img-picture">
                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>">
                    
                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(363, 276, true, null,'image'); ?>" type="image/webp">
                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(363, 276, true, null,'image'); ?>">
                    
                                    <img src="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                                </picture>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!empty($child)) : ?>
            <div class="category-nav fl fl-w fl-jc-sb pb">
                <div class="category__title">
                    <h1 class="heading heading-pb"><?= $category->getTitle(); ?></h1>
                    <?= $category->short_description; ?>
                </div>
                <div class="category__child">
                    <div class="product-list fl fl-w fl-d-c">
                        <?php $this->widget('application.modules.store.widgets.CatalogWidget', [
                            'view' => 'category',
                            'category_id' => $category->id,
                        ]); ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <h1 class="heading heading-block"><?= $category->getTitle(); ?></h1>
            <?php if($dataProvider->itemCount) : ?>
                <div class="product-block fl fl-w">
                    <?php $this->widget(
                        'bootstrap.widgets.TbListView',
                        [
                            'dataProvider' => $dataProvider,
                            'id' => 'product-box',
                            'itemView' => '//store/product/_item',
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
                            'itemsCssClass' => 'product-type-box',
                            // 'summaryText'=>"Товаров на странице: <span>{start} - {end} из {count}</span>",
                            'htmlOptions' => [
                              'class' => 'product-type fl-jc-sb'
                            ],
                            'viewData' => [
                                'isButton' => true
                            ],
                            'emptyText'=>'Данная категория пуста',
                            // 'summaryText'=>"Товары <span>{start} - {end} из {count}</span>",
                            'template'=>'
                                {items}
                                {pager}
                            ',
                            'ajaxUpdate'=>true,
                            'enableHistory' => false,
                            /*
                            'sortableAttributes' => [
                                'name',
                                'price',
                            ],*/
                        ]
                    ); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (!empty($category->description)): ?>
            <div class="category-info fl fl-w fl-jc-sb">
                <div class="category-info__item">
                    <div class=" category-info__title"><?= $category->description; ?></div>
                </div>
                <?php if ($category->image): ?>
                    <div class="category-info__item hidden-sm hidden-xs">
                        <div class="category-info-bigImg category-info__img">
                            <picture class="absolute-img-picture">
                                <source media="(min-width: 401px)" srcset="<?= $category->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 401px)" srcset="<?= $category->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                <source media="(min-width: 1px)" srcset="<?= $category->getImageUrlWebp(400, 530, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $category->getImageNewUrl(400, 530, true, null,'image'); ?>">

                                <img src="<?= $category->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                            </picture>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($category->icon): ?>
                <div class="category-info hidden-sm hidden-xs fl fl-w fl-ai-fe fl-jc-sb">
                    <div class="category-info__item">
                        <div class="category-info-smallImg category-info__img">
                            <picture class="absolute-img-picture">
                                <source media="(min-width: 401px)" srcset="<?= $category->getImageUrlWebp(0, 0, true, null,'icon'); ?>" type="image/webp">
                                <source media="(min-width: 401px)" srcset="<?= $category->getImageNewUrl(0, 0, true, null,'icon'); ?>">
                            
                                <source media="(min-width: 1px)" srcset="<?= $category->getImageUrlWebp(400, 530, true, null,'icon'); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $category->getImageNewUrl(400, 530, true, null,'icon'); ?>">
                            
                                <img src="<?= $category->getImageNewUrl(0, 0, true, null,'icon'); ?>" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="category-info__item">
                        <div class="category-info-styleImg category-info__img">
                            <img src="/uploads/store/category/style-img.jpg" class="absolute-img">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
        'id'=> 14,
        'view' => 'project'
    ]); ?>
</div>



