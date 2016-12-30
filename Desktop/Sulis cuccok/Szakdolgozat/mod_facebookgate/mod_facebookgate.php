<?php

defined ('_JEXEC') or die;
$modulosztály=  htmlspecialchars($parameter -> get($modulosztály));
require JModuleHelper::getLayoutPath('mod_facebookgate',$parameter->get('cimke','default'));