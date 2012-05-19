<?php

/**
 * EbayGame filter form base class.
 *
 * @package    ebay-games
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEbayGameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'               => new sfWidgetFormFilterInput(),
      'block_title'         => new sfWidgetFormFilterInput(),
      'link'                => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
      'current_price'       => new sfWidgetFormFilterInput(),
      'end_time'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'bid_count'           => new sfWidgetFormFilterInput(),
      'game_hash'           => new sfWidgetFormFilterInput(),
      'postage_packing_fee' => new sfWidgetFormFilterInput(),
      'profile_name'        => new sfWidgetFormFilterInput(),
      'profile_url'         => new sfWidgetFormFilterInput(),
      'feedback_score'      => new sfWidgetFormFilterInput(),
      'title_processed'     => new sfWidgetFormFilterInput(),
      'platform'            => new sfWidgetFormFilterInput(),
      'slug'                => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'               => new sfValidatorPass(array('required' => false)),
      'block_title'         => new sfValidatorPass(array('required' => false)),
      'link'                => new sfValidatorPass(array('required' => false)),
      'description'         => new sfValidatorPass(array('required' => false)),
      'current_price'       => new sfValidatorPass(array('required' => false)),
      'end_time'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'bid_count'           => new sfValidatorPass(array('required' => false)),
      'game_hash'           => new sfValidatorPass(array('required' => false)),
      'postage_packing_fee' => new sfValidatorPass(array('required' => false)),
      'profile_name'        => new sfValidatorPass(array('required' => false)),
      'profile_url'         => new sfValidatorPass(array('required' => false)),
      'feedback_score'      => new sfValidatorPass(array('required' => false)),
      'title_processed'     => new sfValidatorPass(array('required' => false)),
      'platform'            => new sfValidatorPass(array('required' => false)),
      'slug'                => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ebay_game_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EbayGame';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'title'               => 'Text',
      'block_title'         => 'Text',
      'link'                => 'Text',
      'description'         => 'Text',
      'current_price'       => 'Text',
      'end_time'            => 'Date',
      'bid_count'           => 'Text',
      'game_hash'           => 'Text',
      'postage_packing_fee' => 'Text',
      'profile_name'        => 'Text',
      'profile_url'         => 'Text',
      'feedback_score'      => 'Text',
      'title_processed'     => 'Text',
      'platform'            => 'Text',
      'slug'                => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
