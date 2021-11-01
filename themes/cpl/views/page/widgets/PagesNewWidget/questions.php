 <?php if($pages) : ?>
    <h2 class="heading heading-mb"><?= $pages->title; ?></h2>
    <div class="panel panel-default">
        <?php foreach ($pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']) as $key => $data) : ?>
            <div class="panel__item fl fl-w fl-jc-sb">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#page<?= $data->id; ?>" >
                        <?= $data->title; ?>
                    </a>
                </div>
                <div class="panel-content">
                    <div id="page<?= $data->id; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?= $data->body; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>