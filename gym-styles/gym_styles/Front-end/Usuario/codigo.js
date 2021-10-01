// Uso de Axios Para Hacer la Peticion HTTP de GET
//URL de la ruta Api para hacer la peticion GET
axios.get('http://127.0.0.1:8000/api/horario/')
    .then(function (response){
        if(response.status==200){
            // 
            let data = response.data;
            for (let i = 0; i < data.length; i++ ) {
            datosApiN = `${'ID de la clase:'} ${data[i].id} ${'Clase de:'} ${data[i].nombre} ${'Dia:'} ${data[i].dia} ${'Hora Inicio:'} ${data[i].hora_inicio} ${'Hora Fin:'} ${data[i].hora_fin}`;
            
                let Newdiv = document.createElement("div");
                NewContent = document.createTextNode(datosApiN);
                Newdiv.appendChild(NewContent);
                Newdiv.classList.add("div");
                
                let divan = document.getElementById("apis")
                document.body.insertBefore(Newdiv, divan);

                console.log(data[i].id);
                console.log(data[i].nombre);
                console.log(data[i].dia);
                console.log(data[i].hora_inicio);
                console.log(data[i].hora_fin);
            
        }

        }
    })
    .catch(function (error){
    console.log(error)
    });
//Uso de Axios Para la Peticion HTTP GET de Apartar Clase      
    
    axios.get('http://127.0.0.1:8000/api/apartar/')
    .then(function (response){
        if(response.status==200){
            // 
            let data = response.data;
            for (let i = 0; i < data.length; i++ ) {
            datosApiN2 = `${'Id de la reserva:'} ${data[i].id} ${'Nombre:'} ${data[i].nombre} ${'ID de la clase reservada:'} ${data[i].ID_Clase}`;
            
                let Newdiv2 = document.createElement("div");
                NewContent2 = document.createTextNode(datosApiN2);
                Newdiv2.appendChild(NewContent2);
                Newdiv2.classList.add("Apartado");
                
                let divan2 = document.getElementById("x")
                document.body.insertBefore(Newdiv2, divan2);

                console.log(data[i].id);
                console.log(data[i].nombre);
                console.log(data[i].ID_Clase);
            
        }

        }
    })
    .catch(function (error){
    console.log(error)
    });


  //Uso de Axios para la pericion HTTP POST Para crear la reserva de una clase
    let Crear = document.getElementById("Crear_C");

    Crear.addEventListener("click", crear);

    function crear(){
    let nombreC = prompt("Ingrese Tu nombre");
    let idC = prompt("Ingresa el id de la clase que quieres agendar");


    axios.post('http://127.0.0.1:8000/api/apartar/create', {
        nombre: nombreC,
        ID_Clase: idC
      })
      .then(function (response) {
        console.log(response.data);
      })
      .catch(function (error) {
        console.log(error);
      });
    }

    
   
// Uso de Axios para la Peticion HTTP delete para eliminar la reserva
        let borrarC = document.getElementById("Eliminar_C");
        borrarC.addEventListener("click", Eliminar);
    
            function Eliminar(){
                let id = prompt("Ingrese el ID de la reserva a borrar")
                axios.delete(`http://127.0.0.1:8000/api/apartar/${id}`, {
              })
              .then(function (response) {
                console.log(response.data);
              })
              .catch(function (error) {
                console.log(error);
              });
            }