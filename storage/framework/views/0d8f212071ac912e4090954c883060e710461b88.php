<!--Page de Base du développement-->
<!DOCTYPE html>
	<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--Pour personnaliser le titre de chaque page-->
			<title><?php echo $__env->yieldContent('title'); ?></title>
			<!--Insertion du lien bootstrap-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet"href="https://bootswatch.com/4/united/bootstrap.min.css">
		</head>	
	
		<body>
			<!--Pour personnaliser le contenu de chaque base-->
			<?php echo $__env->yieldContent('content'); ?>
		</body>
	
	</html><?php /**PATH C:\wamp\www\PlaceCooperative\resources\views/base.blade.php ENDPATH**/ ?>