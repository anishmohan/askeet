<?php

/**
 * Answer form base class.
 *
 * @package    form
 * @subpackage answer
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseAnswerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormPropelSelect(array('model' => 'User', 'add_empty' => false)),
      'answer_id'  => new sfWidgetFormPropelSelect(array('model' => 'Answer', 'add_empty' => false)),
      'body'       => new sfWidgetFormInput(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'id', 'required' => false)),
      'user_id'    => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id')),
      'answer_id'  => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'id')),
      'body'       => new sfValidatorString(array('max_length' => 2000)),
      'created_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answer';
  }


}
