const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu_btn");


// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display ='block'
})
// close sidebar
closeBtn.addEventListener('click', ()=>{
    sideMenu.style.display ='none'
})