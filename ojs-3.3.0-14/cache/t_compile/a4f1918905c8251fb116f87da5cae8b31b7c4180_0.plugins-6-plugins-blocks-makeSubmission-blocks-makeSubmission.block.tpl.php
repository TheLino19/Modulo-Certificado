<?php
/* Smarty version 4.1.0, created on 2023-03-08 16:20:07
  from 'plugins-6-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408a7a78b7468_49433949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4f1918905c8251fb116f87da5cae8b31b7c4180' => 
    array (
      0 => 'plugins-6-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl',
      1 => 1675470470,
      2 => 'plugins-6-plugins-blocks-makeSubmission-blocks-makeSubmission',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408a7a78b7468_49433949 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_make_submission">
	<h2 class="pkp_screen_reader">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.makeSubmission.linkLabel"),$_smarty_tpl ) );?>

	</h2>

	<div class="content">
		<a class="block_make_submission_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"about",'op'=>"submissions"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.makeSubmission.linkLabel"),$_smarty_tpl ) );?>

		</a>
	</div>
</div>
<?php }
}
