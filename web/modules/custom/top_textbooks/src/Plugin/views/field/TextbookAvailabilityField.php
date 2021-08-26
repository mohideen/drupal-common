<?php

/**
 * @file
 * Definition of Drupal\top_textbooks\Plugin\views\field\TextbookAvailabilityField
 */

namespace Drupal\top_textbooks\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Field handler to display the textbook availability
 * 
 * @ingroup views_field_handler
 * 
 * @ViewsField("textbook_availability_field")
 */
class TextbookAvailabilityField extends FieldPluginBase {

  /**
   * @{inheritdoc}
   */
  public function query() {
    // Leave empty to avoid a query on this field.
  }

  protected function defineOptions() {
    return parent::defineOptions();
  }

  /**
   * Build the options form
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_data) {
    parent::buildOptionsForm($form, $form_data);
  }

  /**
   * @{inheritdoc}
   */
  public function render(ResultRow $values) {
    // return t('TODO: Show Availability');
    return [
      '#theme' => 'textbook_availability_field',
      '#textbook_count' => t('2'),
      '#textbook_mindue' => t(''),
      '#textbook_sysnum' => t('123'),
    ];
  }

}