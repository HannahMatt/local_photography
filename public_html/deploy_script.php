<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Deployment Script</title>
	</head>
	<body>
	<p>Deploy script</p>
		<pre>
		
<?php
$output = shell_exec("cd ..;git pull 2>&1");
echo $output;
?>
		
		</pre>
	</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> ffabc919549aff92431e9f24a8fa54865ff9096e
