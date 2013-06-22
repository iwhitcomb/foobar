<?php
/**
 * @file
 * Contains \Drupal\foobar\Form\FoobarForm.
 */

namespace Drupal\foobar\Form;

use Drupal\Core\Form\FormInterface;

class FoobarForm implements FormInterface {

  /**
   * Implements \Drupal\Core\Form\FormInterface::getFormID().
   */
  public function getFormID() {
    return 'foobar_form';
  }
  
  /**
   * Implements \Drupal\Core\Form\FormInterface::buildForm().
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
   * Implements \Drupal\Core\Form\FormInterface::validateForm().
   */
  public function validateForm(array &$form, array &$form_state) {
    if ($form_state['values']['foo'] != 'bar') {
      form_set_error('foo', t('There was an error!'));
    }
  }

  /**
   * Implements \Drupal\Core\Form\FormInterface::submitForm().
   */
  public function submitForm(array &$form, array &$form_state) {
    if ($form_state['values']['op'] == t('Save')) {
      drupal_set_message(t('The form has been saved.'));
    }
  }

}
