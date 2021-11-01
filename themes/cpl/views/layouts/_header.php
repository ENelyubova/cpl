<header class="header <?= ($this->action->id=='index' && $this->id=='hp') ? '' : 'header-page'; ?>">
  <div class="content-wrapper">
    <div class="content-site">
      <div class="header-content fl fl-ai-fs fl-jc-sb">
        <div class="header-logo header-elem">
          <a href="/" class="logo logo-header fl fl-ai-c fl-jc-c">
            <img src="<?= $this->mainAssets . '/images/logo.svg' ?>" alt="CPL">
          </a>
        </div><!-- logo --> 
        <div class="callback fl fl-ai-c">
          <a href="#" class="btn btn-white" data-toggle="modal" data-target="#consultationModal" tabindex="0">Консультация</a>
          <a href="#" class="btn btn-blue btn-svg btn-svg-left btn-hover">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 24 32" fill="none">
            <path d="M7 9.5H2L1 30.5H23L22 9.5H17M7 9.5V13M7 9.5H17M7 9.5V6C7 3.23858 9.23858 1 12 1V1C14.7614 1 17 3.23858 17 6V9.5M17 9.5V13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Заказать CPL</span>
          </a>
        </div>
      </div>
    </div>
    
  </div>
</header>

<div class="mobile-panel">
  <button class="m-menu-button m-menu-open fl fl-ai-c fl-jc-c">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
  </button>
</div><!-- mobile-panel -->
<div class="mobile-menu">
  <div class="m-menu-button m-menu-close open">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
  </div>
  <div class="mobile-content">
    <?php if (Yii::app()->hasModule('menu')) : ?>
      <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
    <?php endif; ?>
  </div>
</div>
