;
((d, c, $) => {
  c.log('Hola WordPress')

  const menu = d.querySelector('.Menu'),
    menuBtn = d.querySelector('.Menu-btn')

  menuBtn.addEventListener('click', e => {
    e.preventDefault()
    menu.classList.toggle('is-active')
  })

  const galleryLinks = d.querySelectorAll('.gallery a')
  galleryLinks.forEach(link => link.dataset.fancybox = 'gallery')
})(document, console, jQuery.noConflict());
