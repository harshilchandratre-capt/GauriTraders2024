function openModal(type) {
    document.getElementById(type + 'Modal').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';

}

function closeModal(type) {
    document.getElementById(type + 'Modal').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
}

function closeAllModals() {
    document.querySelectorAll('.modal').forEach(modal => modal.style.display = 'none');
    document.querySelector('.overlay').style.display = 'none';
}