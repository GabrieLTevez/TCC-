var open = document.getElementById('open')
var close = document.getElementById('close')
var inviteE = document.getElementById('invite')


//open
var wrapper = document.getElementsByClassName('wrapper')[0]
var select = document.getElementsByTagName('select')[0]
var datalist = document.getElementsByClassName('listas-locais')


var abrirForm = document.getElementById('abrir-form')

var cancelar = document.getElementById('cancelar')

abrirForm.addEventListener('click', ()=>{
wrapper.classList.add('active-popup')
})

cancelar.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup')
})





open.addEventListener('click', ()=>{
    wrapper.style.borderLeft = "#52A842 0.4vw solid"
    /*select.style.backgroundColor = "#52A842"
    datalist[0].style.backgroundColor = "#52A842"
    datalist[1].style.backgroundColor = "#52A842"
    datalist[2].style.backgroundColor = "#52A842"
    button[0].style.backgroundColor = "#52A842"
    button[1].style.backgroundColor = "#52A842"*/
})

close.addEventListener('click', ()=>{
    wrapper.style.borderLeft = "#7F1CE2 0.4vw solid"
    /*select.style.backgroundColor = "#7F1CE2"
    datalist[0].style.backgroundColor = "#7F1CE2"
    datalist[1].style.backgroundColor = "#7F1CE2"
    datalist[2].style.backgroundColor = "#7F1CE2"
    button[0].style.backgroundColor = "#7F1CE2"
    button[1].style.backgroundColor = "#7F1CE2"*/
})

inviteE.addEventListener('click', ()=>{
    wrapper.style.borderLeft = "#4395D0 0.4vw solid"
    /*select.style.backgroundColor = "#4395D0"
    datalist[0].style.backgroundColor = "#4395D0"
    datalist[1].style.backgroundColor = "#4395D0"
    datalist[2].style.backgroundColor = "#4395D0"
    button[0].style.backgroundColor = "#4395D0"
    button[1].style.backgroundColor = "#4395D0"*/
})

open.addEventListener('click', () => {
    // ... (seu código para configurar as cores)
    document.getElementById('color').value = "#52A842"; // Atualiza o valor do campo oculto
});

close.addEventListener('click', () => {
    // ... (seu código para configurar as cores)
    document.getElementById('color').value = "#7F1CE2"; // Atualiza o valor do campo oculto
});

inviteE.addEventListener('click', () => {
    // ... (seu código para configurar as cores)
    document.getElementById('color').value = "#4395D0"; // Atualiza o valor do campo oculto
});
