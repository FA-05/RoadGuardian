<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Language" content="en" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pagamenti - Il tuo Comune</title>

  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
  <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="skiplink">
    <a class="visually-hidden-focusable" href="#main-container">Vai ai contenuti</a>
    <a class="visually-hidden-focusable" href="#footer">Vai al footer</a>
  </div>
  <!-- /skiplink -->
  <header class="it-header-wrapper" data-bs-target="#header-nav-wrapper" style="">
    <div class="it-header-slim-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="it-header-slim-wrapper-content">
              <a class="d-lg-block navbar-brand" target="_blank" href="#"
                aria-label="Vai al portale {La tua Regione} - link esterno - apertura nuova scheda"
                title="Vai al portale {La tua Regione}">La tua Regione</a>
              <div class="it-header-slim-right-zone" role="navigation">
                <div class="nav-item dropdown">
                  <button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                    aria-controls="languages" aria-haspopup="true">
                    <span class="visually-hidden">Lingua attiva:</span>
                    <span>ITA</span>
                    <svg class="icon">
                      <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                    </svg>
                  </button>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-12">
                        <div class="link-list-wrapper">
                          <ul class="link-list">
                            <li>
                              <a class="dropdown-item list-item" href="#"><span>ITA <span
                                    class="visually-hidden">selezionata</span></span></a>
                            </li>
                            <li>
                              <a class="dropdown-item list-item" href="#"><span>ENG</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-primary btn-icon btn-full" href="#" data-element="personal-area-login">
                  <span class="rounded-icon" aria-hidden="true">
                    <!-- <svg class="icon icon-primary">
                        <use xlink:href="../assets/images/GB.png"></use>
                      </svg> -->
                    <img src="../assets/images/GB.png" alt="user pic" />
                  </span>
                  <span class="d-none d-lg-block">Giulia Bianchi</span>
                </a>
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
                  <a href="http://sb01.eurobeta.it:8080/" title="Vai alla homepage" aria-label="Home Il tuo Comune">
                    <svg class="icon" aria-hidden="true">
                      <image xlink:href="http://sb01.eurobeta.it:8080/wp-content/uploads/2022/07/logo_comune.svg" width="82" height="82"></image>
                    </svg>
                    <div class="it-brand-text">
                      <div class="it-brand-title">Il tuo Comune</div>
                      <div class="it-brand-tagline d-none d-md-block">Un comune da vivere</div>
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
                            <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                          </svg>
                          <span class="visually-hidden">Twitter</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                          </svg>
                          <span class="visually-hidden">Facebook</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-youtube"></use>
                          </svg>
                          <span class="visually-hidden">YouTube</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-telegram"></use>
                          </svg>
                          <span class="visually-hidden">Telegram</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="it-search-wrapper">
                    <span class="d-none d-md-block">Cerca</span>
                    <button class="search-link rounded-icon" type="button" data-bs-toggle="modal"
                      data-bs-target="#search-modal" aria-label="Cerca nel sito">
                      <svg class="icon">
                        <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-search"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="it-header-navbar-wrapper" id="header-nav-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!--start nav-->
              <nav class="navbar navbar-expand-lg has-megamenu" aria-label="Navigazione principale">
                <button class="custom-navbar-toggler" type="button" aria-controls="nav4" aria-expanded="false"
                  aria-label="Mostra/Nascondi la navigazione" data-bs-target="#nav4" data-bs-toggle="navbarcollapsible"
                  role="navigation">
                  <svg class="icon">
                    <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-burger"></use>
                  </svg>
                </button>
                <div class="navbar-collapsable" id="nav4">
                  <div class="overlay" style="display: none"></div>
                  <div class="close-div">
                    <button class="btn close-menu" type="button">
                      <span class="visually-hidden">Nascondi la navigazione</span>
                      <svg class="icon">
                        <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-close-big"></use>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-wrapper">
                    <a href="#" aria-label="home Il tuo Comune" class="logo-hamburger">
                      <svg class="icon" aria-hidden="true">
                        <image xlink:href="http://sb01.eurobeta.it:8080/wp-content/uploads/2022/07/logo_comune.svg" width="82" height="82"></image>
                      </svg>
                      <div class="it-brand-text">
                        <div class="it-brand-title">Il tuo Comune</div>
                      </div>
                    </a>
                    <ul class="navbar-nav" data-element="main-navigation">
                      <li class="nav-item">
                        <a class="nav-link" href="http://sb01.eurobeta.it:8080/amministrazione/" data-element="management">
                          <span>Amministrazione</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://sb01.eurobeta.it:8080/novita/" data-element="news">
                          <span>Novità</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="http://sb01.eurobeta.it:8080/servizi/" data-element="all-services">
                          <span>Servizi</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://sb01.eurobeta.it:8080/vivere-il-comune/" data-element="news">
                          <span>Vivere il Comune</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="navbar-nav navbar-secondary">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Agricoltura</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Tempo libero</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Istruzione</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-element="all-topics">
                          <span class="fw-bold">Tutti gli argomenti...</span>
                        </a>
                      </li>
                    </ul>
                    <div class="it-socials">
                      <span>Seguici su</span>
                      <ul>
                        <li>
                          <a href="#" target="_blank">
                            <svg class="icon icon-sm icon-white align-top">
                              <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                            </svg>
                            <span class="visually-hidden">Twitter</span></a>
                        </li>
                        <li>
                          <a href="#" target="_blank">
                            <svg class="icon icon-sm icon-white align-top">
                              <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                            </svg>
                            <span class="visually-hidden">Facebook</span></a>
                        </li>
                        <li>
                          <a href="#" target="_blank">
                            <svg class="icon icon-sm icon-white align-top">
                              <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-youtube"></use>
                            </svg>
                            <span class="visually-hidden">YouTube</span></a>
                        </li>
                        <li>
                          <a href="#" target="_blank">
                            <svg class="icon icon-sm icon-white align-top">
                              <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-telegram"></use>
                            </svg>
                            <span class="visually-hidden">Telegram</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="container" id="main-container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="cmp-breadcrumbs" role="navigation">
            <nav class="breadcrumb-container">
              <ol class="breadcrumb p-0" data-element="breadcrumb">
                <li class="breadcrumb-item"><a href="http://sb01.eurobeta.it:8080/">Home</a></li>
                <li class="breadcrumb-item">
                  <span class="separator">/</span>
                  <a href="http://sb01.eurobeta.it:8080/servizi">Servizi</a>
                </li>
                <li class="breadcrumb-item">
                  <span class="separator">/</span>
                  <a href="http://sb01.eurobeta.it:8080/servizi-categoria/tributi-finanze-e-contravvenzioni/">Tributi, finanze e contravvenzioni</a>
                </li>
                <li class="breadcrumb-item">
                  <span class="separator">/</span>
                  <a href="http://sb01.eurobeta.it:8080/servizio/pagamento-multa/">Pagamento multa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <span class="separator">/</span>Dati Genearli
                </li>
              </ol>
            </nav>
          </div>
          <div class="cmp-heading pb-3 pb-lg-4">
            <h1 class="title-xxxlarge">Pagamento multa</h1>

            <p class="subtitle-small">
              Inserisci le informazioni necessarie per il pagamento della multa.<br class="d-none d-md-block" />
              Potrai ricontrollare tutti i dati nel riepilogo, prima di effettuare il pagamento.
            </p>

            <p class="subtitle-small mt-lg-2">
              Hai bisogno di assistenza?
              <a class="title-small-semi-bold t-primary" href="#">Contattaci</a>
            </p>
          </div>
        </div>
        <div class="col-12">
          <div class="cmp-info-progress d-flex" data-progress="">
            <!-- Desktop -->
            <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end completed">
              <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                <span class="d-block h-100 title-medium text-uppercase">Informativa sulla privacy</span>

                <svg class="d-block icon icon-primary icon-sm" aria-hidden="true">
                  <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-check"></use>
                </svg>
              </div>
            </div>
            <!-- Desktop -->
            <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
              <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                <span class="d-block h-100 title-medium text-uppercase">Dati generali</span>
              </div>
            </div>
            <!-- Desktop -->
            <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
              <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                <span class="d-block h-100 title-medium text-uppercase">Dati specifici del servizio</span>
              </div>
            </div>
            <!-- Desktop -->
            <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
              <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                <span class="d-block h-100 title-medium text-uppercase">Riepilogo</span>
              </div>
            </div>

            <!-- Mobile -->
            <div class="iscrizioni-header d-lg-none w-100">
              <h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                <span class="d-block d-lg-inline"> Dati generali </span>
                <span class="step">2/4</span>
              </h4>
              <p class="title-xsmall mt-40 mb-3">I campi contraddistinti dal simbolo asterisco sono obbligatori</p>
            </div>
          </div>
        </div>
      </div>
      <div class="steppers-content" aria-live="polite">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="cmp-card mb-0">
              <div class="card has-bkg-grey shadow-sm p-big">
                <div class="card-header border-0 p-0 mb-lg-30">
                  <div class="d-flex">
                    <h2 class="title-xxlarge mb-1" id="">Effettuato da</h2>
                  </div>
                  <p class="subtitle-small mb-0">
                    Informazioni sulla persona che effettua il pagamento, che può essere diversa da chi ha ricevuto la
                    multa.
                  </p>
                </div>
                <div class="card-body p-0">
                  <div class="cmp-info-button-card">
                    <div class="card p-3 p-lg-4">
                      <div class="card-body p-0">
                        <h3 class="big-title mb-0">SINISTRO</h3>
                        <p class="card-info">
                          BARCODE<br />
                          <span id="barcode"></span>
                        </p>

                        <div class="accordion-item">
                          <div class="accordion-header" id="heading-collapse-benef-1">
                            <button class="collapsed accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-benef-1" aria-expanded="false" aria-controls="collapse-benef-1">
                              <span class="d-flex align-items-center">
                                Mostra tutto
                                <svg class="icon icon-primary icon-sm">
                                  <use href="assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                                </svg>
                              </span>
                            </button>
                          </div>
                          <div id="collapse-benef-1" class="accordion-collapse collapse" role="region">
                            <div class="accordion-body p-0">
                            <div class="cmp-info-summary bg-white has-border">
                                <div class="card">
                                  <div
                                    class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                                    <h4 class="title-large-semi-bold mb-3">Data dell'avvenuto</h4>
                                  </div>

                                  <div class="card-body p-0">
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Data e ora</div>
                                      <div class="border-light border-0">
                                        <p id="data_ora" class="data-text"></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer p-0 d-none"></div>
                                </div>
                              </div>
                              <div class="cmp-info-summary bg-white has-border">
                                <div class="card">
                                  <div
                                    class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                                    <h4 class="title-large-semi-bold mb-3">Informazioni sul Sinistro</h4>
                                  </div>

                                  <div class="card-body p-0">
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Nome</div>
                                      <div class="border-light">
                                        <p id="causaIncidente" class="data-text">Giulia</p>
                                      </div>
                                    </div>
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Numero di Feriti</div>
                                      <div class="border-light">
                                        <p id="numeroFeriti" class="data-text"></p>
                                      </div>
                                    </div>
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Numero di Morti</div>
                                      <div class="border-light border-0">
                                        <p id="numeroMorti" class="data-text"></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer p-0 d-none"></div>
                                </div>
                              </div>
                              <div class="cmp-info-summary bg-white has-border">
                                <div class="card">
                                  <div
                                    class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                                    <h4 class="title-large-semi-bold mb-3">Luogo dell'avvenuto</h4>
                                  </div>

                                  <div class="card-body p-0">
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Indirizzo</div>
                                      <div class="border-light border-0">
                                        <p id="luogo" class="data-text"></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer p-0 d-none"></div>
                                </div>
                              </div>
                              <div class="cmp-info-summary bg-white has-border">
                                <div class="card">
                                  <div
                                    class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                                    <h4 class="title-large-semi-bold mb-3">Veicoli Coinvolti</h4>
                                  </div>

                                  <div class="card-body p-0">
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Targa</div>
                                      <div id="targa" class="border-light border-0 data-text">
                                        <p class="data-text"></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer p-0 d-none"></div>
                                </div>
                              </div>
                              <div class="cmp-info-summary bg-white has-border">
                                <div class="card">
                                  <div
                                    class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                                    <h4 class="title-large-semi-bold mb-3">Persone Coinvolte</h4>
                                  </div>

                                  <div class="card-body p-0">
                                    <div class="single-line-info border-light">
                                      <div class="text-paragraph-small">Data e ora</div>
                                      <div id="cfGuidatori" class="border-light border-0 data-text">
                                        <p class="data-text"></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer p-0 d-none"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cmp-nav-steps">
              <nav class="steppers-nav">
                <a href="privacy.html">
                  <button type="button" class="btn btn-sm steppers-btn-prev p-0">
                    <svg class="icon icon-primary icon-sm" aria-hidden="true">
                      <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-left"></use>
                    </svg>
                    <span class="text-button-sm t-primary">Indietro</span>
                  </button>
                </a>
                <button type="button"
                  class="btn btn-outline-primary bg-white btn-sm steppers-btn-save d-none d-lg-block saveBtn"
                  id="save-request">
                  <span class="text-button-sm t-primary">Salva Richiesta</span>
                </button>

                <button type="button"
                  class="btn btn-outline-primary bg-white btn-sm steppers-btn-save d-block d-lg-none saveBtn center"
                  id="save-request">
                  <span class="text-button-sm t-primary">Salva</span>
                </button>
                <button id="forward-button" type="button" class="btn btn-primary btn-sm steppers-btn-confirm">
                  <span class="text-button-sm">Avanti</span>
                  <svg class="icon icon-white icon-sm" aria-hidden="true">
                    <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-right"></use>
                  </svg>
                </button>
              </nav>
              <div id="alert-message" class="alert alert-success cmp-disclaimer rounded d-none" role="alert">
                <span class="d-inline-block text-uppercase cmp-disclaimer__message">Richiesta salvata con
                  successo</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script>
    window.__PUBLIC_PATH__ = '../assets/bootstrap-italia/dist/fonts';
  </script>
  <script src="../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
  <script src="../assets/script/scripts.js"></script>
  <script src="../assets/script/store.js"></script>
  <script src="../assets/script/pages/general.js"></script>
  <script>
    $(document).ready(function () {


        var data = JSON.parse(sessionStorage.getItem("data"));

        //alert(data);

        $("#barcode").text(data["barcode"]);
        getTarghe(JSON.parse(data["targa"]));
        getCF(JSON.parse(data["CFguidatori"]));

        $("#luogo").text(data["luogo"]);
        $("#data_ora").text(data["data_ora"]);
        $("#causaIncidente").text(data["causaIncidente"]);
        $("#numeroMorti").text(data["numeroMorti"]);
        $("#numeroFeriti").text(data["numeroFeriti"]);
        //$("#causaIncidente").text(data["causaIncidente"]);

        function getCF(cf_list) {
            let rtn = "";

            cf_list.forEach(cf => {
                rtn += "<p>" + cf + "</p>";
            });

            $("#cfGuidatori").append(rtn);
        }

        function getTarghe(targa_list) {
            let rtn = "";

            targa_list.forEach(targa => {
                rtn += "<p>" + targa + "</p>";
            });

            $("#targa").append(rtn);
        }


    });
</script>
</body>

</html>