window.addEventListener("DOMContentLoaded", (event) => {
  console.log("general data page loaded");

  const forwardButton = document.getElementById("forward-button");
  forwardButton.addEventListener("click", (event) => {
    window.location.href = window.location.href.replace("general", "specific");
  });
  // TODO: set state in localStorage
});
