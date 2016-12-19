<?php
session_start();
include 'dbconnect.php';

$main = htmlentities( $_POST['main'] );
$query1 = mysqli_query($connect,"SELECT distinct `sub1` FROM `category1` WHERE `main` = '$main'");
if(mysqli_num_rows($query1)>1){
			echo "<div class=\"form-group\">
			<label class=\"col-sm-2 col-sm-3 control-label\">Sub 1:</label>
			<div class=\"col-sm-10\">
			<select class=\"form-control\" name=\"sub1\" onselect=\"onsub1categoryselection(this)\"
			onchange=\"onsub1categoryselection(this)\">";
			echo "<option value=\"\" selected></option>";
			$query1 = mysqli_query($connect,"SELECT distinct `sub1` FROM `category1` WHERE main = '$main'");
			while($row = mysqli_fetch_assoc($query1)){
				$sub1 = $row['sub1'];
				echo "<option value=\"$sub1\"> $sub1 </option>";
			}

			echo "</select>
			</div>
			</div>";  
}
else{

	echo "<div class=\"form-group\">
			<label class=\"col-sm-2 col-sm-3 control-label\">Sub 1:</label>
			<div class=\"col-sm-10\">
			<input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"No Subcategory to select\" disabled>
			</div>
			</div>";  

}                              
?>