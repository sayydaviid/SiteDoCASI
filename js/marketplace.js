// js/marketplace.js
document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('products-container');
  const buttons   = document.querySelectorAll('#order-options li[data-action]');
  const original  = Array.from(container.querySelectorAll('.item-box'));

  // Função para ordenar/remontar os itens
  function applyOrder(action) {
    let items = Array.from(container.querySelectorAll('.item-box'));

    if (action === 'az') {
      items.sort((a, b) => {
        const nameA = a.querySelector('.item-name').textContent.trim().toLowerCase();
        const nameB = b.querySelector('.item-name').textContent.trim().toLowerCase();
        return nameA.localeCompare(nameB);
      });
    } else if (action === 'default') {
      items = original.slice();  // restaura ordem original
    }

    items.forEach(item => container.appendChild(item));
  }

  // Configura botões de ordenação/lista
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const action = btn.dataset.action;
      // atualiza estado ativo
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // modo lista ou grid
      if (action === 'list') container.classList.add('list-view');
      else container.classList.remove('list-view');

      // aplica ordenação
      applyOrder(action);
    });
  });

  // Inicia com “Padrão”
  document.querySelector('#order-options li[data-action="default"]').click();

  // Configura galeria, swatches e toggle frente/costas em cada produto
  document.querySelectorAll('.item-box').forEach(box => {
    const imageBox   = box.querySelector('.image-box');
    const swatches   = box.querySelectorAll('.swatch');
    const toggleBtns = box.querySelectorAll('.view-toggle button');
    const prevBtn    = box.querySelector('.prev-btn');
    const nextBtn    = box.querySelector('.next-btn');
    let currentView  = 'front';
    let currentIndex = 0;

    // Cria lista de imagens [front, back] para a swatch ativa
    function getImages() {
      const active = box.querySelector('.swatch.active');
      return [
        active.dataset.front,
        active.dataset.back
      ];
    }

    // Atualiza o fundo conforme idx e currentView
    function updateImage() {
      const imgs = getImages();
      imageBox.style.backgroundImage = `url('${imgs[currentIndex]}')`;
    }

    // Troca swatch
    swatches.forEach(swatch => {
      swatch.addEventListener('click', () => {
        swatches.forEach(s => s.classList.remove('active'));
        swatch.classList.add('active');
        currentIndex = (currentView === 'front' ? 0 : 1);
        updateImage();
      });
    });

    // Toggle frente/costas
    toggleBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        toggleBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        currentView = btn.dataset.view;
        currentIndex = (currentView === 'front' ? 0 : 1);
        updateImage();
      });
    });

    // Navegação com setas
    prevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + 2) % 2;
      updateImage();
    });
    nextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % 2;
      updateImage();
    });

    // Inicializa estado
    if (swatches[0]) swatches[0].click();
    if (toggleBtns[0]) toggleBtns[0].click();
  });
});
