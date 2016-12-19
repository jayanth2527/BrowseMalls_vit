<?php
session_start();
include 'dbconnect.php';

$sub2 = htmlentities( $_POST['sub2'] );
$query1 = mysqli_query($connect,"SELECT distinct `sub3` FROM `category1` WHERE `sub2` = '$sub2'");
if(mysqli_num_rows($query1)>1){
			echo "<div class=\"form-group\">
			        <label class=\"col-sm-2 col-sm-3 control-label\">Sub 3:</label>
			          <div class=\"col-sm-10\">
			            <select name=\"sub3\" class=\"form-control\">";
			            echo "<option value=\"\" selected></option>";

						while($row = mysqli_fetch_assoc($query1)){
						$sub3 = $row['sub3'];
						if($sub3 != "" || !empty($sub3))
						 { echo "<option value=\"$sub3\"> $sub3 </option>";}
						}
			  
			  echo "</select>
			          </div>
      </div>";
}else{

	echo "<div class=\"form-group\">
			<label class=\"col-sm-2 col-sm-3 control-label\">Sub 3:</label>
			<div class=\"col-sm-10\">
			<input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"No Subcategory to select\" disabled>
			</div>
			</div>";  

}                             
?>