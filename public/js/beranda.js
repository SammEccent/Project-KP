const heroImages = [
  `${window.BASE_URL || ''}/public/img/kantor.jpg`,
  `${window.BASE_URL || ''}/public/img/Lambang_Kota_Tangerang_Selatan.png`,
  `${window.BASE_URL || ''}/public/img/drafLurah.jpg`
];

let heroIndex = 0;
const heroImgEl = document.querySelector('.hero-image');

function nextHeroImage() {
  if (!heroImgEl) return;
  heroIndex = (heroIndex + 1) % heroImages.length;
  heroImgEl.classList.add('fade-out');
  setTimeout(() => {
    heroImgEl.src = heroImages[heroIndex];
    heroImgEl.classList.remove('fade-out');
  }, 400);
}

setInterval(nextHeroImage, 3500);
