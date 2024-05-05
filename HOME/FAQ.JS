document.querySelectorAll('.QUESTIONSECTION').forEach(function(container) {
    container.addEventListener('click', function() {
      document.querySelectorAll('.content').forEach(function(content) {
        if (content !== container.querySelector('.content')) {
          content.style.maxHeight = '0';
          content.previousElementSibling.querySelector('.toggle-symbol').textContent = '➕';
        }
      });
  
      var content = this.querySelector('.content');
      var symbol = this.querySelector('.toggle-symbol');
      if (content.style.maxHeight && content.style.maxHeight !== "0px") {
        content.style.maxHeight = '0';
        symbol.textContent = '➕';
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        symbol.textContent = '➖';
      }
    });
  });
  
document.querySelector('.menu-toggle').addEventListener('click', function() {
  var dropdownNav = document.querySelector('.dropdown-nav');
  if (dropdownNav.classList.contains('expanded')) {
    dropdownNav.classList.remove('expanded');
  } else {
    dropdownNav.classList.add('expanded');
  }
});


