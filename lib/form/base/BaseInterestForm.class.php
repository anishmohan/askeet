<?php

/**
 * Interest form base class.
 *
 * @package    form
 * @subpackage interest
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseInterestForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormPropelSelect(array('model' => 'User', 'add_empty' => false)),
      'question_id' => new sfWidgetFormPropelSelect(array('model' => 'Question', 'add_empty' => false)),
      'created_at'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Interest', 'column' => 'id', 'required' => false)),
      'user_id'     => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id')),
      'question_id' => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'id')),
      'created_at'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('interest[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Interest';
  }


}
