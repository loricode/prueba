const { default: axios } = require('axios');

window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
 const btnForm = document.getElementById('btnform') //boton de formulario
 const codeForm = document.getElementById('codigo')
 const nameForm = document.getElementById('nombre') //nombre
 const lastForm = document.getElementById('apellido') //apellido
 const dirForm = document.getElementById('direccion')
 const telFom = document.getElementById('telefono')
 const resiForm = document.getElementById('residencia')
 const oriFrom = document.getElementById('origen')
 const nacForm = document.getElementById('nacionalidad')
 const programForm = document.getElementById('programa') // input programa
 
 
 btnForm.addEventListener('click', async() => {
    

    const obj =
    {
      codigo:codeForm.value,
      nombre:nameForm.value,
      apellido:lastForm.value,
      direccion:dirForm.value,
      telefono:telFom.value,
      residencia:resiForm.value,
      origen:oriFrom.value,
      nacionalidad:nacForm.value,
      programa:programForm.value
    } ;
     
    const response = await axios.post('http://127.0.0.1:8000/student', obj)
    console.log(response)
    if(response.status===200){
        clearInput()
    }

}) 

function clearInput(){
    codeForm.value=''
    nameForm.value=''
    lastForm.value=''
    dirForm.value=''
    telFom.value=''
    resiForm.value=''
    oriFrom.value=''
    nacForm.value=''
    programForm.value=''
}
