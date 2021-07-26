<?php
$codigo = $_POST['codigo'];
$otp = $_POST['otp'];

if($codigo === $otp ) {
    echo "<script>
            alert('Código Válidao com sucesso!');
          </script>";
}else{
    echo "<script>
            alert('Código Inválido!Por favor verifique novamente!');
          </script>";
}
