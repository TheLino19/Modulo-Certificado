<?php
/* Smarty version 4.1.0, created on 2023-03-08 17:03:42
  from 'plugins-11-plugins-generic-webFeed-generic-webFeed:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b1de82a390_49316764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7209c7d2a137acc29465be9b8a3b1937b6a355' => 
    array (
      0 => 'plugins-11-plugins-generic-webFeed-generic-webFeed:block.tpl',
      1 => 1675470231,
      2 => 'plugins-11-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408b1de82a390_49316764 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_web_feed">
	<h2 class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>
</h2>
	<div class="content">
		<ul>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"gateway",'op'=>"plugin",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "WebFeedGatewayPlugin","atom" ))),$_smarty_tpl ) );?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/atom.svg" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.webfeed.atom.altText"),$_smarty_tpl ) );?>
">
				</a>
			</li>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"gateway",'op'=>"plugin",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "WebFeedGatewayPlugin","rss2" ))),$_smarty_tpl ) );?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/rss20_logo.svg" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.webfeed.rss2.altText"),$_smarty_tpl ) );?>
">
				</a>
			</li>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"gateway",'op'=>"plugin",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "WebFeedGatewayPlugin","rss" ))),$_smarty_tpl ) );?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/rss10_logo.svg" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.webfeed.rss1.altText"),$_smarty_tpl ) );?>
">
				</a>
			</li>
		</ul>
	</div>
</div>
<?php }
}
