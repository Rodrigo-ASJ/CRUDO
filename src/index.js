function limpiar(evt){
    evt.preventDefault();
    
    
    const nombre = document.getElementById("nombre");
    const consulta = document.getElementById("consulta");

    nombre.value="";
    consulta.value=""; 
   
}
