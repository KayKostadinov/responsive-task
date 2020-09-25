
const form = document.getElementById('form');
const msg = document.getElementById('msg');
const text = document.getElementById('msg-text');
console.log('everything is working fine, nothing to see here')
form.addEventListener('submit', e => {
    e.preventDefault();
    const mail = e.target.email.value;
    text.innerText = `${mail} has been registered`
    msg.style.display = 'block';
    setTimeout(() => {
        text.innerText = ''
        msg.style.display = 'none';
    }, 3000)
    e.target.email.value = ''
})

