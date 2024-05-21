window.addEventListener("DOMContentLoaded", (event) => {
  console.log("specific data page loaded");

  store.set("code", store.get("code") || "");
  store.set("date", store.get("date") || "");
  store.set("amount", store.get("amount") || "--,-- €");

  const fineListElements = {
    code: document.getElementById("fine-code"),
  };

  const codeInput = document.getElementById("code");
  const codeError = document.getElementById("code-error");
  const dateInput = document.getElementById("date-1");
  const dateError = document.getElementById("date-error");

  const forwardButton = document.getElementById("forward-button");

  const fineData = document.getElementById("fine-data");
  const fineAmount = document.getElementById("fine-amount");
  const fineInfo = document.getElementById("fine-info");
  const fineDetectionDate = document.getElementById("fine-detection-date");

  const errorSummary = document.getElementById("error-summary");
  const errorSummaryLink = document.getElementById("error-summary-link");

  const spinner = document.getElementById("spinner");

  const localCode = store.get("code");
  const localDate = store.get("date");
  const localAmount = store.get("amount");

  function padTo2Digits(num) {
    return num.toString().padStart(2, "0");
  }

  function formatDate(date) {
    return [
      padTo2Digits(date.getDate()),
      padTo2Digits(date.getMonth() + 1),
      date.getFullYear(),
    ].join("/");
  }

  const fiveDaysAgo = new Date();
  fiveDaysAgo.setDate(fiveDaysAgo.getDate() - 60);

  if (fineDetectionDate) {
    fineDetectionDate.innerHTML = formatDate(fiveDaysAgo);
  }

  if (dateInput) {
    dateInput.setAttribute("min", fiveDaysAgo.toISOString().split("T")[0]);
    dateInput.setAttribute("max", new Date().toISOString().split("T")[0]);
  }

  if (localCode) {
    codeInput.value = localCode;
    codeInput.focus();
    spinner.classList.add("d-none");
    fineData.classList.remove("d-none");
    fineListElements.code.innerHTML = localCode
      .replace(/[^\dA-Z]/g, "")
      .replace(/(.{4})/g, "$1 ")
      .trim();
  }

  if (localDate) {
    dateInput.value = localDate;
  }

  if (localAmount) {
    const today = new Date();
    const fineDate = new Date(localDate);

    const diffTime = Math.abs(today - fineDate);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    fineAmount.innerHTML = localAmount;
    if (diffDays >= 6) {
      fineAmount.innerHTML = localAmount;
      fineInfo.innerHTML = `
          Stai pagando <strong>entro ${diffDays} giorni</strong> dalla ricezione dell'avviso.`;
    } else {
      fineAmount.innerHTML = localAmount;
      fineInfo.innerHTML = `
        Stai pagando <strong>entro ${diffDays} giorni</strong> dalla ricezione dell'avviso.
        L'importo da pagare è stato <strong>ridotto del 30%</strong>
      `;
    }
    fineInfo.classList.remove("d-none");
  }

  const mockRequest = () => {
    spinner.classList.remove("d-none");
    dateInput.classList.remove("is-invalid");
    dateError.classList.add("d-none");
    errorSummary.classList.add("d-none");
    codeInput.disabled = true;
    setTimeout(() => {
      spinner.classList.add("d-none");
      fineData.classList.remove("d-none");
      codeInput.disabled = false;
    }, 1000);
  };

  forwardButton.addEventListener("click", (event) => {
    const isEmptyCode = codeInput.value.length === 0;
    const isLengthCode = codeInput.value.length === 18;
    const isEmptyDate = dateInput.value.length === 0;

    if (isEmptyCode) {
      codeInput.classList.add("is-invalid");
      codeError.classList.remove("d-none");
      codeError.innerHTML = "Questo campo è richiesto";
      errorSummaryLink.innerHTML = "Codice Avviso";
      errorSummaryLink.href = "#code";
      errorSummary.classList.remove("d-none");
    }

    if (!isEmptyCode && !isLengthCode) {
      codeInput.classList.add("is-invalid");
      codeError.classList.remove("d-none");
      codeError.innerHTML = "Questo campo deve essere lungo 18 caratteri";
      errorSummary.classList.remove("d-none");
    }

    if (!isEmptyCode && isEmptyDate && isLengthCode) {
      dateInput.classList.add("is-invalid");
      dateError.classList.remove("d-none");
      errorSummaryLink.innerHTML = "Data di ricevuta avviso";
      errorSummaryLink.href = "#date-1";
      errorSummary.classList.remove("d-none");
    }

    if (!isEmptyCode && isLengthCode && !isEmptyDate) {
      window.location.href = window.location.href.replace(
        "specific",
        "payment"
      );
    }
  });

  codeInput.addEventListener("keyup", (event) => {
    const value = event.target.value;
    if (value.length === 18) {
      store.set("code", value);
      fineListElements.code.innerHTML = value
        .replace(/[^\dA-Z]/g, "")
        .replace(/(.{4})/g, "$1 ")
        .trim();
      mockRequest();
    } else {
      fineData.classList.add("d-none");
    }
  });

  codeInput.addEventListener("focus", (event) => {
    codeInput.classList.remove("is-invalid");
    codeError.classList.add("d-none");
    errorSummary.classList.add("d-none");
  });

  dateInput.addEventListener("focus", (event) => {
    dateInput.classList.remove("is-invalid");
    dateError.classList.add("d-none");
    errorSummary.classList.add("d-none");
  });

  dateInput.addEventListener("change", (event) => {
    const value = event.target.value;

    const today = new Date();
    const fineDate = new Date(value);

    const diffTime = Math.abs(today - fineDate);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    if (value.length === 10) {
      store.set("date", value);
      if (diffDays >= 6) {
        store.set("amount", "54,88 €");
        fineAmount.innerHTML = "54,88 €";
        fineInfo.innerHTML = `
            Stai pagando <strong>entro ${diffDays} giorni</strong> dalla ricezione dell'avviso.`;
      } else {
        store.set("amount", "38,42 €");
        fineAmount.innerHTML = "38,42 €";
        fineInfo.innerHTML = `
          Stai pagando <strong>entro ${diffDays} giorni</strong> dalla ricezione dell'avviso.
          L'importo da pagare è stato <strong>ridotto del 30%</strong>
        `;
      }
      fineInfo.classList.remove("d-none");
    } else {
      fineAmount.innerHTML = "--,-- €";
      fineInfo.classList.add("d-none");
    }
  });
  // TODO: set state in localStorage
});
