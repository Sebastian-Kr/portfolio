
var menu_button = document.querySelector('.menu-button');
var nav_icon2 = document.querySelector('#nav-icon2');
var menu_dropdown_box = document.querySelector('.menu-dropdown-box');

menu_button.addEventListener('click', function(){
  nav_icon2.classList.toggle('open');
  menu_dropdown_box.classList.toggle('open');
});
