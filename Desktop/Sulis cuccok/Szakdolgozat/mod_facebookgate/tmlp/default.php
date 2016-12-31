<?php

define('_JEXEC') or die;
$dokumentum=JFactory::getDocument();
$facebooknév=$parameter ->get('facebook_név');
$url=$parameter ->get('megtekintheto_url');
$valaszto= $parameter ->get('valaszhato_infok');
$szelesseg= $parameter ->get('kontener_sz');
$magasság= $parameter ->get('kontener_m');
$kontener= $parameter ->get('kontener_meret');
?>

<div class="mod_facebookgate <?php echo $modulosztály;?>">

</div>