<?php

/**
 * Question form base class.
 *
 * @package    form
 * @subpackage question
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseQuestionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormPropelSelect(array('model' => 'User', 'add_empty' => false)),
      'title'      => new sfWidgetFormInput(),
      'body'       => new sfWidgetFormInput(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'id', 'required' => false)),
      'user_id'    => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id')),
      'title'      => new sfValidatorString(array('max_length' => 500)),
      'body'       => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }


}
