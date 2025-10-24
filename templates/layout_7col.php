<?php echo get_partial('layout_start'); ?>

<div id="wrapper">

  <div class="container-xxl pt-5 flex-grow-1">
    <div id="carousel" class="container row mx-auto g-4">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100 img-fluid d-md-none" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_celular.png"
              alt=" ">
            <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_tablet.png"
              alt=" ">
            <img class="w-100 img-fluid d-none d-xl-block" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_desktop.png"
              alt=" ">
          </div>
          <div class="carousel-item">
            <img class="w-100 img-fluid d-md-none" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_celular.png"
              alt=" ">
            <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_tablet.png"
              alt=" ">
            <img class="w-100 img-fluid d-none d-xl-block" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_desktop.png"
              alt=" ">
          </div>
          <div class="carousel-item">
            <img class="w-100 img-fluid d-md-none" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_celular.png"
              alt=" ">
            <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_tablet.png"
              alt=" ">
            <img class="w-100 img-fluid d-none d-xl-block" src="/plugins/arArchivesRedisapPlugin/images/custom/banner_desktop.png"
              alt=" ">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
    </div>

    <div id="apresentacao" class="container row mx-auto g-4 my-3 my-xl-5">
      
      <div id="content-text" class="col-12 col-md-12 col-xxl-7">
        <?php echo get_partial('alerts'); ?>
        <div id="main-column" role="main">
          <div id="title" style="height: 55px;">
            <?php include_slot('title'); ?>
          </div>
          <div id="content-full">
            <?php include_slot('before-content'); ?>
            <?php if (!include_slot('content')) { ?>
              <div id="content-core">
                <?php echo $sf_content; ?>
              </div>
            <?php } ?>
            <?php include_slot('after-content'); ?>
          </div>
        </div>
      </div>

      <div id="content-video" class="col-12 col-md-12 col-xxl-5">
        <div id="presentation-video" class="d-flex justify-content-center align-items-center">
          
          <!-- <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/video.png" alt="Ícone"> -->

          <video controls="" autoplay="" name="media">
            <source src="http://10.0.10.100/plugins/arArchivesRedisapPlugin/images/custom/videoapresentacao.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.
          </video>
        </div>
      </div>
    </div>



    <div class="container row mx-auto g-4 my-3 my-xl-5">
      <!-- TODO: Adicionar traducao -->
      <div class="col-12 col-md-6 col-xxl-6">
        <div class="row">
          <div class="col-6">     
            <div class="card d-flex flex-column rounded-4" style="height: 400px;">
              <a class="entity-rectangle zoom rounded-4"  href="informationobject/browse?view=card&onlyMedia=1&topLod=0" style="background-color: #e8947c;"> 
                <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/entidade-objetos.png" alt="Ícone">
                <h5 class="card-title text-white" style="text-align: center;">Documentos digitais</h5>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="card d-flex flex-column rounded-4" style="height: 38%;">
              <a class="entity-rectangle zoom rounded-4" title="Encontre informações sobre os documentos preservados" href="/informationobject/browse" style="background-color: #a82c24;">  
                  <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/entidade-descricao.png" alt="Ícone">
                  <h5 class="card-title text-white" style="text-align: center;">Descrições arquivísticas</h5>
              </a>
            </div>
            <div style="height: 4%;"></div>
            <div class="card d-flex flex-column rounded-4" style="height: 58%;">
              <a class="entity-rectangle zoom rounded-4"  href="/taxonomy/index/id/35" style="background-color: #b8b4b4;"> 
                <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/entidade-assuntos.png" alt="Ícone">
                <h5 class="card-title text-white" style="text-align: center;">Assuntos</h5>
              </a>
            </div>
          </div>
        </div>
      </div>
        
      <div class="col-12 col-md-6 col-xxl-6">
        <div class="row">
          <div class="col-6">
            <div class="card d-flex flex-column rounded-4" style="height: 58%;">
              <a class="entity-rectangle zoom rounded-4"  href="/actor/browse" style="background-color: #a89c64;"> 
                <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/entidade-autoridades.png" alt="Ícone">
                <h5 class="card-title text-white" style="text-align: center;">Pessoas e instituições</h5>
              </a>
            </div>
            <div style="height: 4%;"></div>
            <div class="card d-flex flex-column rounded-4" style="height: 38%;">
              <a class="entity-rectangle zoom rounded-4"  href="/taxonomy/index/id/42" style="background-color: #e88434;"> 
                <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/entidade-locais.png" alt="Ícone">
                <h5 class="card-title text-white" style="text-align: center;">Locais</h5>
              </a>
            </div>
          </div>

          <div class="col-6">
            <div class="card d-flex flex-column rounded-4" style="height: 400px;">
              <a class="entity-rectangle zoom rounded-4"  href="/repository/browse" style="background-color: #e85444;"> 
                <img class="entity-icon" src="/plugins/arArchivesRedisapPlugin/images/custom/entidade-quemsomos.png" alt="Ícone">
                <h5  class="card-title text-white" style="text-align: center;">Entidades custodiadoras</h5>
              </a>
            </div>
          </div>
        </div>
      </div>
            
    </div>

    <h3 class="text-center my-3 my-xl-5">Arquivos e Centros de Documentação que integram o ReDiSAP</h3>
    <div class="container row mx-auto g-4 logos-archival" style="width: 70%;">
      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <a href="" class="d-flex justify-content-center align-items-center"> 
          <img src="/plugins/arArchivesRedisapPlugin/images/custom/instituicao-siarq.png" class="zoom" alt="" style="width: 40%;">
        </a>
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <a href="" class="d-flex justify-content-center align-items-center"> 
          <img src="/plugins/arArchivesRedisapPlugin/images/custom/instituicao-cle.png" class="zoom" alt="" style="width: 30%;">
        </a>
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <a href="" class="d-flex justify-content-center align-items-center"> 
          <img src="/plugins/arArchivesRedisapPlugin/images/custom/instituicao-cmu.png" class="zoom" alt="" style="width: 30%;">
        </a>
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <a href="" class="d-flex justify-content-center align-items-center"> 
          <img src="/plugins/arArchivesRedisapPlugin/images/custom/instituicao-ael.png" class="zoom" alt="" style="width: 40%;">
        </a>
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <a href="https://www.iel.unicamp.br/cedae-centro-de-documentacao-cultural" class="d-flex justify-content-center align-items-center"> 
          <img src="/plugins/arArchivesRedisapPlugin/images/custom/instituicao-cedae.png" class="zoom" alt="" style="width: 35%;">
        </a>
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <a href="" class="d-flex justify-content-center align-items-center"> 
          <img src="/plugins/arArchivesRedisapPlugin/images/custom/instituicao-cma.png" class="zoom" alt="" style="width: 35%;">
        </a>
      </div>

    </div>

  </div>

  <h3 class="text-center my-3 my-xl-5"></h3>
</div>

<?php echo get_partial('layout_end'); ?>





