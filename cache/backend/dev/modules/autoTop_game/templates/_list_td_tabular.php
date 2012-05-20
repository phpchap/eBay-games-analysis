<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($top_game->getId(), 'top_game_edit', $top_game) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $top_game->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_block_title">
  <?php echo $top_game->getBlockTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_meta_critic_score">
  <?php echo $top_game->getMetaCriticScore() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_platform">
  <?php echo $top_game->getPlatform() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cex_buy_price">
  <?php echo $top_game->getCexBuyPrice() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cex_sell_price">
  <?php echo $top_game->getCexSellPrice() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cex_ex_price">
  <?php echo $top_game->getCexExPrice() ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_status">
  <?php echo $top_game->getStatus() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $top_game->getSlug() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($top_game->getCreatedAt()) ? format_date($top_game->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($top_game->getUpdatedAt()) ? format_date($top_game->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
