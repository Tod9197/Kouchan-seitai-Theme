// ハンバーガーメニュー

document.addEventListener("DOMContentLoaded", function () {
  const hamburgerBtn = document.getElementById("js-hamburgerBtn");
  const hamburgerlineFirst = document.getElementById("js-hamburgeLine__first");
  const hamburgerlineSecond = document.getElementById(
    "js-hamburgeLine__second"
  );
  const hamburgerlineThird = document.getElementById("js-hamburgeLine__thrid");

  hamburgerBtn.addEventListener("click", function () {
    hamburgerlineSecond.classList.toggle("opacity");
  });
});
