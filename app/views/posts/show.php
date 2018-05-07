<?php require APPROOT . '/views/inc/header.php'; ?>
	<?php //echo '<pre>'; print_r($data); echo '</pre>';die('here'); ?>
	<?php $post = $data['post']; ?>
	<?php $user = $data['user']; ?>

	<a href="/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
	<br />
	<h1><?php echo $post->title; ?></h1>
	<div class="bg-secondary text-white p-2 mb-3">
		Written by <?php echo $user->name; ?> on <?php echo $post->created_at; ?>
	</div>
	<p><?php echo $post->body; ?></p>

	<?php if($post->user_id == $_SESSION['user_id']) : ?>
		<hr>
		<a href="/posts/edit/<?php echo $post->id ?>" class="btn btn-dark">Edit</a>

		<form class="pull-right" action="/posts/delete/<?php echo $post->id ?>" method="POST">
			<input type="submit" value="Delete" class="btn btn-danger">
		</form>
	<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>