<?php
	class DB {

		var $dbLink;
		var $dbHost;
		var $dbUsername;
		var $dbPassword;
		var $dbDatabase;
		var $dbConnectPersistant;

		function DB(){ 
			$this->dbHost = "localhost";
			$this->dbUsername = "root";
			$this->dbPassword = "root";
			$this->dbDatabase = "team";
			$this->dbConnectPersistant = false;
		}
		function getConn(){

			$this->dbLink = @mysqli_connect($this->dbHost, $this->dbUsername, $this->dbPassword);

			// Check connection
			if (mysqli_connect_errno())
			  {
			  	echo "<font color='#ff0000' face='verdana' face='2'>Error: Could not connect to database server! ". mysqli_connect_error() ."</font>";
			  }

			@mysqli_select_db($this->dbLink,$this->dbDatabase) or die("<font color='#ff0000' face='verdana' face='2'>Error: Unable to select database!</font>");

			return $this->dbLink;
		}
		function closeConn(){
			@mysqli_close($this->dbLink);
		}

	}

//$dbObj = new DB();

?>	