<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fagundes</title>

  <!-- link font Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <!-- link font roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- link favicon rafael.f -->
  <link rel="shortcut icon" href="./favicon/Rafael-Fagundes-Icone.ico" type="image/x-icon">

  <!-- Link Booststrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="container-fluid" style="background-color: black;">
    <div class="container text-center" style="background-color: black;">
      <nav class="navbar navbar-expand-lg navbar-dark p-2">
        <a class="navbar-brand" href="#">
          <img src="img/falconImg.png" alt="FalconTFagundes" height="70" width="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto p-2">
            <li class="nav-item ms-4">
              <a class="navTitles" href="#sobre">SOBRE</a>
            </li>
            <li class="nav-item ms-4">
              <a class="navTitles" href="#projetos">PROJETOS</a>
            </li>
            <li class="nav-item ms-4">
              <a class="navTitles" href="#serviços">CERTIFICAÇÕES</a>
            </li>
            <li class="nav-item ms-4">
              <a class="navTitles" href="#contato">CONTATO</a>
            </li>
            <li class="nav-item ms-5">
              <a class="navTitles" href="https://www.linkedin.com/in/rafael-fagundes-518974258" target="_blank">
                <i class='bx bxl-linkedin fs-2'></i>
              </a>
            </li>
            <li class="nav-item ms-2">
              <a class="navTitles" href="https://www.instagram.com/fagundes.icm/?hl=pt-br" target="_blank">
                <i class='bx bxl-instagram fs-2'></i>
              </a>
            </li>
            <li class="nav-item ms-2">
              <a class="navTitles" href="https://github.com/FalconTFagundes" target="_blank">
                <i class='bx bxl-github fs-2'></i>
              </a>
            </li>
            <li class="nav-item ms-2">
              <a class="navTitles" href="https://www.facebook.com/profile.php?id=100013959692622" target="_blank">
                <i class='bx bxl-facebook fs-2'></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>


    </div>
  </header>

  <div class="container-fluid shadow-custom">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="hero-section">
            <div class="hero-text text-center" data-aos="zoom-out" data-aos-duration="3000" data-aos-delay="1000">
              <h1 class="fs-1 fs-md-3">
                <span style="color: gray;">
                  < </span> Olá! Sou Rafael Fagundes <span style="color: gray;"> > </span>
              </h1>
              <p class="fs-4">A chave para o <span style="background-color: rgba(66, 66, 66, 0.73); padding: 0 6px; color: white;">sucesso do seu projeto</span> está no código que escrevo,</p>
              <span class="badge" style="color:rgb(126, 108, 247); background-color: white;"><i
                  class='bx bxl-php fs-2'></i></span>
              <span class="badge" style="color:rgb(89, 164, 224); background-color: white;"><i
                  class='bx bxl-jquery fs-2'></i></span>
              <span class="badge" style="color: purple; background-color: white;"><i
                  class='bx bxl-bootstrap fs-2'></i></span>
              <span class="badge" style="color:rgb(81, 109, 134); background-color: white;"><i
                  class='bx bxs-data fs-2'></i></span>
              <span class="badge" style="color:rgb(231, 65, 0); background-color: white;"><i
                  class='bx bxl-git fs-2'></i></span>

            </div>
            <div class="hero-image moving-element" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1050">
              <img src="img/rafaelFagundes.png" alt="Rafael Fagundes" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <p class="font-monospace fs-5 mt-5 text-center text-custom" data-aos="fade-up" data-aos-duration="1000"> PROJETOS
    RECENTES </p>

  <!-- card projetos recentes -->
  <div class="container projetosRecentes text-center d-flex justify-content-center">
    <div class="row">
      <div class="col g-5">
        <div class="card custom-card" style="width: 18rem;" data-aos="zoom-out" data-aos-duration="2000"
          data-aos-delay="300">
          <img src="img/projects/divinoSabor.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sistema de Gestão Epresarial</h5>
            <p class="card-text">Gestão eficiente com layout intuitivo, PHP e Ajax.</p>
            <a href="https://github.com/FalconTFagundes/tcc-DivinoSabor" target="_blank">
              <i class='bx bxl-github fs-1'></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col g-5">
        <div class="card custom-card" style="width: 18rem;" data-aos="zoom-out" data-aos-duration="2000"
          data-aos-delay="300">
          <img src="img/projects/actionHeroes.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Dashboard - Loja Action Heroes</h5>
            <p class="card-text">Controle fácil de recursos, imagens e vendas.</p>
            <a href="https://github.com/FalconTFagundes/actionHeroes-AND-dashboard" target="_blank">
              <i class='bx bxl-github fs-1'></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col g-5">
        <div class="card custom-card" style="width: 18rem;" data-aos="zoom-out" data-aos-duration="2000"
          data-aos-delay="300">
          <img src="img/projects/dashboardAjax.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ferramenta de Gestão Visual</h5>
            <p class="card-text">Interface simples para administração de sites.</p>
            <a href="https://github.com/FalconTFagundes/AJAX-Dashboard" target="_blank">
              <i class='bx bxl-github fs-1'></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Footer -->
  <footer class="text-justify ">
    <div class="container">
      <p class="footer-contet">&copy; 2025 Rafael Fagundes</p>
    </div>
    <!-- Ícones sociais -->
    <div class="social-links" id="social-links-id">
      <a class="social-links" href="https://www.linkedin.com/in/rafael-fagundes-518974258" target="_blank">
        <i class='bx bxl-linkedin fs-2'></i>
      </a>
      <a class="social-links" href="https://www.instagram.com/fagundes.icm/?hl=pt-br" target="_blank">
        <i class='bx bxl-instagram fs-2 ms-3'></i>
      </a>
      <a class="social-links" href="https://github.com/FalconTFagundes" target="_blank">
        <i class='bx bxl-github fs-2 ms-3'></i>
      </a>
      <a class="social-links" href="https://www.facebook.com/profile.php?id=100013959692622" target="_blank">
        <i class='bx bxl-facebook fs-2 ms-3'></i>
      </a>
    </div>
  </footer>


  <!-- Linkk bootstrap js + popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  <!-- anime js -->
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>


  <!-- AOS Animation JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- INIT AOS -->
  <script>
    AOS.init();
  </script>

</body>

</html>