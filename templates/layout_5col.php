<?php echo get_partial('layout_start'); ?>

<div id="wrapper">
  
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
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

  <div class="container-xxl pt-3 flex-grow-1">
    <div class="container row mx-auto g-4">
      
      <div class="col-12 col-md-12 col-xxl-7">
        <?php echo get_partial('alerts'); ?>
        <div id="main-column" role="main">
          <?php include_slot('title'); ?>
          <?php include_slot('before-content'); ?>
          <?php if (!include_slot('content')) { ?>
            <div id="content">
              <?php echo $sf_content; ?>
            </div>
          <?php } ?>
          <?php include_slot('after-content'); ?>
        </div>
      </div>

      <div class="col-12 col-md-12 col-xxl-5">
        <div class="card h-100 w-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
        </div>
      </div>
    </div>



    <div class="container row mx-auto g-4 my-3 my-xl-5">
      <div class="col-12 col-md-6 col-xxl-6">
        <div class="row">
          <div class="col-6">
            <div class="card d-flex flex-column" style="height: 100%;">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Objetos digitais</text>
              </svg>
              <div class="card-body d-flex justify-content-center align-items-center" height="40" style="flex-grow: 1; ">
                <h5 class="card-title">Objetos digitais</h5>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card d-flex flex-column" style="height: 38%;">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Descrições arquivísticas</text>
              </svg>
              <div class="card-body d-flex justify-content-center align-items-center" height="40" style="flex-grow: 1;">
                <h5 class="card-title">Descrições arquivísticas</h5>
              </div>
            </div>
            <div style="height: 4%;"></div>
            <div class="card d-flex flex-column" style="height: 58%;">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Assuntos</text>
              </svg>
              <div class="card-body d-flex justify-content-center align-items-center" height="40" style="flex-grow: 1;">
                <h5 class="card-title">Assuntos</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="col-12 col-md-6 col-xxl-6">
        <div class="row">
          <div class="col-6">
            <div class="card d-flex flex-column" style="height: 58%;">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Locais</text>
              </svg>
              <div class="card-body d-flex justify-content-center align-items-center" height="40" style="flex-grow: 1;">
                <h5 class="card-title">Locais</h5>
              </div>
            </div>
            <div style="height: 4%;"></div>
            <div class="card d-flex flex-column" style="height: 38%;">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Registros de autoridades</text>
              </svg>
              <div class="card-body d-flex justify-content-center align-items-center" height="40" style="flex-grow: 1;">
                <h5 class="card-title">Registros de autoridades</h5>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card d-flex flex-column" style="height: 100%;">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Quem somos</text>
              </svg>
              <div class="card-body d-flex justify-content-center align-items-center" height="40" style="flex-grow: 1; ">
                <h5 class="card-title">Quem somos</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
            
    </div>

    <h3 class="text-center my-3 my-xl-5">Arquivos e Centros de Documentação que integram o ReDiSAP</h3>
    <div class="container row mx-auto g-4" style="width: 70%;">
      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <img src="/plugins/arArchivesRedisapPlugin/images/custom/siarq.png" alt="" style="width: 40%;">
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <img src="/plugins/arArchivesRedisapPlugin/images/custom/cle.png" alt="" style="width: 30%;">
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <img src="/plugins/arArchivesRedisapPlugin/images/custom/cmu.png" alt="" style="width: 30%;">
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <img src="/plugins/arArchivesRedisapPlugin/images/custom/ael.png" alt="" style="width: 40%;">
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <img src="/plugins/arArchivesRedisapPlugin/images/custom/cedae.png" alt="" style="width: 35%;">
      </div>

      <div class="col-6 col-md-6 col-xxl-4 d-flex justify-content-center align-items-center" style="flex-grow: 1;">
        <img src="/plugins/arArchivesRedisapPlugin/images/custom/cma.png" alt="" style="width: 35%;">
      </div>

    </div>

  </div>

  <h3 class="text-center my-3 my-xl-5"></h3>
</div>

<?php echo get_partial('layout_end'); ?>





