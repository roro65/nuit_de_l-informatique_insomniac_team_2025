const btnOpen = document.querySelector('button');
const input = document.querySelector('input');
const body = document.querySelector('body');
const list = [37, 39, 37, 39, 38, 40, 38, 40, 65, 66, 65, 66];
let i = 0;

btnOpen.addEventListener('click', () => {
    if (input.value == "snake") window.open('https://www.google.com', '_top');
});

const password = (event) => {
    if(event.keyCode == list[i]){
        i++;
    }else i = 0;
    if(i == list.length){
        window.open('https://www.google.com', '_top');
    }
}

body.addEventListener('keydown', password);