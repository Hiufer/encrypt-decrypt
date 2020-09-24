    function encrypt(){
        var texto = document.getElementById('texto1').value;
        $.ajax({
            contentType: "application/x-www-form-urlencoded",
            type: "POST",
            url: "encrypt.php",
            data: ({
                texto: texto       
            }),
            dataType: "json",        
            success: function(data) {                                                       
                document.getElementById("texto2").value = data.encryption;                    
            },
            error:function(){
                alert("Error desconocido");
            }                
        });
    }

    function decrypt(){
        var texto = document.getElementById('texto2').value;
        $.ajax({
            contentType: "application/x-www-form-urlencoded",
            type: "POST",
            url: "decrypt.php",
            data: ({
                texto: texto       
            }),
            dataType: "json",        
            success: function(data) {                                                       
                document.getElementById("texto3").value = data.decryption;                    
            },
            error:function(){
                alert("Error desconocido");
            }                
        });
    }