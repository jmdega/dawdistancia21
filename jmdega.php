<?php



/**

 * Devuelve cualquier cosa porque esta función es de pega

 *

 * @author jmdega

 * @version 1.2

 * @param string $param1 la cadena que queramos

 * @return string $param2 Devolveremos una cadena con un añadido

 * @access private

 * @param string $claveprivada contraseña que no debe verse

 */

function funcionInventada1($param1)

{



  echo "Hola Mundo";

  $param2 = "Hola Mundo ".($param1);

  return $param2;

}



/**

 * Esta función devuelve un número mágico multiplicando la edad por 23

 *

 * @author jmdega

 * @param integer $edad

 * @return integer $puntos  devolvemos un número

 * @version 1.3

 * @access private

 * @param boolean $suerte que no se ve

*/

function funcionInventada2($edad)

{

  echo "Tu edad es ".$edad;

  $puntos = $edad * 23;

  return $puntos;

}



/**

 * Aquí empezamos a invocar funciones

 * @access public

*/

echo "Tus puntos son :".funcionInventada2(54);

echo "La cadena queda :".funcionInventada1("amigo");



?>