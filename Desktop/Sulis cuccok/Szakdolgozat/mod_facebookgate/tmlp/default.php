<?php

define('_JEXEC') or die;
$dokumentum=JFactory::getDocument();
$facebooknév=$parameter ->get('facebook_név');
$url=$parameter ->get('megtekintheto_url');
$valaszto= $parameter ->get('valaszhato_infok');
$szelesseg= $parameter ->get('kontener_sz');
$magasság= $parameter ->get('kontener_m');
$kontener= $parameter ->get('oroklott_kontener_szelesseg');
?>

<div class="mod_facebookgate <?php echo $modulosztály;?>">
    <div class="fb-page" 
         data-href="<?php echo $url;?>" 
         data-tabs="<?php echo $valaszto;?>"
         data-width="<?php echo $szelesseg;?>"
         data-height="<?php echo $magasság;?>"
         data-adopt-container-width="<?php echo $kontener;?>">
    </div>
</div>
<script>
    (function(dok)
    { var valtozo, valtozoface= dok.getElementsByTagName("script") [0];
      if (dok.getElementsByTagName("facebook-jssdk")) return;
      valtozo= dok.createElement("script"); valtozo.id="facebook-jssdk";
      valtozo.src= "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.5&appId=262562957268319";
      valtozoface.parentNode.insertBefore(valtozo,valtozoface);
    }(dokumentum));
</script>