<footer class="footer">
    <div class="content-site">
        <div class="footer-bottom fl fl-ai-c fl-jc-sb">
            <div class="footer-info"> 
                 <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'legal-info']); ?>
                <?php endif; ?>
            </div>
            <div class="footer-legal">
                <ul>
                    <li>
                        <a href="#infoModal" data-toggle="modal">Правовая информация</a>
                    </li>
                    <li>
                        <a href="#denialModal" data-toggle="modal">Отказ от ответственности</a>
                    </li>
                </ul>
            </div>
            <div class="dc56">
                <p>Разработка сайта</p>
                <a href="https://dcmedia.ru/"></a>
            </div>
        </div>
    </div>
</footer>
