// js/stewardship.js
document.addEventListener('DOMContentLoaded', () => {
  const profiles = Array.from(document.querySelectorAll('.profile'));

  // limpa qualquer .active no carregamento
  profiles.forEach(p => p.classList.remove('active'));

  profiles.forEach((profile, idx) => {
    const photo = profile.querySelector('.photo');

    photo.addEventListener('mouseenter', () => {
      // ao hoverar no perfil idx, marca TODOS de 0 até idx-1 como active
      for (let i = 0; i < idx; i++) {
        profiles[i].classList.add('active');
      }
    });
  });

  // animação de entrada ao rolar
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  profiles.forEach(p => observer.observe(p));
});
