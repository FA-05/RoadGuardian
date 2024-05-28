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
  <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
  <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <header>
    <?PHP
    include ("navbar.php")
      ?>
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
                    <a href="http://sb01.eurobeta.it:8080/servizi-categoria/tributi-finanze-e-contravvenzioni/">Tributi,
                      finanze e contravvenzioni</a>
                  </li>
                  <li class="breadcrumb-item">
                    <span class="separator">/</span>
                    <a href="http://sb01.eurobeta.it:8080/servizio/pagamento-multa/">Pagamento multa</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    <span class="separator">/</span>Riepilogo
                  </li>
                </ol>
              </nav>
            </div>
            <div class="cmp-heading pb-3 pb-lg-4">
              <h1 class="title-xxxlarge">Pagamento multa</h1>

              <p class="subtitle-small">
                Hai bisogno di assistenza?
                <a href="" class="title-small-semi-bold t-primary">Contattaci</a>
              </p>
            </div>
          </div>

          <div class="col-12">
            <div class="cmp-info-progress d-flex" data-progress="">
              <!-- Desktop -->
              <div
                class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
                <div
                  class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                  <span class="d-block h-100 title-medium text-uppercase">Riepilogo</span>
                </div>
              </div>

              <!-- Desktop -->
              <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
                <div
                  class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                  <span class="d-block h-100 title-medium text-uppercase">Dati generali</span>
                </div>
              </div>

              <!-- Mobile -->
              <div class="iscrizioni-header d-lg-none w-100">
                <h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                  <span class="d-block d-lg-inline"> Riepilogo </span>
                  <span class="step">1/2</span>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="callout callout-highlight ps-3 warning">
              <div class="callout-title mb-20 d-flex align-items-center">
                <svg class="icon icon-sm" aria-hidden="true">
                  <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-horn"></use>
                </svg>
                <span>Attenzione</span>
              </div>
              <p class="titillium text-paragraph">
                Le informazioni che hai fornito hanno valore di dichiarazione.<span class="d-lg-block">
                  Verifica che siano corrette.</span>
              </p>
            </div>
            <h2 class="title-xxlarge mb-4 mt-40">Dati Generali</h2>

            <div class="cmp-card mb-4">
              <div class="card has-bkg-grey shadow-sm mb-0">
                <div class="card-header border-0 p-0 mb-lg-30">
                  <div class="d-flex">
                    <h3 class="subtitle-large mb-0" id="">Effettuato da</h3>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="cmp-info-summary bg-white mb-4 mb-lg-30 p-3 p-lg-4">
                    <div class="card">
                      <div
                        class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                        <h3 class="title-large-semi-bold mb-3">Targa</h3>
                      </div>

                      <div id="infoTarga" class="card-body p-0">
                        <div class="single-line-info border-light">
                          <div class="border-light border-0">
                            <div id="infoTarga" class="form-group cmp-input mb-0 mt-0">
                              <label class="cmp-input__label" for="targa-1">1° Targa</label>
                              <input data-id="1" placeholder="" type="text" maxlenght="16" class="form-control"
                                id="targa-1" required />
                              <div id="opzioni-targa-div-1" class=" bg-slate-200 absolute z-10 mt-10">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer p-0 d-none"></div>
                    </div>
                  </div>
                  <div class="cmp-info-summary bg-white p-3 p-lg-4">
                    <div class="card">
                      <div
                        class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                        <h3 class="title-large-semi-bold mb-3">Codice Fiscale</h3>
                      </div>

                      <div id="infoCF" class="card-body p-0">
                        <div class="single-line-info border-light">
                          <div class="border-light border-0">
                            <div class="form-group cmp-input mb-0 mt-0">
                              <label class="cmp-input__label" for="CF-1">1° CF</label>
                              <input data-id="1" placeholder="" type="text" maxlenght="16" class="form-control"
                                id="CF-1" required />
                              <div id="opzioni-CF-div-1" class="form-group cmp-input mb-0 mt-0">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer p-0 d-none"></div>
                      <button onclick="aggiungiRiga()" class="btn btn-primary fw-bold">Aggiungi Veicoli/Persone</button>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <button id="nigga-add" type="button"
                        class="btn btn-sm border border-none bg-green-300 w-full mt-2">+</button>

            <h2 class="title-xxlarge mb-4 pt-3 pt-lg-0">Dati specifici del servizio</h2>

            <div>
              <div class="cmp-card mb-4">
                <div class="card has-bkg-grey shadow-sm mb-0">
                  <div class="card-header border-0 p-0 mb-lg-30">
                    <div class="d-flex">
                      <h3 class="subtitle-large mb-0" id="">Estremi della multa</h3>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="cmp-info-summary bg-white p-3 p-lg-4">
                      <div class="card">
                        <div class="card-body p-0">
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Codice avviso</div>
                            <div class="border-light">
                              <p class="data-text" id="payment-code"></p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Ente creditore</div>
                            <div class="border-light">
                              <p class="data-text">Comune di Reggio Emilia</p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Codice fiscale ente creditore</div>
                            <div class="border-light">
                              <p class="data-text">00154902351</p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Targa veicolo</div>
                            <div class="border-light">
                              <p class="data-text">CK 345 HB</p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Data di rilevazione</div>
                            <div class="border-light">
                              <p class="data-text" id="fine-detection-date"></p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Data di ricevuta avviso</div>
                            <div class="border-light">
                              <p class="data-text" id="notification-date"></p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Pagamento</div>
                            <div class="border-light">
                              <p class="data-text" id="payment-info"></p>
                            </div>
                          </div>
                          <div class="single-line-info border-light">
                            <div class="text-paragraph-small">Importo dovuto</div>
                            <div class="border-light">
                              <p class="data-text" id="payment-amount"></p>
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
            <div class="cmp-nav-steps">
              <nav class="steppers-nav">
                <a href="specific.html">
                  <button type="button" class="btn btn-sm steppers-btn-prev p-0">
                    <svg class="icon icon-primary icon-sm" aria-hidden="true">
                      <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-left"></use>
                    </svg>
                    <span class="text-button-sm t-primary">Indietro</span>
                  </button>
                </a>
                <button type="button"
                  class="btn btn-outline-primary bg-white btn-sm steppers-btn-save d-none d-lg-block saveBtn">
                  <span class="text-button-sm t-primary">Salva Richiesta</span>
                </button>

                <button type="button"
                  class="btn btn-outline-primary bg-white btn-sm steppers-btn-save d-block d-lg-none saveBtn center">
                  <span class="text-button-sm t-primary">Salva</span>
                </button>

                <button type="button" class="btn btn-primary btn-sm steppers-btn-confirm send" data-bs-toggle="modal"
                  data-bs-target="#modal-terms">
                  <span class="text-button-sm">Invia</span>
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

      <div class="cmp-modal">
        <div class="modal fade" tabindex="-1" role="dialog" id="modal-terms" aria-labelledby="modal-terms-modal-title">
          <div class="modal-dialog modal-dialog-centered small" role="document">
            <div class="modal-content modal-dimensions">
              <div class="cmp-modal__header modal-header pb-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal"
                  aria-label="Chiudi finestra modale"></button>
                <h2 class="cmp-modal__header-title title-mini" id="modal-terms-modal-title">Termini e condizioni</h2>
                <p class="cmp-modal__header-info header-font">
                  Cliccando su Conferma e invia confermi di aver preso visione dei termini e delle condizioni di
                  servizio.
                </p>
                <a href="#" class="cmp-modal__header-link text-success underline mt-1">Leggi termini e condizioni</a>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer pb-70 pt-0">

                <!-- <button id="confirm-data-btn" class="btn btn-primary w-100 mx-0 fw-bold mb-4" type="submit"
                data-bs-toggle="modal" data-bs-target="#" form="">
                Conferma e invia
              </button> -->
                <a id="confirm-data-btn" class="btn btn-primary w-100 mx-0 fw-bold mb-4" href="summary.html">
                  Conferma e invia
                </a>
                <button class="btn btn-outline-primary w-100 mx-0" data-bs-dismiss="modal fw-bold"
                  data-bs-toggle="modal" type="button">
                  Annulla
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <script>
      window.__PUBLIC_PATH__ = '../assets/bootstrap-italia/dist/fonts';
    </script>
    <script src="../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
    <script src="../assets/script/scripts.js"></script>
    <script src="../assets/script/store.js"></script>
    <script src="../assets/script/pages/payment.js"></script>
    <script src="../Scripts/sanzione.js"></script>
</body>

</html>