<?php
/**
 * @file
 * Contains \Drupal\foobar\Form\FoobarConfigForm.
 */

namespace Drupal\foobar\Form;

use Drupal\system\SystemConfigFormBase;

class FoobarConfigForm extends SystemConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'foobar_systemconfigformbase';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $form = parent::buildForm($form, $form_state);
    $form['foo'] = array(
      '#type' => 'textfield',
      '#title' => t('Foo'),
      '#default_value' => t('Bar'),
      '#required' => TRUE,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    parent::submitForm($form, $form_state);
  }

}
