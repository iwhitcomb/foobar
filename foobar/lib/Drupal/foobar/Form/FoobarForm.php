<?php

/**
 * @file
 * Contains \Drupal\foobar\Form\FoobarForm.
 */

namespace Drupal\foobar\Form;

use Drupal\Core\Form\FormInterface;

/**
 * @todo.
 */
class FoobarForm implements FormInterface {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'foobar_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $form['foo'] = array(
      '#type' => 'select',
      '#title' => t('Foo'),
      '#default_value' => 'bar',
      '#options' => array(
        'foo' => t('Foo'),
        'bar' => t('Bar'),
      ),
      '#required' => TRUE,
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#name' => 'op',
      '#type' => 'submit',
      '#value' => t('Save'),
      '#button_type' => 'primary',
    );
    $form['actions']['cancel'] = array(
      '#name' => 'op',
      '#type' => 'submit',
      '#value' => t('Cancel'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    if ($form_state['values']['foo'] != 'bar') {
      form_set_error('foo', t('There was an error!'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    if ($form_state['values']['op'] == t('Save')) {
      drupal_set_message(t('The form has been saved.'));
    }
  }

}
