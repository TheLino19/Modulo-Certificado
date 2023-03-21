<?php
/* Smarty version 4.1.0, created on 2023-03-08 16:20:07
  from 'plugins-6-plugins-generic-recommendBySimilarity-generic-recommendBySimilarity:articleFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408a7a7599310_25806219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d34959114984de7e5c0152b977627310e621a6' => 
    array (
      0 => 'plugins-6-plugins-generic-recommendBySimilarity-generic-recommendBySimilarity:articleFooter.tpl',
      1 => 1675470231,
      2 => 'plugins-6-plugins-generic-recommendBySimilarity-generic-recommendBySimilarity',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408a7a7599310_25806219 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="articlesBySimilarityList">
	<?php if (!$_smarty_tpl->tpl_vars['articlesBySimilarity']->value->wasEmpty()) {?>
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendBySimilarity.heading"),$_smarty_tpl ) );?>
</h3>

		<ul>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'articlesBySimilarity','item'=>'articleBySimilarity'));
$_block_repeat=true;
echo $_block_plugin2->smartyIterate(array('from'=>'articlesBySimilarity','item'=>'articleBySimilarity'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->_assignInScope('submission', $_smarty_tpl->tpl_vars['articleBySimilarity']->value['publishedSubmission']);?>
				<?php $_smarty_tpl->_assignInScope('article', $_smarty_tpl->tpl_vars['articleBySimilarity']->value['article']);?>
				<?php $_smarty_tpl->_assignInScope('issue', $_smarty_tpl->tpl_vars['articleBySimilarity']->value['issue']);?>
				<?php $_smarty_tpl->_assignInScope('journal', $_smarty_tpl->tpl_vars['articleBySimilarity']->value['journal']);?>
				<li>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
,
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['submission']->value->getBestId()),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

					</a>,
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName() ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

					</a>
				</li>
			<?php $_block_repeat=false;
echo $_block_plugin2->smartyIterate(array('from'=>'articlesBySimilarity','item'=>'articleBySimilarity'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</ul>
		<p id="articlesBySimilarityPages">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"articlesBySimilarity",'iterator'=>$_smarty_tpl->tpl_vars['articlesBySimilarity']->value,'name'=>"articlesBySimilarity"),$_smarty_tpl ) );?>

		</p>
		<p id="articlesBySimilaritySearch">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "advancedSearchLink", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search",'op'=>"search",'query'=>$_smarty_tpl->tpl_vars['articlesBySimilarityQuery']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendBySimilarity.advancedSearch"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendBySimilarity.advancedSearchIntro",'advancedSearchLink'=>$_smarty_tpl->tpl_vars['advancedSearchLink']->value),$_smarty_tpl ) );?>

		</p>
	<?php }?>
</div>
<?php }
}
