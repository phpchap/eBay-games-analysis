<?php

/**
 * EbayGame form base class.
 *
 * @method EbayGame getObject() Returns the current form's model object
 *
 * @package    ebay-games
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEbayGameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'guid'                => new sfWidgetFormInputText(),
      'title'               => new sfWidgetFormInputText(),
      'clean_title'         => new sfWidgetFormInputText(),
      'block_title'         => new sfWidgetFormTextarea(),
      'link'                => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormInputText(),
      'current_price'       => new sfWidgetFormInputText(),
      'end_time'            => new sfWidgetFormInputText(),
      'bid_count'           => new sfWidgetFormInputText(),
      'postage_packing_fee' => new sfWidgetFormInputText(),
      'profile_name'        => new sfWidgetFormInputText(),
      'profile_url'         => new sfWidgetFormInputText(),
      'feedback_score'      => new sfWidgetFormInputText(),
      'title_processed'     => new sfWidgetFormInputText(),
      'platform'            => new sfWidgetFormInputText(),
      'status'              => new sfWidgetFormChoice(array('choices' => array('live' => 'live', 'ended' => 'ended'))),
      'slug'                => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'guid'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'clean_title'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'block_title'         => new sfValidatorString(array('required' => false)),
      'link'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'         => new sfValidatorPass(array('required' => false)),
      'current_price'       => new sfValidatorPass(array('required' => false)),
      'end_time'            => new sfValidatorPass(array('required' => false)),
      'bid_count'           => new sfValidatorPass(array('required' => false)),
      'postage_packing_fee' => new sfValidatorPass(array('required' => false)),
      'profile_name'        => new sfValidatorPass(array('required' => false)),
      'profile_url'         => new sfValidatorPass(array('required' => false)),
      'feedback_score'      => new sfValidatorPass(array('required' => false)),
      'title_processed'     => new sfValidatorPass(array('required' => false)),
      'platform'            => new sfValidatorPass(array('required' => false)),
      'status'              => new sfValidatorChoice(array('choices' => array(0 => 'live', 1 => 'ended'), 'required' => false)),
      'slug'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'EbayGame', 'column' => array('guid'))),
        new sfValidatorDoctrineUnique(array('model' => 'EbayGame', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('ebay_game[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EbayGame';
  }

}
