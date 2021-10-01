// Peticion HTTP GET para traer los datos
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
  
    let crear = document.getElementById("Crear");
    crear.addEventListener("click", Crear);

    function Crear(){
      let nombreC = prompt("Ingrese El nombre de la clase");
      let diaC = prompt("Ingrese dia de la clase");
      let Hi = prompt("Hora de Inicio");
      let Hf = prompt("Hora Fin");
      //Peticion HTTP Post Para crear Clases
      axios.post('http://127.0.0.1:8000/api/horario/create', {
          nombre: nombreC,
          dia: diaC,
          hora_inicio: Hi,
          hora_fin: Hf
        }).then(function (response) {
          console.log(response.data);
        })
        .catch(function (error) {
          console.log(error);
        });
    }

    //Peticion HTTP Delete para Eliminar Datos
    let borrar = document.getElementById("eliminar");
    borrar.addEventListener("click", Eliminar);

        function Eliminar(){
            let id = prompt("Ingrese el ID del dato a borrar")
            axios.get(`http://127.0.0.1:8000/api/horario/${id}`, {
          })
          .then(function (response) {
            console.log(response.data);
          })
          .catch(function (error) {
            console.log(error);
          });
        }
        // Peticion HTTP GET para traer las Clases Apartadas 
        axios.get('http://127.0.0.1:8000/api/apartar/')
        .then(function (response){
            if(response.status==200){
                // 
                let data = response.data;
                for (let i = 0; i < data.length; i++ ) {
                datosApiN2 = `${'Nombre del usuario que reservo:'} ${data[i].nombre} ${'ID de la clase reservada:'} ${data[i].ID_Clase}`;
                
                    let Newdiv2 = document.createElement("div");
                    NewContent2 = document.createTextNode(datosApiN2);
                    Newdiv2.appendChild(NewContent2);
                    Newdiv2.classList.add("Apartado");
                    
                    let divan2 = document.getElementById("a")
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
    
    
    
