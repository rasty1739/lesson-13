var button = document.querySelector('#tell-me-button');
var modal = document.querySelector('#modal');
var closeModal = document.querySelector('#close-modal');

button.addEventListener('click', function openModalWindow() {
  setTimeout(function () {
    modal.classList.remove('modal_active')
  }, 5000)
  modal.classList.add('modal_active')
});
closeModal.addEventListener('click', function closeModalWindow() {
  modal.classList.remove('modal_active')
});


