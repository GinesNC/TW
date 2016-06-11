function generarUser(nombre, apellido,dni) {
  var nombre_2=nombre.substring(0,2); // 2 primeras letras del nombre.
  var apellido_2=apellido.substring(0,2);  // 2 primeras letras del apellido.
  var dni_3=dni.substring(6,9);  // 3 ultimas dni

  var aux = nombre_2.concat(apellido_2);
  var sumaUsuario=aux.concat(dni_3);

   return sumaUsuario.toLowerCase();

}

function generarContr(length){
  var i = 0;
  var password = "";
  var aleatorio;

  while(i < length){

    aleatorio = (Math.floor((Math.random() * 100)) % 94) + 33;
    //Math.floor((Math.random() * 100)) devuelve un numero entre 0-99
    //94 es un numero cualquiera para hacer el modulo. Pero si es menor de 50 solo salen mayusculas.
    //33 es para quitar los 33 primeros elementos de la tabla ascii.




      if ((aleatorio >=33) && (aleatorio <=47)) { continue; } //continue se salta la iteracion.para no coger caractes raros

      if ((aleatorio >=58) && (aleatorio <=64)) { continue; }

      if ((aleatorio >=91) && (aleatorio <=96)) { continue; }

      if ((aleatorio >=123) && (aleatorio <=126)) { continue; }



    i++;

    password += String.fromCharCode(aleatorio);

  }

  return password;

}
