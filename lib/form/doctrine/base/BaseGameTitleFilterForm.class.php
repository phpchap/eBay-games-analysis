<?php

/**
 * GameTitleFilter form base class.
 *
 * @method GameTitleFilter getObject() Returns the current form's model object
 *
 * @package    ebay-games
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGameTitleFilterForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'filter'     => new sfWidgetFormInputText(),
      'num_spaces' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'filter'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'num_spaces' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('game_title_filter[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GameTitleFilter';
  }

}
