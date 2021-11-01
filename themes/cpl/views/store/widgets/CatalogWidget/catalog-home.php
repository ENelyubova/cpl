<?php if($category) : ?>
    <?php foreach ($category as $key => $data) : ?>
        <a href="<?= $data->getCategoryUrl(); ?>" class="catalog-panel__item fl fl-d-c fl-jc-sb fl-ai-c">
            <div class="catalog-panel__img fl fl-ai-c fl-jc-c">
                <?= $data->svg; ?>
            </div>
            <div class="catalog-panel__title">
                <?= $data->name; ?>
            </div>
            <span></span>
        </a>    
    <?php endforeach; ?>
<?php endif; ?>    