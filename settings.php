<?php

$GLOBALS['kalkulacka_odchodu_do_duchodu_config'] = parse_ini_file(KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN_DIR . "/config.ini");

if (is_admin()) {
  require_once KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN_DIR . '/admin/admin.php';
} else {
  require_once KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN_DIR . '/front/front.php';
}

