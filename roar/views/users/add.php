<?php echo $header; ?>

<h1><?php echo __('users.add_user', 'Add a new user'); ?></h1>

<section class="content">
	<?php echo $messages; ?>

	<form method="post" action="<?php echo url('users/add'); ?>" novalidate autocomplete="off">

		<input name="token" type="hidden" value="<?php echo $token; ?>">

		<fieldset class="half split">
			<p>
				<label for="name"><?php echo __('users.name', 'Display name'); ?>:</label>
				<input autofocus id="name" name="name" value="<?php echo Input::previous('name'); ?>">

				<em><?php echo __('users.name_explain',
					'The user&rsquo;s real name. Used in author bylines (visible to public).'); ?></em>
			</p>

			<p>
				<label for="role"><?php echo __('users.role', 'Role'); ?>:</label>
				<select id="role" name="role">
					<?php foreach(array(
						'administrator' => __('users.administrator', 'Administrator'),
						'editor' => __('users.editor', 'Editor'),
						'user' => __('users.user', 'User')
					) as $value => $role): ?>
					<?php $selected = (Input::previous('role') == $value) ? ' selected' : ''; ?>
					<option value="<?php echo $value; ?>"<?php echo $selected; ?>>
						<?php echo $role; ?>
					</option>
					<?php endforeach; ?>
				</select>

				<em><?php echo __('users.role_explain',
					'The user&rsquo;s role. See <a href="//anchorcms.com/docs/roles">here</a> for more info.'); ?></em>
			</p>
		</fieldset>

		<fieldset class="half split">

			<legend><?php echo __('users.user_details', 'User details'); ?></legend>
			<em><?php echo __('users.user_details_explain',
				'Create the details for your new user to log in to Anchor.'); ?></em>

			<p>
				<label for="username"><?php echo __('users.username', 'Username'); ?>:</label>
				<input id="username" name="username" value="<?php echo Input::previous('username'); ?>">

				<em><?php echo __('users.username_explain', 'The desired username. Can be changed later.'); ?></em>
			</p>

			<p>
				<label for="password"><?php echo __('users.password', 'Password'); ?>:</label>
				<input id="password" type="password" name="password">

				<em><?php echo __('users.password_explain',
					'And the matching password. Can be changed later.'); ?></em>
			</p>

			<p>
				<label for="email"><?php echo __('users.email', 'Email'); ?>:</label>
				<input id="email" name="email" value="<?php echo Input::previous('email'); ?>">

				<em><?php echo __('users.email_explain',
					'The user&rsquo;s email address. Needed if the user forgets their password.'); ?></em>
			</p>
		</fieldset>

		<p class="buttons">
			<button type="submit"><?php echo __('users.create', 'Create'); ?></button>
		</p>
	</form>

</section>

<?php echo $footer; ?>