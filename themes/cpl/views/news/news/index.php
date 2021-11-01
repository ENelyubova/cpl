<?php
$this->title = Yii::t('NewsModule.news', 'News');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'News')];
?>

<div class="page-news">
	<div class="content-site">
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', [
	            'links' => $this->breadcrumbs,
	    ]); ?>
		<h1 class="heading heading-page heading-pb">Новости</h1>
	</div>

	<div class="news-control">
		<div class="content-site">
			<form action="" method="get" class="news-control__main">
                <input type="hidden"
                       name="customYear"
                       value="<?php echo isset($_GET['customYear']) ? $_GET['customYear'] : ''; ?>">
                <input type="hidden"
                       name="customMounthly"
                       value="<?php echo isset($_GET['customMounthly']) ? $_GET['customMounthly'] : ''; ?>">
			
				<div class="news-control-wrap fl fl-w fl-ai-c">
					<div class="news-control__col">
		                <div class="dropdown js-dropdown">
		                    <div class="dropdown__head">
		                        <span class="dropdown__val">
		                            <?php
		                                if(isset($_GET['customYear']) && !empty($_GET['customYear'])){
		                                    echo $_GET['customYear'];
		                                } else {
		                                    echo ('Год публикации');
		                                }
		                            ?>
		                        </span>
		                        <span class="dropdown__icon">
		                            <?= file_get_contents('.'. Yii::app()->getTheme()->getAssetsUrl() .'/images/icon/down.svg'); ?>
		                        </span>
		                    </div>
		                    <div class="dropdown__body">
		                        <div class="dropdown__lists">
		                            <span class="dropdown__list">
		                                <span data-value="" data-input="customYear">
		                                    <?php echo ('За все время'); ?>
		                                </span>
		                            </span>
		                            <?php foreach (News::getYearLists() as $year): ?>
		                                <span class="dropdown__list">
		                                    <span data-value="<?php echo $year; ?>" data-input="customYear">
		                                        <?php echo $year; ?>
		                                    </span>
		                                </span>
		                            <?php endforeach; ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="news-control__col">
		                <div class="dropdown js-dropdown">
		                    <div class="dropdown__head">
		                        <span class="dropdown__val">
		                            <?php
		                                if(isset($_GET['customMounthly']) && !empty($_GET['customMounthly'])){
		                                    echo getMounthlyLists()[$_GET['customMounthly']];
		                                } else {
		                                    echo ('Месяц публикации');
		                                }
		                            ?>
		                        </span>
		                        <span class="dropdown__icon">
		                            <?= file_get_contents('.'. Yii::app()->getTheme()->getAssetsUrl() .'/images/icon/down.svg'); ?>
		                        </span>
		                    </div>
		                    <div class="dropdown__body">
		                        <div class="dropdown__lists">
		                             <span class="dropdown__list">
		                                <span data-value="" data-input="customMounthly">
		                                    <?php echo ('За все время'); ?>
		                                </span>
		                             </span>
		                            <?php foreach (News::getMounthlyLists() as $key => $mount): ?>
		                                <span class="dropdown__list">
		                                    <span data-value="<?php echo $key; ?>" data-input="customMounthly"><?php echo $mount; ?></span>
		                                </span>
		                            <?php endforeach; ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="news-control__col">
		                <div class="dropdown js-dropdown">
		                    <div class="dropdown__head">
		                        <span class="dropdown__val">
		                            <?php
		                                if(isset($_GET['customMounthly']) && !empty($_GET['customMounthly'])){
		                                    echo getMounthlyLists()[$_GET['customMounthly']];
		                                } else {
		                                    echo ('Все теги');
		                                }
		                            ?>
		                        </span>
		                        <span class="dropdown__icon">
		                            <?= file_get_contents('.'. Yii::app()->getTheme()->getAssetsUrl() .'/images/icon/down.svg'); ?>
		                        </span>
		                    </div>
		                    <div class="dropdown__body">
		                        <div class="dropdown__lists">
		                             <span class="dropdown__list">
		                                <span data-value="" data-input="customMounthly">
		                                    <?php echo ('За все время'); ?>
		                                </span>
		                             </span>
		                            <?php foreach (News::getMounthlyLists() as $key => $mount): ?>
		                                <span class="dropdown__list">
		                                    <span data-value="<?php echo $key; ?>" data-input="customMounthly"><?php echo $mount; ?></span>
		                                </span>
		                            <?php endforeach; ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
				</div>
	          	<input type="submit" value="Submit" class="hidden">
            </form>
		</div>
	</div>

	<div class="news-panel bg-body pb">
		<div class="content-site">
			<?php $this->widget('bootstrap.widgets.TbListView', [
				'id'=> 'news-box',
			    'dataProvider' => $dataProvider,
		        'itemView' => '_item',
		        'summaryText' => '',
		        'template'=>'{items} {pager}',
		        'itemsCssClass' => 'news-block',
			    'htmlOptions' => [
			        // "class" => ""
			    ],
			    'pagerCssClass' => 'pagination-box',
			    'pager' => [
			    	'header' => '',
			    	'nextPageLabel'=> false,
                    'prevPageLabel'=> false,
                    'lastPageLabel'=> false,
                    'firstPageLabel'=> false,
					'selectedPageCssClass' => 'active',
                    'hiddenPageCssClass' => 'disabled',
				    'htmlOptions' => [
				    	'class' => 'pagination pagination-panel'
				    ]
			    ]
			]); ?>
		</div>
	</div>
</div>

