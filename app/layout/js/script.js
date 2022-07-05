const btnMenu = document.querySelector('#mobile');
const btnClose = document.querySelector('#close');
const modalCategories = document.querySelector('#modalCategories');

btnMenu.addEventListener("click", function(){
    modalCategories.classList.add('open')
})

btnClose.addEventListener("click", function(){
    modalCategories.classList.remove('open')
})


