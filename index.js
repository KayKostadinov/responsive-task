
const form = document.getElementById('form');


form.addEventListener('submit', e => {
    e.preventDefault();
    alert(`${e.target.email.value} has been registered`)
})

