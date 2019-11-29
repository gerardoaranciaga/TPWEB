"use strict";


document.querySelector("#comentarios-form").addEventListener('submit', AgregarComentario);

let app = new Vue({
    el: "#vue-comentarios",
    data: {
        comentarios: [],
        promedio,
        auth: true
    },
    methods: {
      del: function (id_comentario) {
        fetch('api/comentarios/' + id_comentario, {
            method: 'DELETE',
         })
         .then(response => {
            getComentarios();
         })
         .catch(error => console.log(error));
       }
    }
});



function getComentarios() {
    let id_noticia = document.querySelector("input[name=id_noticia]").value;
    fetch("api/comentarios/" + id_noticia)
    .then(response => response.json())
    .then(comentarios => {
        OrdenarDescendente(comentarios);
        app.comentarios = comentarios;
        promedio(comentarios);
    })
    .catch(error => console.log(error));
}


function AgregarComentario(e) {
    e.preventDefault();

    let data = {
        id_noticia:  document.querySelector("input[name=id_noticia]").value,
        id_usuario:  document.querySelector("input[name=id_usuario]").value,
        comentario:  document.querySelector("input[name=comentario]").value,
        puntaje:  document.querySelector("input[name=puntaje]").value,
        fecha: Date.now(),
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
     })
     .then(response => {
        getComentarios();
     })
     .catch(error => console.log(error));
}


function OrdenarDescendente(comentarios) {
    comentarios.sort(deMayorAMenor);    
}
function deMayorAMenor(elem1, elem2) {return elem2.puntaje-elem1.puntaje;}


function promedio(comentarios) {
    let promedio = 0;
    if(comentarios != false){
        comentarios.forEach(comentario => {
            promedio += parseInt(comentario.puntaje);
        });
        app.promedio = promedio / comentarios.length;
    }
    else{
        app.promedio = promedio;
    }
}


getComentarios();  