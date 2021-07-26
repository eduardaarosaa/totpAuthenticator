<?php
include("arohamQR.php");
//otpauth://totp/YOUR_IDENTIFICATION?secret=YOUR_SECRET
//https://developer.fidesmo.com/tutorials/android-totp
$carteira = '123';
$arohamQR = new arohamQR();
echo "<div class='row'>";
echo "<div class='col-md-12' align='center'>";
$arohamQR->text($carteira); // ( TEXT )
echo "<img src='".$arohamQR->get_link()."' border='0' width='180'/>";
echo "</div>";

?>