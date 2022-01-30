<?php

/**
 * @file
 * Theme settings form for alz theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function alz_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['alz'] = [
    '#type' => 'details',
    '#title' => t('alz'),
    '#open' => TRUE,
  ];

  $form['alz']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
