<!-- 条件分岐 -->
<?php
	date_default_timezone_set( 'Asia/Tokyo' ); // タイムゾーンを設定
	$hour = date( 'G' ); // date( 'G' ) で現在時刻を $hour へ格納

	if( $hour < 10 ) : // 現在時刻 $hour が10より小さい場合
		echo 'おはようございます'; // 「おはようございます」を表示
		elseif( $hour < 12 ) : // 現在時刻 $hour が12より小さい場合
			echo '昼です'; // 「昼です」を表示
		elseif( $hour < 15 ) : // 現在時刻 $hour が15より小さい場合
			echo '夜です'; // 「夜です」を表示
		elseif( $hour < 20 ) : // 現在時刻 $hour が20より小さい場合
			echo '深夜です'; // 「深夜です」を表示
		else : // どの条件にも満たさない場合
			echo 'お疲れ様です'; // 「お疲れ様です」を表示
	endif;
?>
