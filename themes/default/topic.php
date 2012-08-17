<?php theme_include('partials/header'); ?>

	<h3><?php echo topic_title(); ?></h3>
	<p>Posted in <a href="<?php echo forum_url(); ?>"><?php echo forum_title(); ?></a></p>
	<p>Started by <a href="<?php echo topic_created_by_url(); ?>"><?php echo topic_created_by(); ?></a></p>

	<p><strong><?php echo topic_votes(); ?> Votes</strong> <a href="<?php echo topic_vote_url(); ?>">Up Vote</a></p>

	<?php echo topic_paging(); ?>

	<ul>
	<?php while(posts()): ?>
	<li>
		<a name="post-<?php echo post_id(); ?>"></a>

		<?php echo post_body(); ?>

		<p><em>by <a href="<?php echo post_user_url(); ?>"><?php echo post_user(); ?></a> posted at <?php echo post_date(); ?></em></p>

		<p><a href="<?php echo post_quote_url(); ?>">Quote</a> <a href="<?php echo post_report_url(); ?>">Report</a></p>
	</li>
	<?php endwhile; ?>
	</ul>

	<?php echo topic_paging(); ?>

	<?php echo Form::open(topic_url()); ?>

	<fieldset>
		<legend>Add your reply</legend>

		<p><?php echo Form::textarea('reply'); ?></p>

		<?php echo Form::submit('submit', 'Reply'); ?>
	</fieldset>

	<?php echo Form::close(); ?>

<?php theme_include('partials/footer'); ?>