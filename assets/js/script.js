document.addEventListener('DOMContentLoaded', function () {

    const modal = document.querySelector('#myModal');
    const modalImg = document.querySelector('#modal-img');
    const images = document.querySelectorAll('.myImages');

    for (let image of images) {
        image.addEventListener('click', showModal);
    }

    modal.addEventListener('click', () => {
        modal.style.display = 'none';
        modalImg.src = '';
    });

    function showModal() {
        modal.style.display = 'flex';
        modalImg.src = this.src.replace('thumb', '');
    }
});