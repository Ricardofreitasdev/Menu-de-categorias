const links = document.querySelectorAll('.modal__item');
links.forEach(link => {
    link.addEventListener("click", function(e){
      if(e.target.nextSibling){
          e.target.nextSibling.classList.toggle("active")
      }
    })
});