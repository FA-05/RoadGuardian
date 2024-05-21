window.addEventListener("DOMContentLoaded", (event) => {
  console.log("privacy page loaded");
  console.log(store);

  const privacyCheckbox = document.getElementById("privacy");
  const privacyError = document.getElementById("privacy-error");
  const forwardButton = document.getElementById("forward-button");

  const privacyPolicy = store.get("privacyPolicy");

  if (privacyPolicy) {
    privacyCheckbox.checked = true;
  }

  forwardButton.addEventListener("click", (event) => {
    const isValid = privacyCheckbox.checked;
    if (isValid) {
      window.location.href = window.location.href.replace("privacy", "general");
    } else {
      privacyCheckbox.classList.add("is-invalid");
      privacyError.classList.remove("d-none");
    }
  });

  privacyCheckbox.addEventListener("change", (event) => {
    store.set("privacyPolicy", event.target.checked);
    if (event.target.checked) {
      privacyCheckbox.classList.remove("is-invalid");
      privacyError.classList.add("d-none");
    }
  });
});
