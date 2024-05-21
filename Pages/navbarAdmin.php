<head>

</head>
<header class="it-header-wrapper" data-bs-target="#header-nav-wrapper" style="">
    <div class="it-header-slim-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="it-header-slim-wrapper-content">
              <a class="d-lg-block navbar-brand" target="_blank" href="#"
                aria-label="Vai al portale {La tua Regione} - link esterno - apertura nuova scheda"
                title="Vai al portale {La tua Regione}"></a>
              <div class="it-header-slim-right-zone" role="navigation">
                <?php
                // Controlla se l'utente è loggato (la sessione contiene l'attributo "username")
                if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
                  ?>
                  <!-- Mostra il nome utente e il link per disconnettersi -->
                  <a href="../../PHPs/logout.php" class="btn btn-primary btn-icon btn-full" href="#"
                    data-element="personal-area-login">
                    <span class="rounded-icon" aria-hidden="true">
                      <svg class="icon icon-primary">
                        <use xlink:href="../../assets/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                      </svg>
                    </span>
                    <span class="d-none d-lg-block"><?php echo $_SESSION['username']; ?> - Disconnetti</span>
                  </a>
                  <?php
                } else {
                  ?>
                  <!-- Mostra il link per accedere (utente non loggato) -->
                  <a href="Pages/loginPage.php" class="btn btn-primary btn-icon btn-full" href="#"
                    data-element="personal-area-login">
                    <span class="rounded-icon" aria-hidden="true">
                      <svg class="icon icon-primary">
                        <use xlink:href="../../assets/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                      </svg>
                    </span>
                    <span class="d-none d-lg-block">Devi inserire una multa? Accedi qui</span>
                  </a>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="it-nav-wrapper">
      <div class="it-header-center-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="it-header-center-content-wrapper">
                <div class="it-brand-wrapper">
                  <a href="#" title="Vai alla homepage" aria-label="Home Il tuo Comune">
                    <svg class="icon" aria-hidden="true">
                      <image xlink:href="../../assets/Icons/logo.png" src="../../assets/Icons/logo.png" alt="Il tuo Comune"
                        role="img" width="82" height="82"></image>
                    </svg>
                    <div class="it-brand-text">
                      <div class="it-brand-title">Polizia municipale di Trento</div>
                      <div class="it-brand-tagline d-none d-md-block">L'ordine sempre sottocontrollo</div>
                    </div>
                  </a>
                </div>
                <div class="it-right-zone">
                  <div class="it-socials d-none d-lg-flex">
                    <span>Seguici su</span>
                    <ul>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../../assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                          </svg>
                          <span class="visually-hidden">Twitter</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../../assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                          </svg>
                          <span class="visually-hidden">Facebook</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../../assets/bootstrap-italia/dist/svg/sprites.svg#it-youtube"></use>
                          </svg>
                          <span class="visually-hidden">YouTube</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../../assets/bootstrap-italia/dist/svg/sprites.svg#it-telegram"></use>
                          </svg>
                          <span class="visually-hidden">Telegram</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>