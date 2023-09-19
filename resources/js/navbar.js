let selectLeng = document.querySelector('#selectLeng')
let lengIT = document.querySelector('#lengIT')
let lengEN = document.querySelector('#lengEN')
let lengFR = document.querySelector('#lengFR')


selectLeng.addEventListener('click',()=>{
    lengIT.classList.toggle('d-none')
    lengEN.classList.toggle('d-none')
    lengFR.classList.toggle('d-none')
})