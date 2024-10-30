<?php
add_action('admin_menu', 'kalkulacka_odchodu_do_duchodu_admin_actions');

add_filter('plugin_action_links_kalkulacka_odchodu_do_duchodu/kalkulacka.php', '_kalkulacka_odchodu_do_duchodu_plugin_action_links');

function kalkulacka_odchodu_do_duchodu_admin_actions() {
  add_options_page('KALKULACKA_ODCHODU_DO_DUCHODU', $GLOBALS['kalkulacka_odchodu_do_duchodu_config']['plugin_name'], 'manage_options', __FILE__, 'kalkulacka_odchodu_do_duchodu_admin');
}

function _kalkulacka_odchodu_do_duchodu_plugin_action_links($links) {
  $links[] = '<a href="' . esc_url(kalkulacka_odchodu_do_duchodu_get_page_url()) . '">Nastavení</a>';
  return $links;
}

function kalkulacka_odchodu_do_duchodu_get_page_url() {

  $args = array('page' => 'kalkulacka_odchodu_do_duchodu/admin/admin');

  $url = add_query_arg($args, admin_url('options-general.php'));

  return $url;
}

function kalkulacka_odchodu_do_duchodu_admin() {
  if (isset($_POST['submit'])) {
    check_admin_referer($GLOBALS['kalkulacka_odchodu_do_duchodu_config']['shortcode']);
    $settings = array(
        'width' => (int)$_POST['width'],
        'height' => (int)$_POST['height'],
    );
    update_option('kalkulacka_odchodu_do_duchodu_settings', $settings);
  } else if (get_option('kalkulacka_odchodu_do_duchodu_settings')) {
    $settings = get_option('kalkulacka_odchodu_do_duchodu_settings');
  } else {
    $settings = array(
        'width' => $GLOBALS['kalkulacka_odchodu_do_duchodu_config']['width'],
        'height' => $GLOBALS['kalkulacka_odchodu_do_duchodu_config']['height'],
    );
  }
  ?>
  <div class="wrap">
    <h2><?php echo($GLOBALS['kalkulacka_odchodu_do_duchodu_config']['plugin_name']); ?></h2>
    <form action="" method="POST">
      <table class="form-table">
        <tbody>
          <?php wp_nonce_field($GLOBALS['kalkulacka_odchodu_do_duchodu_config']['shortcode']); ?>
          <tr>
            <th scope="row">
              <label for="width">Šířka</label>
            </th>
            <td>
              <input type="number" min="0" name="width" id="width" class="regular-text" value="<?php echo($settings['width']); ?>">
            </td>
          </tr>
          <tr>
            <th scope="row">
              <label for="height">Výška</label>
            </th>
            <td>
              <input type="number" min="0" name="height" id="height" class="regular-text" value="<?php echo($settings['height']); ?>">
            </td>
          </tr>
        </tbody>
      </table>
      <p class="submit">
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Save">
      </p>
    </form>
    <p>Shortcode pro vložení na stránku je <strong>[<?php echo($GLOBALS['kalkulacka_odchodu_do_duchodu_config']['shortcode']); ?>]</strong>.</p>
  </div>
  <?php
}
