const contador = document.querySelector('#contador');
const btn = document.querySelector('#sorteo');

let numero = parseInt(contador.innerHTML);

const checknum = () => {
    if (numero <= 31) {
        btn.classList.add('disabled');
    } else if (numero == 32) {
        btn.classList.remove('disabled');
    }
}

setInterval(checknum, 1000);