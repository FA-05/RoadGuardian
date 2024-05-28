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
  <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
  <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
<header>
    <?PHP
    include ("../Pages/navbar.php")
        ?>
</header>       

  <main>
    <div class="container" id="main-container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
        <div class="cmp-breadcrumbs" role="navigation">
            <nav class="breadcrumb-container">
              <ol class="breadcrumb p-0" data-element="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  <span class="separator">/</span>Informativa Privacy
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <h1 class="title-xxxlarge mb-4">Pagamento multa</h1>
        </div>
        <div class="col-12">
          <div class="cmp-info-progress d-flex" data-progress="">
            <!-- Desktop -->
            <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
              <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                <span class="d-block h-100 title-medium text-uppercase">Informativa sulla privacy</span>
              </div>
            </div>
            <!-- Desktop -->
            <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
              <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                <span class="d-block h-100 title-medium text-uppercase">Dati generali</span>
              </div>
            </div>

            <!-- Mobile -->
            <div class="iscrizioni-header d-lg-none w-100">
              <h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                <span class="d-block d-lg-inline"> Informativa sulla privacy </span>
                <span class="step">1/2</span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <p class="text-paragraph mt-2 mt-lg-3 mb-3 mb-md-4">
            Il Comune di Firenze gestisce i dati personali forniti e liberamente comunicati sulla base dell’articolo
            13 del Regolamento (UE) 2016/679 General data protection regulation (Gdpr) e degli articoli 13 e
            successive modifiche e integrazione del decreto legislativo (di seguito d.lgs) 267/2000 (Testo unico enti
            locali).
          </p>
          <span class="text-paragraph">Per i dettagli sul trattamento dei dati personali consulta l’<a href="#"
              class="t-primary">informativa sulla privacy.</a>
          </span>

          <div class="form-check mt-md-40">
            <div class="checkbox-body mt-4 mb-3 mb-lg-40 d-flex flex-column">
              <input type="checkbox" id="privacy" name="privacy-field" value="privacy-field" />
              <label class="title-small-semi-bold pt-1" for="privacy">Ho letto e compreso l’informativa sulla
                privacy</label>
              <div class="form-feedback just-validate-error-label d-none" id="privacy-error">
                Questo campo è richiesto
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-primary mobile-full mb-2 mb-md-5" id="forward-button">
            <span class="">Avanti</span>
          </button>
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
  <script src="../assets/script/pages/privacy.js"></script>
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