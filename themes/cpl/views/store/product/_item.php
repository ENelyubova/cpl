<div class="product-block__item product-item fl fl-w fl-ai-fs fl-jc-sb">
	<div class="product-item__name">
		<?= $data->name; ?>
	</div>
	<div class="product-item__image">
		<?= CHtml::image($data->getImageUrl(), '',['class' => 'absolute-im']); ?>
	</div>
	<div class="product-item__price">
		<span class="label-column">Цена упаковки:</span>
		<div class="price">
			<?php if ($data->discount_price) : ?>
                <div class="price-old price-base">
                	<?= (float)$data->getBasePrice() ?>
                	<i class="fa fa-rub" aria-hidden="true"></i>
                </div>
                <div class="price-new">
                    <?= (float)$data->getDiscountPrice() ?> 
                    <i class="fa fa-rub" aria-hidden="true"></i>
                </div>
            <?php else : ?>
                <div class="price-base">
                	<?= (float)$data->getBasePrice() ?> 
                	<i class="fa fa-rub" aria-hidden="true"></i>
            	</div>
            <?php endif; ?>
        </div>
	</div>
	<div class="product-item__cost">
		<span class="label-column">Стоимость заказа:</span>
		<div class="price-base">
        	<?= (float)$data->getCostPrice() ?> 
        	<span class="ruble"> <?= Yii::t("StoreModule.store", Yii::app()->getModule('store')->currency); ?></span>
    	</div>
	</div>
	<div class="product-item__order fl fl-jc-e">
		<a href="#"class="btn btn-blue btn-hover">
            Заказать
        </a>
	</div>
</div>

