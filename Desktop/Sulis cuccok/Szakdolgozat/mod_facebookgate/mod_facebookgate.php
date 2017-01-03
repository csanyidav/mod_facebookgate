<?php

defined ('_JEXEC') or die;
$modulosztály=  htmlspecialchars($params -> get('modulosztály'));
require JModuleHelper::getLayoutPath('mod_facebookgate',$params->get('cimke','default'));