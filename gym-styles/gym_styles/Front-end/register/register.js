// Funcion que Optiene los datos del input y los envia a la base de datos atraves de una Peticion HTTP Post
const getData = function (){
    let nombre = document.getElementById('nombres').value;
    let apellido = document.getElementById('apellidos').value;
    let email = document.getElementById('correo').value;
    let password = document.getElementById('contraseña').value;


    axios.post('http://127.0.0.1:8000/api/usuarios',{
        name: nombre,
        apellido: apellido,
        email: email,
        password: password,
        rol: 'usuario'
    })
    .then(function (response) {
    console.log(response.data);
    })
    .catch(function (error) {
    console.log(error);
    });

    
}

axios.get('http://127.0.0.1:8000/api/usuarios', {
  })
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.log(error);
  });
