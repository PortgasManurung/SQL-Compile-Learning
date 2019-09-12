<?php
	header('Access-Control-Allow-Origin: *'); 
	header('Access-Control-Allow-Headers: Content-Type'); 
	$con = mysqli_connect("localhost","root","","imk") or die("could not connect DB");
	$query = $_POST['data'];
	$data = mysqli_query($con,$query);
	if($data){
		$rowcount=mysqli_num_rows($data);
		if($rowcount >= 1){
			$r = mysqli_fetch_assoc($data);
			echo '<table id="result"><tr>';
			$i = 0;
			$col = array();
			foreach ($r as $key => $value) {  // another way to get keys and values.
				echo '<th>'.$key.'</th>';
				$col[$i] = $key;
				$i++;
			}
			echo '</tr>';
			echo '<tr>';
			for($j = 0;$j < $i;$j++){
				$cols = (string)$col[$j];
				echo '<td>'.$r[$cols].'</td>';
			}
			echo '</tr>';
			if($rowcount > 1){
				while($row = mysqli_fetch_assoc($data)){
					echo '<tr>';
					for($j = 0;$j < $i;$j++){
						$cols = (string)$col[$j];
						echo '<td>'.$row[$cols].'</td>';
					}
					echo '</tr>';
				}
			}
			echo '</table>';
		}else{
			echo '<div id="error"><p>Data Tidak Ada</p></div>';
		}
	}else{
		echo '<div id="error"><p>';
		echo("ERROR: " . mysqli_error($con));
		echo '</p></div>';
	}
	mysqli_close($con);
?>

