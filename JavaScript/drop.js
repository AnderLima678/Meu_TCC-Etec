document.addEventListener("click", (e) => {
  var isTripoints = e.target.classList.contains("tripoints");

  if (!isTripoints & (e.target.closest(".container_tri") != null)) return;

  let currentSublink;

  if (isTripoints) {
    const item = e.target.closest(".container_tri");

    currentSublink = item.querySelector(".dropdown");

    currentSublink.classList.toggle("hide");
  }

  document.querySelectorAll(".dropdown.hide").forEach((dropdown) => {
    if (dropdown == currentSublink) return;

    dropdown.classList.remove("hide");
  });
});

// script responsavel por fazer um menu dropdown para os 3 pontos das postagens
