function Close() {
  let cover = document.getElementById('boxpembuka');
  let parent = cover.parentElement.parentElement;
  let fabMenu = document.getElementById('button-fab');
  cover.classList.add("hidden");
  parent.classList.remove("overflow-disable");
  fabMenu.classList.remove("hidden");
}
