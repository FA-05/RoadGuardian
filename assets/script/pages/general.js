window.addEventListener("DOMContentLoaded", (event) => {
  console.log("Sinistro data page loaded");

  const forwardButton = document.getElementById("forward-button");
  forwardButton.addEventListener("click", (event) => {
    window.location.href = window.location.href.replace("infoSinistro", "specific");
  });
  // TODO: set state in localStorage
});
