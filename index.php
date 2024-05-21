<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Language" content="en" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pagamenti - Polizia dei negri</title>

  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
  <script src="Scripts/homeScript.js"></script>
  <link href="assets/css/style.css" rel="stylesheet" />
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
                title="Vai al portale {La tua Regione}"></a>
              <div class="it-header-slim-right-zone" role="navigation">
                <a href="Pages/loginPage.php" class="btn btn-primary btn-icon btn-full" href="#"
                  data-element="personal-area-login">
                  <span class="rounded-icon" aria-hidden="true">
                    <svg class="icon icon-primary">
                      <use xlink:href="assets/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                    </svg>
                  </span>
                  <span class="d-none d-lg-block">Devi inserire una multa? Accedi qui</span>

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
                  <a href="#" title="Vai alla homepage" aria-label="Home Il tuo Comune">
                    <svg class="icon" aria-hidden="true">
                      <image xlink:href="assets/Icons/logo.png" src="assets/Icons/logo.png" alt="Il tuo Comune" role="img" width="82"
                        height="82"></image>
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
                            <use xlink:href="assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                          </svg>
                          <span class="visually-hidden">Twitter</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                          </svg>
                          <span class="visually-hidden">Facebook</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="assets/bootstrap-italia/dist/svg/sprites.svg#it-youtube"></use>
                          </svg>
                          <span class="visually-hidden">YouTube</span></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <svg class="icon icon-sm icon-white align-top">
                            <use xlink:href="assets/bootstrap-italia/dist/svg/sprites.svg#it-telegram"></use>
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
  <main>
    <div class="container" id="main-container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="cmp-breadcrumbs" role="navigation">
            <nav class="breadcrumb-container">
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="cmp-heading pb-3 pb-lg-4">
            <div class="row">
              <div class="col-lg-8">
                <h1 class="title-xxxlarge" data-element="service-title">
                  Pagamento multa
                </h1>

                <div class="d-flex flex-wrap cmp-heading__tag">
                  <div class="cmp-tag">
                    <span class="cmp-tag__tag title-xsmall">Servizio attivo</span>
                  </div>
                </div>

                <p class="subtitle-small mb-3">
                  Il servizio permette di pagare online le multe ricevute
                  dalla polizia municipale o di prenotare un appuntamento per
                  pagare presso gli uffici.
                </p>

                <div class="cmp-card mb-0">
                  <div class="card has-bkg-grey shadow-sm p-4 pt-lg-30 pb-lg-30 pl-lg-30 pr-lg-30">
                    <div class="card-header border-0 p-0 mb-lg-30 m-0">
                      <div class="d-flex">
                        <h2 class="title-xxlarge mb-0 icon-required" id="">BARCODE</h2>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <p class="subtitle-small pb-4 mb-0">
                        Inserisci il codice a barre per vedere se ci sono multe da pagare
                      </p>
                      <!-- 'is-invalid' class for error -->
                      <div class="form-group cmp-input mb-0 mt-0">
                        <label class="cmp-input__label" for="code">BARCODE</label>
                        <input type="text" maxlenght="16" class="form-control" id="code" required />
                        <button id="btn-invia-codice" class="btn btn-primary fw-bold">Paga online</button>
                      </div>
                      <!-- show when error -->
                      <div class="form-feedback just-validate-error-label d-none" id="code-error">
                        Questo campo è richiesto
                      </div>
                      <!-- loading spinner mobile -->
                      <div id="spinner" class="d-flex justify-content-center align-items-center mt-4 d-none">
                        <div class="progress-spinner progress-spinner-double size-sm progress-spinner-active">
                          <div class="progress-spinner-inner"></div>
                          <div class="progress-spinner-inner"></div>
                          <span class="visually-hidden">Caricamento...</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="d-none d-lg-block mb-0 mt-2" />
            </div>
          </div>

          <div class="container">
            <div class="row mt-lg-80 mt-4">
              <div class="col-12 col-lg-3 mb-4">
                <aside class="cmp-navscroll sticky-top" aria-labelledby="accordion-title-one">
                  <div class="inline-menu">
                    <div class="link-list-wrapper">
                      <ul>
                        <li>
                          <a class="list-item large medium right-icon p-0 text-decoration-none" href="#collapse-one"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapse-one"
                            data-focus-mouse="true">
                            <span class="list-item-title-icon-wrapper pb-10 px-3">
                              <span id="accordion-title-one" class="title-xsmall-semi-bold">INDICE DELLA PAGINA</span>
                              <svg class="icon icon-xs right">
                                <use href="assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                              </svg>
                            </span>
                            <!-- Progress Bar -->
                            <div class="progress bg-light">
                              <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </a>
                          <ul class="link-sublist collapse show" id="collapse-one" data-element="page-index">
                            <li>
                              <a class="list-item" href="#who-needs">
                                <span class="title-medium">A chi è rivolto</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#how-to">
                                <span class="title-medium">Come fare</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#needed">
                                <span class="title-medium">Cosa serve</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#deadlines">
                                <span class="title-medium">Tempi e scadenze</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#costs">
                                <span class="title-medium">Costi</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#service-access">
                                <span class="title-medium">Accedi al servizio</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#conditions">
                                <span class="title-medium">Condizioni di servizio</span>
                              </a>
                            </li>
                            <li>
                              <a class="list-item" href="#contacts">
                                <span class="title-medium">Contatti</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </aside>
              </div>

              <div class="col-12 col-lg-8 offset-lg-1">
                <section class="mb-30">
                  <h2 class="mb-3" id="who-needs">A chi è rivolto</h2>
                  <p class="text-paragraph lora mb-0">
                    Il servizio è destinato a tutti i cittadini che devono pagare
                    multe della polizia municipale, prese a seguito di infrazioni
                    del codice della strada nel territorio comunale.
                  </p>
                </section>

                <section class="mb-30">
                  <h2 class="mb-3" id="how-to">Come fare</h2>
                  <p class="text-paragraph lora mb-0">
                    Per pagare online, accedi con le tue credenziali di identità
                    digitale e fornisci le informazioni su chi effettua il pagamento
                    e gli estremi della multa. Puoi pagare con conto o carta tramite
                    il servizio pagoPA e scaricare subito la ricevuta.
                    Alternativamente, puoi prenotare un appuntamento e recarti
                    presso gli uffici.
                  </p>
                </section>

                <section class="mb-30 has-bg-grey p-3 p-lg-4">
                  <h2 class="mb-3" id="needed">Cosa serve</h2>
                  <p class="text-paragraph lora fw-semibold mb-0">
                    Per il pagamento delle multe, assicurati di avere:
                  </p>
                  <ul class="list-wrapper lora">
                    <li class="list-item"><span>la notifica della multa;</span></li>
                    <li class="list-item">
                      <span>di avere a presso il codice fiscale per accedere</span>
                    </li>
                    <li class="list-item"><span>la targa del veicolo;</span></li>
                    <li class="list-item">
                      <span>i dettagli del conto o della carta con cui vuoi effettuare
                        il pagamento.</span>
                    </li>
                  </ul>
                </section>

                <section class="mb-30">
                  <h2 class="mb-3" id="deadlines">Tempi e scadenze</h2>
                  <ul class="list-wrapper lora">
                    <li class="list-item">
                      <span>Per i pagamenti entro 5 giorni dalla notifica o dalla
                        contestazione immediata, si applica uno sconto del 30%
                        sull’importo;</span>
                    </li>
                    <li class="list-item">
                      <span>Per i pagamenti entro 60 giorni, si paga una sanzione in
                        misura ridotta;</span>
                    </li>
                    <li class="list-item">
                      <span>Per i pagamenti oltre 60 giorni, si paga la sanzione
                        raddoppiata più gli interessi.</span>
                    </li>
                  </ul>
                </section>

                <section class="mb-30 has-bg-grey p-4">
                  <h2 class="mb-3" id="service-access">Accedi al servizio</h2>
                  <p class="text-paragraph lora mb-4">
                    Puoi pagare la multa direttamente online tramite identità
                    digitale.
                  </p>
                  <a href="Pages/loginPage.php">
                    <button type="button" class="btn btn-primary mobile-full mb-4">
                      <span>Paga online</span>
                    </button>
                  </a>
                </section>

                <section class="it-page-section">
                  <h2 class="mb-3" id="contacts">Contatti</h2>
                  <div class="row">
                    <div class="col-12 col-md-8 col-lg-6 mb-30">
                      <div class="card-wrapper rounded h-auto pb-0">
                        <div class="card card-teaser card-teaser-info rounded shadow-sm p-3">
                          <div class="card-body pe-3">
                            <span class="title-small">
                              <a class="text-decoration-none" href="#" data-element="service-area">Ufficio polizia
                                municipale</a>
                            </span>
                            <p class="subtitle-small mb-0">
                              Via Dei Timoni 69, 42069
                              <br />
                              0465 696969
                              <br />
                              <a class="" href="mailto:ufficiotributia@email.it"
                                aria-label="Invia una email a ufficiotributi@email.it"
                                title="Invia una email a ufficiotributi@email.it">balls@email.it</a>
                            </p>
                          </div>
                          <div class="avatar size-xl">
                            <img src="https://picsum.photos/200/200" alt="Immagine" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mb-30">
                      <span class="text-paragraph-small">Argomenti:</span>
                      <div class="d-flex flex-wrap gap-2 mt-2 mb-30">
                        <div class="cmp-tag">
                          <a class="chip chip-simple bg-tag text-decoration-none" href="#" data-element="service-topic">
                            <span class="chip-label">Pagamenti</span>
                          </a>
                        </div>
                      </div>
                      <p class="text-paragraph-small mb-0">
                        Pagina aggiornata il 24/05/2024
                      </p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
  </main>
  <script>
    window.__PUBLIC_PATH__ = "assets/bootstrap-italia/dist/fonts";
  </script>
  <script src="assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
  <script src="assets/script/scripts.js"></script>
  <script src="assets/script/store.js"></script>
  <script src="assets/script/pages/info.js"></script>
</body>

</html>