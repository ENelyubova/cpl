<?php if($products): ?>
	<?php foreach($products as $data): ?>
		<?php $this->render('../../product/_item', ['data'=>$data, 'button'=>true]); ?>
	<?php endforeach; ?>
<?php endif; ?>

<!-- Заказать -->
<?php /*$this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
    'id' => 'productModal',
    'formClassName' => 'StandartForm',
    'buttonModal' => false,
    'titleModal' => 'Оставьте заявку',
    'subTitleModal' => 'и мы Вам перезвоним!',
    'showCloseButton' => false,
    'isRefresh' => true,
    'showAttributeEmail' => false,
    'showAttributeBody' => false,
    'eventCode' => 'ostavit-zayavku',
    'successKey' => 'ostavit-zayavku',
    'modalHtmlOptions' => [
        'class' => 'modal-my modal-my-xs',
    ],
    'formOptions' => [
        'htmlOptions' => [
            'class' => 'form-my',
        ]
    ],
    'modelAttributes' => [
        'theme' => "Заказа товара {$product->name}",
    ],
])*/ ?>
