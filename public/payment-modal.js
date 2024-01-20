// function openModal(type) {
//     document.getElementById(type + 'Modal').style.display = 'block';
//     document.querySelector('.overlay').style.display = 'block';

// }

// function closeModal(type) {
//     document.getElementById(type + 'Modal').style.display = 'none';
//     document.querySelector('.overlay').style.display = 'none';
// }

// function closeAllModals() {
//     document.querySelectorAll('.modal').forEach(modal => modal.style.display = 'none');
//     document.querySelector('.overlay').style.display = 'none';
// }

let activeMethod = null; // Variable to store the currently active method

function openModal(type) {
    // Deactivate the previously active method
    if (activeMethod) {
        activeMethod.classList.remove('active');
    }

    // Activate the clicked method
    activeMethod = document.querySelector('.' + type + '-method');
    activeMethod.classList.add('active');

    document.getElementById(type + 'Modal').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
}

function closeModal(type) {
    // Deactivate the currently active method
    if (activeMethod) {
        activeMethod.classList.remove('active');
        activeMethod = null;
    }

    document.getElementById(type + 'Modal').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
}

function closeAllModals() {
    // Deactivate the currently active method
    if (activeMethod) {
        activeMethod.classList.remove('active');
        activeMethod = null;
    }

    document.querySelectorAll('.modal').forEach(modal => modal.style.display = 'none');
    document.querySelector('.overlay').style.display = 'none';
}
