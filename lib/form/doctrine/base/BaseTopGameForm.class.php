<?php

/**
 * TopGame form base class.
 *
 * @method TopGame getObject() Returns the current form's model object
 *
 * @package    ebay-games
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTopGameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'title'             => new sfWidgetFormInputText(),
      'block_title'       => new sfWidgetFormInputText(),
      'meta_critic_score' => new sfWidgetFormInputText(),
      'platform'          => new sfWidgetFormInputText(),
      'cex_buy_price'     => new sfWidgetFormInputText(),
      'cex_sell_price'    => new sfWidgetFormInputText(),
      'cex_ex_price'      => new sfWidgetFormInputText(),
      'status'            => new sfWidgetFormChoice(array('choices' => array('live' => 'live', 'disabled' => 'disabled'))),
      'slug'              => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'block_title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_critic_score' => new sfValidatorPass(array('required' => false)),
      'platform'          => new sfValidatorPass(array('required' => false)),
      'cex_buy_price'     => new sfValidatorPass(array('required' => false)),
      'cex_sell_price'    => new sfValidatorPass(array('required' => false)),
      'cex_ex_price'      => new sfValidatorPass(array('required' => false)),
      'status'            => new sfValidatorChoice(array('choices' => array(0 => 'live', 1 => 'disabled'), 'required' => false)),
      'slug'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'TopGame', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('top_game[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TopGame';
  }

}
