document.getElementById("addnew").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "flex";
});

document.getElementById("close").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "none";
});

window.onload = function () {
  const form = document.getElementById("myForm");
  const popupContent = document.getElementById("popup-content");

  document.getElementById("edit").addEventListener("click", function () {
    localStorage.setItem("formData", form.innerHTML);

    const storedFormData = localStorage.getItem("formData");

    if (storedFormData) {
      popupContent.innerHTML = storedFormData;
    }

    popupContent.style.display = "flex";
  });
};
