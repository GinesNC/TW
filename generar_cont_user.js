function generarContr(usuario, nombre, apellido) {
  var aux=nombre.concat(apellido); // Juntamos nombre y apellido en una variable
  aux=aux.substring(0,8);
  var sumaUsuario=0;
  for (i=0; i< usuario.length; i++){
    usuario.charCodeAt(i);
    sumaUsuario= sumaUsuario + usuario.charCodeAt(i); //aqui almacenamos la suma del valor ascii del usuario.
  }
  var unDigito=sumaUnDigito(sumaUsuario);


   //return unDigito;
   return alfanumerica(aux, sumaUsuario, unDigito);
   //return String.fromCharCode(65);
}
/*
  La siguiente funcion suma todos los digitos de la sumaUsuario para dejarlos en unidades o decenas.
*/
function sumaUnDigito(sumaUsuario){
  var a = sumaUsuario / 100;
  a = parseInt(a);

  var b = (sumaUsuario - a*100)/10;
  b = parseInt(b);

  var c = sumaUsuario - (a*100+b*10);

  return a+b+c;
}

function alfanumerica(nomApellido, sumaUsuario, sumadigito){
  var clave=[];
  var a=0;
  for (i=0; i<nomApellido.length; i++){
    a= nomApellido.charCodeAt(i);
    if(i%2==0){
      a = a+sumadigito;
    } else a = sumadigito-a;

    //hacer un filtro para que solo muestre mayus, minus

    clave.push(String.fromCharCode(a));

  }

  return clave;

}
