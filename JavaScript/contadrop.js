document.addEventListener("click", (e) => {
  var isFoto = e.target.classList.contains("foto_perfil");

  if (!isFoto & (e.target.closest(".container_contadrop") != null)) return;

  let currentSublink;

  if (isFoto) {
    const item = e.target.closest(".container_contadrop");

    currentSublink = item.querySelector(".infodrop");

    currentSublink.classList.toggle("show");
  }

  document.querySelectorAll(".infodrop.show").forEach((infodrop) => {
    if (infodrop == currentSublink) return;

    infodrop.classList.remove("show");
  });
});
