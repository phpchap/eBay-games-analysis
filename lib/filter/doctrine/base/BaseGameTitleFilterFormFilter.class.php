<?php

/**
 * GameTitleFilter filter form base class.
 *
 * @package    ebay-games
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGameTitleFilterFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'filter'     => new sfWidgetFormFilterInput(),
      'num_spaces' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'filter'     => new sfValidatorPass(array('required' => false)),
      'num_spaces' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('game_title_filter_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GameTitleFilter';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'filter'     => 'Text',
      'num_spaces' => 'Number',
    );
  }
}
