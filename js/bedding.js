const boxBeddingCustom = document.getElementById('BoxWhatToCustom');
const custombedToggle = document.querySelector('.custombedToggle')
const closebox = document.querySelector('.closebox')
const BoxParentCustomBed = boxBeddingCustom.parentNode;


custombedToggle.addEventListener('click', () => {
    boxBeddingCustom.classList.add('boxbeddingCustom-Active');
    BoxParentCustomBed.classList.add('BoxparentBedding-Active');
});

closebox.addEventListener('click', () => {
    boxBeddingCustom.classList.remove('boxbeddingCustom-Active');
    BoxParentCustomBed.classList.remove('BoxparentBedding-Active');
});