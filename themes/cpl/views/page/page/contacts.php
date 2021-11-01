<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->meta_title ?: $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->meta_description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->meta_keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>

<div class="page-txt page-contacts pb">
    <div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
        <h1 class="heading heading-pb"><?= $model->title; ?></h1>
        <div class="page-contacts-body">
            <div class="contacts-panel">
                <div class="contacts-panel__item">
                    <div class="contacts-panel__title"><?= Yii::t("PageModule.page", "Telephones"); ?></div>
                    <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                    <?php endif; ?>
                </div>
                <div class="contacts-panel__item contacts-panel__email">
                    <div class="contacts-panel__title"><?= Yii::t("PageModule.page", "We are always in touch"); ?></div>
                    <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                    <?php endif; ?>
                </div>
                <div class="contacts-panel__item">
                    <div class="contacts-panel__title"><?= Yii::t("PageModule.page", "Store address"); ?></div>
                    <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'address']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="page-map" id="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A385cc27bb7de0fcb832adf5b8cef2b166afac1ee2a6335a18ea2c562199901ac&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
