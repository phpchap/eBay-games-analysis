<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id ui-state-default ui-th-column">
  <?php if ('id' == $sort[0]): ?>
    <?php /*echo link_to(__('Id', array(), 'messages'), '@top_game?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Id', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Id', array(), 'messages'), '@top_game?sort=id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Id', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_title ui-state-default ui-th-column">
  <?php if ('title' == $sort[0]): ?>
    <?php /*echo link_to(__('Title', array(), 'messages'), '@top_game?sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Title', array(), 'messages'), '@top_game?sort=title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_block_title ui-state-default ui-th-column">
  <?php if ('block_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Block title', array(), 'messages'), '@top_game?sort=block_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=block_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Block title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Block title', array(), 'messages'), '@top_game?sort=block_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=block_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Block title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_meta_critic_score ui-state-default ui-th-column">
  <?php if ('meta_critic_score' == $sort[0]): ?>
    <?php /*echo link_to(__('Meta critic score', array(), 'messages'), '@top_game?sort=meta_critic_score&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=meta_critic_score&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Meta critic score', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Meta critic score', array(), 'messages'), '@top_game?sort=meta_critic_score&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=meta_critic_score&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Meta critic score', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_platform ui-state-default ui-th-column">
  <?php if ('platform' == $sort[0]): ?>
    <?php /*echo link_to(__('Platform', array(), 'messages'), '@top_game?sort=platform&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=platform&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Platform', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Platform', array(), 'messages'), '@top_game?sort=platform&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=platform&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Platform', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_cex_buy_price ui-state-default ui-th-column">
  <?php if ('cex_buy_price' == $sort[0]): ?>
    <?php /*echo link_to(__('Cex buy price', array(), 'messages'), '@top_game?sort=cex_buy_price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=cex_buy_price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Cex buy price', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Cex buy price', array(), 'messages'), '@top_game?sort=cex_buy_price&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=cex_buy_price&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Cex buy price', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_cex_sell_price ui-state-default ui-th-column">
  <?php if ('cex_sell_price' == $sort[0]): ?>
    <?php /*echo link_to(__('Cex sell price', array(), 'messages'), '@top_game?sort=cex_sell_price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=cex_sell_price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Cex sell price', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Cex sell price', array(), 'messages'), '@top_game?sort=cex_sell_price&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=cex_sell_price&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Cex sell price', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_cex_ex_price ui-state-default ui-th-column">
  <?php if ('cex_ex_price' == $sort[0]): ?>
    <?php /*echo link_to(__('Cex ex price', array(), 'messages'), '@top_game?sort=cex_ex_price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=cex_ex_price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Cex ex price', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Cex ex price', array(), 'messages'), '@top_game?sort=cex_ex_price&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=cex_ex_price&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Cex ex price', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_enum sf_admin_list_th_status ui-state-default ui-th-column">
  <?php if ('status' == $sort[0]): ?>
    <?php /*echo link_to(__('Status', array(), 'messages'), '@top_game?sort=status&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=status&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Status', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Status', array(), 'messages'), '@top_game?sort=status&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=status&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Status', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_slug ui-state-default ui-th-column">
  <?php if ('slug' == $sort[0]): ?>
    <?php /*echo link_to(__('Slug', array(), 'messages'), '@top_game?sort=slug&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=slug&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Slug', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Slug', array(), 'messages'), '@top_game?sort=slug&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=slug&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Slug', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_created_at ui-state-default ui-th-column">
  <?php if ('created_at' == $sort[0]): ?>
    <?php /*echo link_to(__('Created at', array(), 'messages'), '@top_game?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Created at', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Created at', array(), 'messages'), '@top_game?sort=created_at&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=created_at&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Created at', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_updated_at ui-state-default ui-th-column">
  <?php if ('updated_at' == $sort[0]): ?>
    <?php /*echo link_to(__('Updated at', array(), 'messages'), '@top_game?sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@top_game?sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Updated at', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Updated at', array(), 'messages'), '@top_game?sort=updated_at&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@top_game?sort=updated_at&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Updated at', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>