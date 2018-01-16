<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Downloads</h1>
<p>In order to play, you need to download the custom game client below. We currently only offer a Windows compatible version. The custom client is the Tibia official version that simply points to the Creative Tibia server.</p>

<p>Download custom Creative Tibia client <?php echo ($config['client'] / 100); ?> for windows <a href="<?php echo $config['client_download']; ?>">HERE</a>.</p>

<h2>How to connect and play:</h2>
<ol>
	<li>
		<a href="<?php echo $config['client_download']; ?>">Download</a> and install the tibia client if you havent already.
	</li>
	<li>
		If you do not have an account to login with, you need to register an account <a href="register.php">HERE</a>.
	</li>
	<li>
		Now you can successfully login with the Creative Tibia client.<br>
	</li>
</ol>

<?php
include 'layout/overall/footer.php'; ?>
