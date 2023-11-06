function linkShow() {
  var triPoints = document.querySelector(".tripoints");
  if (triPoints.classList.contains("open")) {
    triPoints.classList.remove("open");
  } else {
    triPoints.classList.add("open");
  }
}

document.querySelector(".tripoints").addEventListener("click", linkShow());
