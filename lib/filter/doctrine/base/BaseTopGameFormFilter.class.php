<?php

/**
 * TopGame filter form base class.
 *
 * @package    ebay-games
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTopGameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'             => new sfWidgetFormFilterInput(),
      'block_title'       => new sfWidgetFormFilterInput(),
      'meta_critic_score' => new sfWidgetFormFilterInput(),
      'platform'          => new sfWidgetFormFilterInput(),
      'cex_buy_price'     => new sfWidgetFormFilterInput(),
      'cex_sell_price'    => new sfWidgetFormFilterInput(),
      'cex_ex_price'      => new sfWidgetFormFilterInput(),
      'status'            => new sfWidgetFormChoice(array('choices' => array('' => '', 'live' => 'live', 'disabled' => 'disabled'))),
      'slug'              => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'             => new sfValidatorPass(array('required' => false)),
      'block_title'       => new sfValidatorPass(array('required' => false)),
      'meta_critic_score' => new sfValidatorPass(array('required' => false)),
      'platform'          => new sfValidatorPass(array('required' => false)),
      'cex_buy_price'     => new sfValidatorPass(array('required' => false)),
      'cex_sell_price'    => new sfValidatorPass(array('required' => false)),
      'cex_ex_price'      => new sfValidatorPass(array('required' => false)),
      'status'            => new sfValidatorChoice(array('required' => false, 'choices' => array('live' => 'live', 'disabled' => 'disabled'))),
      'slug'              => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('top_game_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TopGame';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'title'             => 'Text',
      'block_title'       => 'Text',
      'meta_critic_score' => 'Text',
      'platform'          => 'Text',
      'cex_buy_price'     => 'Text',
      'cex_sell_price'    => 'Text',
      'cex_ex_price'      => 'Text',
      'status'            => 'Enum',
      'slug'              => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
