<?php 
	function implementation($link, $id, $kasha) {
		/*if($link < количества записей в таблице) {
			for($i = количество записей в таблице - link; $i < $link; $i++){
				# добавить кашу	"0"
			}
		};*/
		$t = "INSERT INTO store_kasha (id, kasha) VALUE ('%s', '%s')";

		$imp_string = sprintf($t, $id, $kasha);

		mysqli_query($link, $imp_string);

		return true;
		# добавить к каше пост
	}
?>