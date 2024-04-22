var conteudo = document.getElementById('perfil');
var menu = document.getElementById('menu');

conteudo.addEventListener('click', function() {
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
      } else {
        menu.style.display = 'block';
      }
});

window.onscroll = function() {
    menu.style.display = 'none';
  };
