<?php
	$days = 1; // 1 を $days へ格納

	while( $days <= 31 ): // $days の数が 31 以下の間は処理を行う
		echo '10月' . $days . '日' . '<br>'; // 「10月○（31以下の数字）日」（改行）と出力
		$days++; // 出力した $days に 1 を足す
	endwhile;
?>
