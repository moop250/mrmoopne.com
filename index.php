<!DOCTYPE html>
<html>
	<body>
		<h1>
			<?php
				# For blocks with logic, you need to use <?php
				$name = "Moop";
				echo "Hello $name!";
			?>
		</h1>
		<p>
			<?=
				/*
					for blocks that exist simply to echo / print
					<?= is all you need!
				*/
				"There is a simpler way to print!"
			?>
		</p>
	</body>
</html>