<?php
	

	class General{


		function CountUsers($con){
            
			$dataArray = array();

			$query = "SELECT group_concat(concat(teams.name) SEPARATOR ', ') AS teams, COUNT(`user_id`) AS total, teams_users.user_id, users.first_name, users.last_name  FROM teams_users LEFT JOIN users ON teams_users.user_id=users.id LEFT JOIN teams ON teams_users.team_id=teams.id GROUP BY `user_id` ORDER BY `total` DESC";
			
			$sql = mysqli_query($con,$query);

			$i =0; 

			while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
				$dataArray[] = $row;
				$i++;
			}

			// echo "<pre>";
			// print_r($dataArray);
			return $dataArray;
		}

	}

?>