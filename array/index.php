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

<!-- 配列の要素の追加 -->
<?php
	$imgarray = [
		'img/dog3.jpg',
		'600'
	];
	array_splice( $imgarray, 2, 0, '440.53' ); // 1つ目は要素を追加する配列、2つ目は追加する位置、3つ目は置き換える要素数、4つ目が追加する要素
?>

<!-- 連想配列の要素の追加 -->
<?php
	$imagearray = [
		'path' => 'img/dog4.jpg'
	];
	$imagearray[ 'width' ] = 600;
	$imagearray[ 'height' ] = 415.71;
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
		<div>
			<h2>配列の要素を追加して出力</h2>
			<img src="
				<?php 
					echo $imgarray[0] 
				?>" 
				width="
					<?php 
						echo $imgarray[1] 
					?>" 
				height="
					<?php 
						echo $imgarray[2] 
					?>" 
				alt="愛犬の画像3">
		</div>
		<div>
			<h2>連想配列の要素を追加して出力</h2>
			<img src="
				<?php 
					echo $imagearray['path'] 
				?>" 
				width="
					<?php 
						echo $imagearray['width']
					?>"
				height="
					<?php 
						echo $imagearray['height']
					?>"	
				alt="愛犬の画像4">
		</div>
	</body>
</html>
