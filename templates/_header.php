<div class="visually-hidden-focusable p-3 border-bottom">
  <a class="btn btn-sm btn-secondary" href="#main-column">
    <?php echo __('Skip to main content'); ?>
  </a>
</div>
    
<?php echo get_component('default', 'privacyMessage'); ?>

<!-- <?php echo get_component('default', 'updateCheck'); ?> -->

<?php if ($sf_user->isAdministrator() && '' === (string) QubitSetting::getByName('siteBaseUrl')) { ?>
  <div class="alert alert-warning rounded-0 text-center mb-0" role="alert">
    <?php echo link_to(__('Please configure your site base URL'), 'settings/siteInformation', ['class' => 'alert-link']); ?>
  </div>
<?php } ?>

<header>
  <div id="top-bar" class="navbar navbar-expand-lg navbar-dark" style="background-color: #882c24" role="navigation" aria-label="<?php echo __('Main navigation'); ?>">
    <div class="container-fluid">
      <?php if (sfConfig::get('app_toggleLogo') || sfConfig::get('app_toggleTitle')) { ?>
        <a class="navbar-brand d-flex flex-wrap flex-lg-nowrap align-items-center py-0 me-0" href="<?php echo url_for('@homepage'); ?>" title="<?php echo __('Home'); ?>" rel="home">
          <?php if (sfConfig::get('app_toggleTitle') && !empty(sfConfig::get('app_siteTitle'))) { ?>
            <span class="text-wrap my-1 me-3"><?php echo esc_specialchars(sfConfig::get('app_siteTitle')); ?></span>
          <?php } ?>
        </a>
      <?php } ?>
      <button class="navbar-toggler atom-btn-secondary my-2 me-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
        <span class="visually-hidden"><?php echo __('Toggle navigation'); ?></span>
      </button>
      
      <div class="collapse navbar-collapse flex-wrap justify-content-end me-1" id="navbar-content">
        <div class="d-flex flex-wrap flex-lg-nowrap flex-grow-1" >

          <div class="ms-2 me-3">
            <?php echo link_to(image_tag('/plugins/arArchivesRedisapPlugin/images/custom/unicamp-logo-white-cut', ['alt' => __('Unicamp logo'), 'class' => 'd-inline-block my-2', 'height' => '35']), 'https://unicamp.br'); ?>
          </div>
          
          <?php echo get_component('menu', 'browseMenu', ['sf_cache_key' => 'dominion-b5'.$sf_user->getCulture().$sf_user->getUserID()]); ?>
          
        </div>

        <div class="d-flex flex-nowrap flex-column flex-lg-row align-items-strech align-items-lg-center">
          <ul class="navbar-nav mx-lg-2">
            <?php echo get_component('menu', 'mainMenu', ['sf_cache_key' => 'dominion-b5'.$sf_user->getCulture().$sf_user->getUserID()]); ?>
            <?php echo get_component('menu', 'clipboardMenu'); ?>
            <?php if (sfConfig::get('app_toggleLanguageMenu')) { ?>
              <?php echo get_component('menu', 'changeLanguageMenu'); ?>
            <?php } ?>
            <?php echo get_component('menu', 'quickLinksMenu'); ?>

            <li class="nav-item dropdown d-flex flex-column">
              <a id="darkModeToggle" class="nav-link dropdown-toggle d-flex align-items-center p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i id="darkModeIcon" class="fas fa-2x fa-fw bi bi-circle-half px-0 px-lg-2 py-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="d-none d-lg-block" title="" aria-hidden="true" data-bs-original-title="Aparência">
                </i>
                <span class="d-lg-none mx-1" aria-hidden="true">
                  Aparência    </span>
                <span class="visually-hidden">
                  Aparência    </span>
              </a>

              <ul class="dropdown-menu dropdown-menu-end mb-2" aria-labelledby="darkModeToggle">
                <li>
                  <h6 class="dropdown-header"> Aparência </h6>
                </li>
                <li id="light_mode">
                  <a class="dropdown-item" href="#" title="Modo Claro"  data-mode="light">
                    <i class="bi bi-brightness-high-fill"></i> Claro
                  </a>       
                </li>
                <li id="dark_mode">
                  <a class="dropdown-item" href="#" title="Modo Escuro" data-mode="dark">
                    <i class="bi bi-moon-stars-fill"></i> Escuro
                  </a>
                </li>
                <li  id="auto_mode">
                  <a class="dropdown-item" href="#" title="Modo Automático" data-mode="system">
                    <i class="bi bi-circle-half"></i> Auto
                  </a>
                </li>
              </ul>
            </li>

          </ul>
          <?php echo get_component('menu', 'userMenu'); ?>
        </div>
      </div>
    </div>
  </div>

  
  <div class="d-flex justify-content-center align-items-center flex-column" style="height: 300px; background-color: #f0ecec; width:100%;">
    <!-- TODO: Adicionar traducao -->
    <div class="w-100 d-none d-xl-block" style="background-color:rgb(190, 148, 144);">
      <div id="second-menu" class="container-xxl pt-4 flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="container row mx-auto text-white">
          <div class="col-4 text-start">
            <a class="text-white" title="Voltar à página inicial" href="/">INÍCIO</a>
          </div>
          <div class="col-4 text-center">
            <a class="text-white" title="Como pesquisar" href="http://docs.accesstomemory.org/">AJUDA</a>
          </div>
          <div class="col-4 text-end">
            <a class="text-white" title="Sobre o ReDiSAP" href="/about">SOBRE</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="p-4 d-flex justify-content-center align-items-center flex-column" style="width:80%; height: 300px;">

      <div id="logo"  class="d-flex justify-content-center align-items-center" style="float: left; height: 100px; width: 100%;">
        <?php if (sfConfig::get('app_toggleLogo')) { ?>
          <h1><?php echo link_to(image_tag('/plugins/arArchivesRedisapPlugin/images/custom/redisap-logo.png', ['alt' => __('ReDiSAP logo'), 'class' => 'd-inline-block my-2', 'height' => '100']), '/', ['rel' => 'home']); ?></h1>
        <?php } ?>
      </div>
           
      <div id="description" class="text-center text-wrap d-flex justify-content-center align-items-center mt-3" style="width: 100%; max-width: 700px;">
        <h4 class="w-100 d-none d-md-block"><?php echo esc_specialchars(sfConfig::get('app_siteDescription')); ?></h4> 
        <h6 class="w-100 d-md-none"><?php echo esc_specialchars(sfConfig::get('app_siteDescription')); ?></h6> 
      </div>

      <div id="search" class="d-flex justify-content-center mt-3" style="width:100%;">
        <?php echo get_component('search', 'box'); ?>

      </div>
    </div>    
</div>

</header>
