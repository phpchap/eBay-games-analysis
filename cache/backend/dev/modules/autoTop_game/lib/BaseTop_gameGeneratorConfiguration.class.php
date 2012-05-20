<?php

/**
 * top_game module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage top_game
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BaseTop_gameGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
		//  added show view
	  // return array(  '_delete' => NULL,  '_list' => NULL,  '_show' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  
    return array();
  }

  public function getListObjectActions()
  {
		// =============== Added show view
	  return array(  '_show' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
  
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%title%% - %%block_title%% - %%meta_critic_score%% - %%platform%% - %%cex_buy_price%% - %%cex_sell_price%% - %%cex_ex_price%% - %%status%% - %%slug%% - %%created_at%% - %%updated_at%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Top game List';
  }

  public function getEditTitle()
  {
    return 'Edit Top game';
  }

  public function getNewTitle()
  {
    return 'New Top game';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'title',  2 => 'block_title',  3 => 'meta_critic_score',  4 => 'platform',  5 => 'cex_buy_price',  6 => 'cex_sell_price',  7 => 'cex_ex_price',  8 => 'status',  9 => 'slug',  10 => 'created_at',  11 => 'updated_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'block_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'meta_critic_score' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'platform' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cex_buy_price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cex_sell_price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cex_ex_price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'block_title' => array(),
      'meta_critic_score' => array(),
      'platform' => array(),
      'cex_buy_price' => array(),
      'cex_sell_price' => array(),
      'cex_ex_price' => array(),
      'status' => array(),
      'slug' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'block_title' => array(),
      'meta_critic_score' => array(),
      'platform' => array(),
      'cex_buy_price' => array(),
      'cex_sell_price' => array(),
      'cex_ex_price' => array(),
      'status' => array(),
      'slug' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'block_title' => array(),
      'meta_critic_score' => array(),
      'platform' => array(),
      'cex_buy_price' => array(),
      'cex_sell_price' => array(),
      'cex_ex_price' => array(),
      'status' => array(),
      'slug' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'block_title' => array(),
      'meta_critic_score' => array(),
      'platform' => array(),
      'cex_buy_price' => array(),
      'cex_sell_price' => array(),
      'cex_ex_price' => array(),
      'status' => array(),
      'slug' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'block_title' => array(),
      'meta_critic_score' => array(),
      'platform' => array(),
      'cex_buy_price' => array(),
      'cex_sell_price' => array(),
      'cex_ex_price' => array(),
      'status' => array(),
      'slug' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'block_title' => array(),
      'meta_critic_score' => array(),
      'platform' => array(),
      'cex_buy_price' => array(),
      'cex_sell_price' => array(),
      'cex_ex_price' => array(),
      'status' => array(),
      'slug' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'TopGameForm';
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'TopGameFormFilter';
  }

	  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();
    return $configuration;
  }

  protected function compile()
  {
    parent::compile();
    
    $config = $this->getConfig();
    
    // add configuration for the show view 
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                          'display'        => $this->getShowDisplay(),
                                        ) ;

    foreach (array('show') as $context)
    {
      foreach ($this->configuration[$context]['actions'] as $action => $parameters)
      {
        $this->configuration[$context]['actions'][$action] = $this->fixActionParameters($action, $parameters);
      }
    }


  }

  public function getShowActions()
  {
    return array(  '_list' => NULL,  '_edit' => NULL, '_delete' => NULL);
  }

  
  public function getShowTitle()
  {
    return 'View Top game';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'title',  2 => 'block_title',  3 => 'meta_critic_score',  4 => 'platform',  5 => 'cex_buy_price',  6 => 'cex_sell_price',  7 => 'cex_ex_price',  8 => 'status',  9 => 'slug',  10 => 'created_at',  11 => 'updated_at',);
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getConnection()
  {
    return null;
  }
}
