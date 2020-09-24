<?php 
$encryption = $_POST['texto'];

crearDatoDesencriptado($encryption);

function crearDatoDesencriptado($encryption){
    $jsondata     = array();
    // Asignamos el tipo de metodo, en este caso el de 128 bits 
    $ciphering = "AES-128-CTR"; 
    
    // Se usa el metodo de ecriptación OpenSSl
    $iv_length = openssl_cipher_iv_length($ciphering); 
    $options = 0; 
    // Iniciamos el valor de encriptación como no nulo 
    $decryption_iv = '1234567891011121';
    
    // Colocamos la clave de encriptación
    $decryption_key = "SegundoParcialSeguridadInformatica"; 
    
    // Usamos openssl_decrypt() para desencriptar la data 
    $decryption=openssl_decrypt ($encryption, $ciphering,  
            $decryption_key, $options, $decryption_iv); 
    
    // Enviamos el texto decodificado
    $jsondata['decryption'] =   $decryption;
	echo json_encode($jsondata);
}  
?> 