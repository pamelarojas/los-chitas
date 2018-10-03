
// js. galeria de img //

$(function(){
    var gallery = document.querySelector('.gallery'),
        modal = document.querySelector('.modal-closed'),
        modalImage = document.querySelector('.slider img');

    gallery.addEventListener('click', openFullSize,false);
  
  function openFullSize(e){
      var thisSrc = e.target.firstElementChild.src,
          exitBtn = document.querySelector('.exit-button'),
          modalOpen = true;
    
      modalImage.src = thisSrc;
    
      if(modalOpen){
        modal.className = 'modal-open';
        exitBtn.addEventListener('click', function(){
          modal.className = 'modal-closed';
        })
      }
    e.stopPropagation();
};

});


$(document).ready(function(){
  $('.menu-header-menu-container').addClass('collapse navbar-collapse justify-content-end');
  $(".menu").addClass('nav');
  $('.menu-item').addClass('nav-item');
  $('.menu-item a').addClass('nav-link');
});

