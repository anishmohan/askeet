<?php

/**
 * User form base class.
 *
 * @package    form
 * @subpackage user
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'first_name' => new sfWidgetFormInput(),
      'last_name'  => new sfWidgetFormInput(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id', 'required' => false)),
      'first_name' => new sfValidatorString(array('max_length' => 100)),
      'last_name'  => new sfValidatorString(array('max_length' => 100)),
      'created_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }


}
