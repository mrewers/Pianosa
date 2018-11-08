const body = document.querySelector('.post-body');
const hero = document.querySelector('.post-hero');

document.addEventListener('scroll', function () {
  hero && body && body.getBoundingClientRect().top < 0 ? hero.classList.add('hide')  : hero && body && hero.classList.remove('hide')
})