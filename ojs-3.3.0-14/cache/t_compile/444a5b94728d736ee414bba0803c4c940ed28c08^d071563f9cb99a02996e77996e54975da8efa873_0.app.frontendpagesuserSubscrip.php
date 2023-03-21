<?php
/* Smarty version 4.1.0, created on 2023-03-11 19:14:25
  from 'app:frontendpagesuserSubscrip' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640cc501e028a0_07803512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd071563f9cb99a02996e77996e54975da8efa873' => 
    array (
      0 => 'app:frontendpagesuserSubscrip',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/subscriptionContact.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_640cc501e028a0_07803512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\programas\\XAMMP\\htdocs\\ojs-3.3.0-14\\ojs-3.3.0-14\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"user.subscriptions.mySubscriptions"), 0, false);
?>

<div class="page page_user_subscriptions">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"user.subscriptions.mySubscriptions"), 0, false);
?>
	<h1>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.mySubscriptions"),$_smarty_tpl ) );?>

	</h1>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/subscriptionContact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
		<div class="my_subscription_payments">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.subscriptionStatus"),$_smarty_tpl ) );?>
</h3>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.statusInformation"),$_smarty_tpl ) );?>
</p>
			<table class="cmp_table">
				<tr>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.status"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.statusDescription"),$_smarty_tpl ) );?>
</th>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.needsInformation"),$_smarty_tpl ) );?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.status.needsInformationDescription"),$_smarty_tpl ) );?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.needsApproval"),$_smarty_tpl ) );?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.status.needsApprovalDescription"),$_smarty_tpl ) );?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.awaitingManualPayment"),$_smarty_tpl ) );?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.status.awaitingManualPaymentDescription"),$_smarty_tpl ) );?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.awaitingOnlinePayment"),$_smarty_tpl ) );?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.status.awaitingOnlinePaymentDescription"),$_smarty_tpl ) );?>
</td>
				</tr>
			</table>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['individualSubscriptionTypesExist']->value) {?>
		<div class="my_subscription_individual">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.individualSubscriptions"),$_smarty_tpl ) );?>
</h3>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.individualDescription"),$_smarty_tpl ) );?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['userIndividualSubscription']->value) {?>
				<table class="cmp_table">
					<tr>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.form.typeId"),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status"),$_smarty_tpl ) );?>
</th>
						<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
							<th></th>
						<?php }?>
					</tr>
					<tr>
						<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getSubscriptionTypeName() ));?>
</td>
						<td>
							<?php $_smarty_tpl->_assignInScope('subscriptionStatus', $_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getStatus());?>
							<?php $_smarty_tpl->_assignInScope('isNonExpiring', $_smarty_tpl->tpl_vars['userIndividualSubscription']->value->isNonExpiring());?>
							<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value && $_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') ? constant('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') : null)) {?>
								<span class="subscription_disabled">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.awaitingOnlinePayment"),$_smarty_tpl ) );?>

								</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['paymentsEnabled']->value && $_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_AWAITING_MANUAL_PAYMENT') ? constant('SUBSCRIPTION_STATUS_AWAITING_MANUAL_PAYMENT') : null)) {?>
								<span class="subscription_disabled">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.awaitingManualPayment"),$_smarty_tpl ) );?>

								</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['subscriptionStatus']->value != (defined('SUBSCRIPTION_STATUS_ACTIVE') ? constant('SUBSCRIPTION_STATUS_ACTIVE') : null)) {?>
								<span class="subscription_disabled">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.inactive"),$_smarty_tpl ) );?>

								</span>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['isNonExpiring']->value) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptionTypes.nonExpiring"),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('isExpired', $_smarty_tpl->tpl_vars['userIndividualSubscription']->value->isExpired());?>
									<?php if ($_smarty_tpl->tpl_vars['isExpired']->value) {?>
										<span class="subscription_disabled">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.expired",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getDateEnd(),$_smarty_tpl->tpl_vars['dateFormatShort']->value)),$_smarty_tpl ) );?>

										</span>
									<?php } else { ?>
										<span class="subscription_active">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.expires",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getDateEnd(),$_smarty_tpl->tpl_vars['dateFormatShort']->value)),$_smarty_tpl ) );?>

										</span>
									<?php }?>
								<?php }?>
							<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') ? constant('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') : null)) {?>
									<a class="cmp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"completePurchaseSubscription",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "individual",$_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getId() ))),$_smarty_tpl ) );?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.purchase"),$_smarty_tpl ) );?>

									</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_ACTIVE') ? constant('SUBSCRIPTION_STATUS_ACTIVE') : null)) {?>
									<?php if (!$_smarty_tpl->tpl_vars['isNonExpiring']->value) {?>
										<a class="cmp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"payRenewSubscription",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "individual",$_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getId() ))),$_smarty_tpl ) );?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.renew"),$_smarty_tpl ) );?>

										</a>
									<?php }?>
									<a class="cmp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"purchaseSubscription",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "individual",$_smarty_tpl->tpl_vars['userIndividualSubscription']->value->getId() ))),$_smarty_tpl ) );?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.purchase"),$_smarty_tpl ) );?>

									</a>
								<?php }?>
							</td>
						<?php }?>
					</tr>
				</table>
			<?php } elseif ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
				<p>
					<a class="action" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"purchaseSubscription",'path'=>"individual"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.purchaseNewSubscription"),$_smarty_tpl ) );?>

					</a>
				</p>
			<?php } else { ?>
				<p>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"subscriptions",'anchor'=>"subscriptionTypes"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.viewSubscriptionTypes"),$_smarty_tpl ) );?>

					</a>
				</p>
			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['institutionalSubscriptionTypesExist']->value) {?>
		<div class="my_subscriptions_institutional">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.institutionalSubscriptions"),$_smarty_tpl ) );?>
</h3>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.institutionalDescription"),$_smarty_tpl ) );?>

				<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.institutionalOnlinePaymentDescription"),$_smarty_tpl ) );?>

				<?php }?>
			</p>
			<?php if ($_smarty_tpl->tpl_vars['userInstitutionalSubscriptions']->value) {?>
				<table class="cmp_table">
					<tr>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.form.typeId"),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.form.institutionName"),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status"),$_smarty_tpl ) );?>
</th>
						<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
							<th></th>
						<?php }?>
					</tr>
					<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'userInstitutionalSubscriptions','item'=>'userInstitutionalSubscription'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'userInstitutionalSubscriptions','item'=>'userInstitutionalSubscription'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<tr>
							<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getSubscriptionTypeName() ));?>
</td>
							<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getInstitutionName() ));?>
</td>
							<td>
								<?php $_smarty_tpl->_assignInScope('subscriptionStatus', $_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getStatus());?>
								<?php $_smarty_tpl->_assignInScope('isNonExpiring', $_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->isNonExpiring());?>
								<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value && $_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') ? constant('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') : null)) {?>
									<span class="subscription_disabled">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.awaitingOnlinePayment"),$_smarty_tpl ) );?>

									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['paymentsEnabled']->value && $_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_AWAITING_MANUAL_PAYMENT') ? constant('SUBSCRIPTION_STATUS_AWAITING_MANUAL_PAYMENT') : null)) {?>
									<span class="subscription_disabled">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.awaitingManualPayment"),$_smarty_tpl ) );?>

									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['paymentsEnabled']->value && $_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_NEEDS_APPROVAL') ? constant('SUBSCRIPTION_STATUS_NEEDS_APPROVAL') : null)) {?>
									<span class="subscription_disabled">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.status.needsApproval"),$_smarty_tpl ) );?>

									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['subscriptionStatus']->value != (defined('SUBSCRIPTION_STATUS_ACTIVE') ? constant('SUBSCRIPTION_STATUS_ACTIVE') : null)) {?>
									<span class="subscription_disabled">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptions.inactive"),$_smarty_tpl ) );?>

									</span>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['isNonExpiring']->value) {?>
										<span class="subscription_active">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptionTypes.nonExpiring"),$_smarty_tpl ) );?>

										</span>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('isExpired', $_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->isExpired());?>
										<?php if ($_smarty_tpl->tpl_vars['isExpired']->value) {?>
											<span class="subscription_disabled">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.expired",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getDateEnd(),$_smarty_tpl->tpl_vars['dateFormatShort']->value)),$_smarty_tpl ) );?>

											</span>
										<?php } else { ?>
											<span class="subscription_enabled">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.expires",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getDateEnd(),$_smarty_tpl->tpl_vars['dateFormatShort']->value)),$_smarty_tpl ) );?>

											</span>
										<?php }?>
									<?php }?>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') ? constant('SUBSCRIPTION_STATUS_AWAITING_ONLINE_PAYMENT') : null)) {?>
										<a class="cmp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"completePurchaseSubscription",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "institutional",$_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getId() ))),$_smarty_tpl ) );?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.purchase"),$_smarty_tpl ) );?>

										</a>
									<?php } elseif ($_smarty_tpl->tpl_vars['subscriptionStatus']->value == (defined('SUBSCRIPTION_STATUS_ACTIVE') ? constant('SUBSCRIPTION_STATUS_ACTIVE') : null)) {?>
										<?php if (!$_smarty_tpl->tpl_vars['isNonExpiring']->value) {?>
											<a class="cmp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"payRenewSubscription",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "institutional",$_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getId() ))),$_smarty_tpl ) );?>
">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.renew"),$_smarty_tpl ) );?>

											</a>
										<?php }?>
										<a class="cmp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"purchaseSubscription",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "institutional",$_smarty_tpl->tpl_vars['userInstitutionalSubscription']->value->getId() ))),$_smarty_tpl ) );?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.purchase"),$_smarty_tpl ) );?>

										</a>
									<?php }?>
								</td>
							<?php }?>
						</tr>
					<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'userInstitutionalSubscriptions','item'=>'userInstitutionalSubscription'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</table>
			<?php }?>
			<p>
				<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
					<a class="action" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"purchaseSubscription",'path'=>"institutional"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.purchaseNewSubscription"),$_smarty_tpl ) );?>

					</a>
				<?php } else { ?>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"subscriptions",'anchor'=>"subscriptionTypes"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.subscriptions.viewSubscriptionTypes"),$_smarty_tpl ) );?>

					</a>
				<?php }?>
			</p>
		</div>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
