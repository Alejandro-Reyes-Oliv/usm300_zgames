// ESTE ARCHIVO VA A TENER LAS OPERACIONS TIPICAS PARA COMUNICARSE CON EL CONTROLADOR

//getConsolas
const getConsolas = async ()=>{
    //Al tener que hacer una peticion al servidor, tiene que llevar el asynv
    let resp = await axios.get("api/consolas/get");
    //Aca se trae la lista de consolas que esta en la base de datos
    return resp.data;

};
//crearConsola

const crearConsola = async (consola)=>{ //arrow functions (=>) para ahorrarse el poner function
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data; //las cosas que manda php vienen en data
    
    //Cada vez que tenga un post en api, hay que hacer esto, de manera igual.
};

const eliminarConsola = async (id)=>{
    try{
        let resp = await axios.post("api/consolas/delete", {id}, {
            headers:{
                "Content-Type": "aplication/json"
            }
        });
        return resp.data == "ok"
    }catch(e){
        return false;
    }

}
    
    