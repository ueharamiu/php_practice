<!-- 配列 -->
<?php
	$img = [
		'img/dog1.jpg',
		'650',
		'449.7'
	];
?>

<!-- 連想配列 -->
<?php
	$image = [
		'path' => 'img/dog2.jpg',
		'width' => '500',
		'height' => '749'
	];
?>

<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP PRACTICE ARRAY</title>
	</head>
	<body>
		<div>
			<h2>配列で出力</h2>
			<img src="<?php echo $img[0] ?>" width="<?php echo $img[1] ?>" height="<?php echo $img[2] ?>" alt="愛犬の画像1">
		</div>
		<div>
			<h2>連想配列で出力</h2>
			<img src="
				<?php 
					echo $image['path']; 
				?>" 
				width="
					<?php
						echo $image['width']; 
					?>" 
				height="
					<?php 
						echo $image['height']; 
					?>" 
				alt="愛犬の画像2">
		</div>
	</body>
</html>
