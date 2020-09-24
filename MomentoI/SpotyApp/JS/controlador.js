
//url que se trae de Spotify
const url="https://api.spotify.com/v1/artists/4PhdYoQGH8s1xee81dqQOO/top-tracks?country=US";

//Corresponde al token generados por Spotify
const token="Bearer BQARcpzS4tvNfXUBj62WECYhY8EOLiOOTIHIPcAL6-_l5-kqtOk18tf-Pe1zeuUySuyF5ReKe4a3YwAPCXtzIW1vahEmca1E0_Gfy5gU0wzlVncoDX55I_MxvyBJQHr-Y0H6ydPywA";

//Parámetros de la petición

const parametros={

method:"GET",
headers:{"Authorization":token}

};

// Fetch permite realizar la función de clientes para realizar el llamado de la información que se requiere
fetch(url,parametros)
    .then(respuesta=>respuesta.json())
    .then(datos=>depurarDatos(datos));


function depurarDatos(datos){
    console.log(datos);
    console.log(datos.tracks);
    console.log(datos.tracks[0]);
    console.log(datos.tracks[6].preview_url);
    console.log(datos.tracks[6].name);
};