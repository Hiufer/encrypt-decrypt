<?php 
$simple_string = $_POST['texto'];

crearDatoEncriptado($simple_string);
 
function crearDatoEncriptado($simple_string){
    $jsondata     = array();
    // Asignamos el tipo de metodo, en este caso el de 128 bits 
    $ciphering = "AES-128-CTR"; 
    
    // Se usa el metodo de ecriptación OpenSSl
    $iv_length = openssl_cipher_iv_length($ciphering); 
    $options = 0; 
    
    // Iniciamos el valor de encriptación como no nulo 
    $encryption_iv = '1234567891011121'; 
    
    // Colocamos la clave de encriptación
    $encryption_key = "SegundoParcialSeguridadInformatica"; 
    
    // Usamos openssl_encrypt() la función para encriptar los datos 
    $encryption = openssl_encrypt($simple_string, $ciphering, 
                $encryption_key, $options, $encryption_iv); 
    
    // Enviamos el texto codificado
    $jsondata['encryption'] =   $encryption;
	echo json_encode($jsondata);
}
?> 