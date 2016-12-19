<?php
session_start();
include 'dbconnect.php';

$sub1 = htmlentities( $_POST['sub1'] );
$query1 = mysqli_query($connect,"SELECT distinct `sub2` FROM `category1` WHERE `sub1` = '$sub1'");
if(mysqli_num_rows($query1) > 1){
		echo "<div class=\"form-group\">
		        <label class=\"col-sm-2 col-sm-3 control-label\">Sub 2:</label>
		          <div class=\"col-sm-10\">
		            <select class=\"form-control\" name=\"sub2\" onselect=\"onsub2categoryselection(this)\"
		             onchange=\"onsub2categoryselection(this)\">";
            
		              echo "<option value=\"\" selected></option>";

		while($row = mysqli_fetch_assoc($query1)){
		$sub2 = $row['sub2'];
		  echo "<option value=\"$sub2\"> $sub2 </option>";
		}
  
	  echo "</select>
	          </div>
	      	</div>";
}
else{

	echo "<div class=\"form-group\">
			<label class=\"col-sm-2 col-sm-3 control-label\">Sub 2:</label>
			<div class=\"col-sm-10\">
			<input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"No Subcategory to select\" disabled>
			</div>
			</div>";  
}

?>