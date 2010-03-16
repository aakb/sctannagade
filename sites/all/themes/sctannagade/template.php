<?php
/* Register some theme functions for forms, theme functions
* that have not been registered by the module that created
* these forms...
*/
function sctannagade_theme() {
  return array(
          'contact_mail_page' => array(
                  'arguments' => array('form' => NULL),
                  'template' => 'contact-mail-page',
          ),
  );
}

function sctannagade_preprocess_contact_mail_page(&$vars) {
  $vars['form_markup'] = drupal_render($vars['form']);
}

function sctannagade_user_profile_form($form) {
  $output = '';

  $vars['form']['contact_information']['#value'] = t('We will get back to you with a quote within 48 hours.');
  $vars['form']['message']['#title'] = t('What you need');
  $vars['form']['subject']['#title'] = t('Name of your company');
  $vars['form']['cid']['#value'] = 1;
  $vars['form']['cid']['#prefix'] = '<div style="display:none;">';
  $vars['form']['cid']['#suffix'] = '</div>';
  $vars['template_file'] = 'contact-mail-page-quote';

  $output .= drupal_render($form);
  return $output;
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function sctannagade_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];
  $vars['template_files'][] = 'node-'. $node->nid;
  
  if ($node->type == 'faste_brugere') {
    $tabs = array();
    if ($node->field_description[0]['value'] == '') {
      $tabs[] = t('Descripbtion');
    }
    if (count($node->field_pictures[0]) > 1 ) {
      $tabs[] = t('Pictures');
    }
    if ($node->field_pictures[0]['email'] != NULL) {
      $tabs[] = t('E-mail');
    }
    $tabs = array('test1', 'test2');
    $vars['faste_brugere_tabs'] .= theme('item_list', $tabs);
  }
}

function sctannagade_preprocess_page(&$vars) {
  $node = $vars['node'];
  if ($node->type == 'faste_brugere') {
    $vars['scripts'] .= '<script type="text/javascript" src="/'.drupal_get_path('theme', 'sctannagade').'/js/faste_brugere.js'.'"></script>';
  }
}
