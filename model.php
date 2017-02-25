<?php
	class Model
	{
	
	// For connection with Database starts.
		function __construct()
		{
			require_once 'db_connection.php';
			$this->DB=new DB_Con();
		}//__construct()
	
	// For connection with Database ends.
	
	/* INSERT STATEMENT STARTS */
		function insert($param1,$param2,$param3,$param4) 
        {       
		   $timestamp=time();	
		   $qry = "INSERT INTO `TABLE_NAME`(`param1`,`pram2`,`pram3`,`param4`) VALUES (:param1,:param2,:param3,:param4)";		
		   $prepared_statement=$this->DB->prepare($qry);           
           $prepared_statement -> bindValue(':param1', $param1);           
           $prepared_statement -> bindValue(':param2', $param2);     
           $prepared_statement -> bindValue(':param3', $param3);     
           $prepared_statement -> bindValue(':param4', $param4);     
		   $exe_status = $prepared_statement -> execute();		  
		   return $exe_status;
	    }//insert
	/* INSERT STATEMENT ENDS */
		
	/* SELECT STATEMENT STARTS */
		function select_data($param1)
		{		
			$qry="SELECT * FROM TABLE_NAME WHERE param1=:pram1";
			$prepared_statement=$this->DB->prepare($qry);
			$prepared_statement->bindValue(':param1',$pram1);
			$prepared_statement->execute();
			return $result_set = $prepared_statement->fetch();
		}//select()
    /* SELECT STATEMENT ENDS */
      
	  
	/* UPDATE STATEMENTS STARTS */
		public function update_data($param1,$company,$address,$phone) 
        {
			$timestamp=time();
		   $qry = "UPDATE `TABLE_NAME` SET `param1`=:param1,`param2`=:param2 WHERE `param3` = :param3 ";	            
		   $prepared_statement=$this->DB->prepare($qry);           
           $prepared_statement -> bindValue(':param1', $param1);           
           $prepared_statement -> bindValue(':param2', $param2);     
           $prepared_statement -> bindValue(':param3', $param3);       
		   $exe_status = $prepared_statement -> execute();		  
		   return $exe_status;
	   }//update()
	/* UPDATE STATEMENTS ENDS */
		
	/* DELETE STATEMENTS STARTS */
		public function delete($param1) 
		{		
			$qry = "DELETE FROM `TABLE_NAME` WHERE `field1` = :param1";
			$prepared_statement=$this->DB->prepare($qry);
			$prepared_statement -> bindValue(':param1', $param1);
			$exe_status = $prepared_statement -> execute();		
			return $exe_status;
		}//delete()  	
	/* DELETE STATEMENTS ENDS */ 

	}
?>