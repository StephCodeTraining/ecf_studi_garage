let activeFiltre = document.getElementById("activeFiltre");
let filtreOccasions = document.getElementById("filtreOccasions");

activeFiltre.addEventListener("click", () => {
  if (filtreOccasions.classList.contains("show")) {
    filtreOccasions.classList.remove("show");
  } else {
    filtreOccasions.classList.add("show");
  }
});
