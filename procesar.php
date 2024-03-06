<?php
if(isset($_POST['marca']) && $_POST['marca'] == 'miValor') {
    echo "El checkbox ha sido seleccionado.";
} else {
    echo "El checkbox no ha sido seleccionado.";
}
?>
