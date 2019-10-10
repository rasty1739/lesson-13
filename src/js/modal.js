$(document).ready(function (){
  var button = $('#tell-me-button');
  var modal = $('#modal');
  var closeModal = $('#close-modal');

  button.on('click', function() {
    modal.addClass('modal_active');
  });

  closeModal.on('click', function(){
    modal.removeClass('modal_active');
  });


});