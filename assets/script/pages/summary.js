window.addEventListener("DOMContentLoaded", (event) => {
  const summaryDate = document.getElementById("summary-date");
  const summaryAmount = document.getElementById("summary-amount");

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

  summaryDate.innerHTML = formatDate(new Date());
  summaryAmount.innerHTML = localAmount || "--,-- €";

  store.remove("code");
  store.remove("date");
  store.remove("amount");
  store.remove("privacyPolicy");
});
