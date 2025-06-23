document.addEventListener('DOMContentLoaded', function() {
  const items = document.querySelectorAll('.prestation-item-block');
  items.forEach((item) => {
    // Redirection sur le texte
    const link = item.querySelector('.prestation-item-link');
    if (link) {
      link.addEventListener('click', function(e) {
        e.stopPropagation();
        window.location.href = 'demarches.php';
      });
    }
    // Accordéon sur le bloc (hors texte)
    const icon = item.querySelector('.fa-plus');
    if (icon) {
      icon.addEventListener('click', function(e) {
        e.stopPropagation();
        item.classList.toggle('active');
        const content = item.nextElementSibling;
        if (content && content.classList.contains('prestation-item-content')) {
          if (item.classList.contains('active')) {
            content.style.maxHeight = content.scrollHeight + 'px';
            content.style.paddingTop = '15px';
            content.style.paddingBottom = '15px';
          } else {
            content.style.maxHeight = '0';
            content.style.paddingTop = '0';
            content.style.paddingBottom = '0';
          }
        }
      });
    }
    // Initial state (closed)
    const content = item.nextElementSibling;
    if (content && content.classList.contains('prestation-item-content')) {
      content.style.maxHeight = '0';
      content.style.paddingTop = '0';
      content.style.paddingBottom = '0';
    }
  });
}); 