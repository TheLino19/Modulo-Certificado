<?php
/* Smarty version 4.1.0, created on 2023-03-11 19:14:26
  from 'app:frontendcomponentssubscri' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640cc502aa86a6_70883712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c06e4b4ec6b330ab184f678c9f0a4ca979611b' => 
    array (
      0 => 'app:frontendcomponentssubscri',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640cc502aa86a6_70883712 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="cmp_subscription_contact">
	 <?php if ($_smarty_tpl->tpl_vars['subscriptionAdditionalInformation']->value) {?>
		<div class="description">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionAdditionalInformation']->value ));?>

		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['subscriptionName']->value || $_smarty_tpl->tpl_vars['subscriptionPhone']->value || $_smarty_tpl->tpl_vars['subscriptionEmail']->value) {?>
		<div class="contact">
			<h3>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.subscriptionsContact"),$_smarty_tpl ) );?>

			</h3>

			<?php if ($_smarty_tpl->tpl_vars['subscriptionName']->value) {?>
				<div class="name">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionName']->value ));?>

				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['subscriptionMailingAddress']->value) {?>
				<div class="address">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( nl2br($_smarty_tpl->tpl_vars['subscriptionMailingAddress']->value) ));?>

				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['subscriptionPhone']->value) {?>
				<div class="phone">
					<span class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.phone"),$_smarty_tpl ) );?>

					</span>
					<span class="value">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionPhone']->value ));?>

					</span>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['subscriptionEmail']->value) {?>
				<div class="email">
					<a href="mailto:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionEmail']->value ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionEmail']->value ));?>

					</a>
				</div>
			<?php }?>
		</div>
	<?php }?>
 </div>
<?php }
}
