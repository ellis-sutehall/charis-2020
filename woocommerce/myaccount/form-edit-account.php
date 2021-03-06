<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
					<input type="text" class="input woocommerce-Input woocommerce-Input--text input-text" placeholder="First Name*" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
					<span class="icon is-small is-left">
						<i class="fas fa-user"></i>
					</span>
				</p>
			</div>
		</div>
		<div class="column is-half">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
					<input type="text" class="input woocommerce-Input woocommerce-Input--text input-text" placeholder="Last Name*" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
					<span class="icon is-small is-left">
						<i class="fas fa-user"></i>
					</span>
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
				<input type="text" class="input woocommerce-Input woocommerce-Input--text input-text" placeholder="Display Name*" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> <span><em><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); ?></em></span>
					<span class="icon is-small is-left">
						<i class="fas fa-user"></i>
					</span>
				</p>
			</div>
		</div>
		<div class="column is-half">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<input type="email" class="input woocommerce-Input woocommerce-Input--email input-text" placeholder="Email Address" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
					<span class="icon is-small is-left">
						<i class="fas fa-envelope"></i>
					</span>
				</p>
			</div>
		</div>
	</div>

	<h4 class="title is-4">Change Password</h4>

	<div class="columns">
		<div class="column is-one-third">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<input type="password" class="input woocommerce-Input woocommerce-Input--password input-text" placeholder="Current Password (leave blank to leave unchanged)" name="password_current" id="password_current" autocomplete="off" />
					<span class="icon is-small is-left">
						<i class="fas fa-lock"></i>
					</span>
				</p>
			</div>
		</div>
		<div class="column is-one-third">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<input type="password" class="input woocommerce-Input woocommerce-Input--password input-text" placeholder="New Password (leave blank to leave unchanged)" name="password_1" id="password_1" autocomplete="off" />
					<span class="icon is-small is-left">
						<i class="fas fa-lock"></i>
					</span>
				</p>
			</div>
		</div>
		<div class="column is-one-third">
			<div class="field">
				<p class="control has-icons-left woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<input type="password" class="input woocommerce-Input woocommerce-Input--password input-text" placeholder="Confirm New Password" name="password_2" id="password_2" autocomplete="off" />
					<span class="icon is-small is-left">
						<i class="fas fa-lock"></i>
					</span>
				</p>
			</div>
		</div>
	</div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<div>
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="is-secondary woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	</div>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
