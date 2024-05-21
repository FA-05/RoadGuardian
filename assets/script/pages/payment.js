window.addEventListener("DOMContentLoaded", (event) => {
  console.log("payment data page loaded");

  const localCode = store.get("code");
  const localDate = store.get("date");
  const localAmount = store.get("amount");

  const paymentCode = document.getElementById("payment-code");
  const paymentInfo = document.getElementById("payment-info");
  const paymentAmount = document.getElementById("payment-amount");
  const notificationDate = document.getElementById("notification-date");
  const fineDetectionDate = document.getElementById("fine-detection-date");

  // const confirmDataBtn = document.getElementById("confirm-data-btn");

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

  if (localCode) {
    paymentCode.innerHTML = localCode
      .replace(/[^\dA-Z]/g, "")
      .replace(/(.{4})/g, "$1 ")
      .trim();
  }

  const fiveDaysAgo = new Date();
  fiveDaysAgo.setDate(fiveDaysAgo.getDate() - 60);

  if (fineDetectionDate) {
    fineDetectionDate.innerHTML = formatDate(fiveDaysAgo);
  }

  if (localDate) {
    notificationDate.innerHTML = formatDate(new Date(localDate));
  }

  if (localAmount) {
    const today = new Date();
    const fineDate = new Date(localDate);

    const diffTime = Math.abs(today - fineDate);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    paymentAmount.innerHTML = localAmount;
    if (diffDays >= 6) {
      paymentInfo.innerHTML = `Pagamento standard`;
    } else {
      paymentInfo.innerHTML = `Pagamento in misura ridotta, perché il pagamento avviene dopo il 5° giorno dalla notifica.`;
    }
  }

  // confirmDataBtn.addEventListener("click", (event) => {
  //   window.location.href = window.location.href.replace(
  //     "payment",
  //     "pagamento-1"
  //   );
  // });
});
