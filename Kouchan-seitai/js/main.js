// ハンバーガーメニュー

document.addEventListener("DOMContentLoaded", function () {
  const hamburgerBtn = document.getElementById("js-hamburgerBtn");
  const hamburgerLines = document.querySelectorAll("#js-hamburgerBtn span");
  const hamburgerNav = document.getElementById("js-hamburgerNav");
  const hamburgerLink = document.querySelectorAll(".hamburgerNav__link");

  // ハンバーガーメニュークリックでナビを表示
  hamburgerBtn.addEventListener("click", function () {
    hamburgerLines[1].classList.toggle("opacity");
    hamburgerLines[0].classList.toggle("rotateRight");
    hamburgerLines[2].classList.toggle("rotateLeft");
    hamburgerNav.classList.toggle("translateX");
  });
  // メニューリンクをクリックでナビを閉じる
  hamburgerLink.forEach((link) => {
    link.addEventListener("click", () => {
      hamburgerNav.classList.remove("translateX");

      // ハンバーガーラインをリセット
      hamburgerLines[1].classList.remove("opacity");
      hamburgerLines[0].classList.remove("rotateRight");
      hamburgerLines[2].classList.remove("rotateLeft");
    });
  });
});
