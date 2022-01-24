<?php 
include('header.php');
include_once("db_connect.php");
?>
<div class="container" style="min-height:500px;">
<div class="container">
<h2>Добавление нового устройства</h2>
<div class="row well alert alert-success"> 
<?php
	if (isset($_POST['submit_info'])) {	
		$vr_name = mysqli_real_escape_string($conn, $_POST['vr_name']);
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		if ( !isset($_POST['integration'])) $integration='0'; else $integration = mysqli_real_escape_string($conn, $_POST['integration']);
		
		$connect_type_chk = $_POST['connect_type'];
		//echo count($connect_type_chk);
		$connect_type="";  
    	foreach($connect_type_chk as $ct_chk1)  
      	 {  
		  if (count($connect_type_chk)==1) $connect_type.= $ct_chk1;
		  else  $connect_type.= $ct_chk1.", "; 
      	 }  

		$tracking_system_chk = $_POST['tracking_system'];
		$tracking_system="";  
    	foreach($tracking_system_chk as $ts_chk1)  
      	 {  
			if (count($tracking_system_chk)==1) $tracking_system.= $ts_chk1;
			else  $tracking_system.= $ts_chk1.", "; 
      	 }  
		
		$accuracy_head = mysqli_real_escape_string($conn, $_POST['accuracy_head']);		
		$dof = mysqli_real_escape_string($conn, $_POST['dof']);
		$display_type = mysqli_real_escape_string($conn, $_POST['display_type']);
		$fov = mysqli_real_escape_string($conn, $_POST['fov']);
		
		if ( !isset($_POST['pupillary_distance'])) $pupillary_distance='0'; else $pupillary_distance = mysqli_real_escape_string($conn, $_POST['pupillary_distance']);
		
		if ( !isset($_POST['eye_tracking'])) $eye_tracking='0'; else $eye_tracking = mysqli_real_escape_string($conn, $_POST['eye_tracking']);
		$lens_type = mysqli_real_escape_string($conn, $_POST['lens_type']);	
		if ( !isset($_POST['audio_integrated'])) $audio_integrated='0'; else $audio_integrated = mysqli_real_escape_string($conn, $_POST['audio_integrated']);
		$controller_type = mysqli_real_escape_string($conn, $_POST['controller_type']);
		$accuracy_controller = mysqli_real_escape_string($conn, $_POST['accuracy_controller']);
		if ( !isset($_POST['base_station_controller'])) $base_station_controller='0'; else $base_station_controller = mysqli_real_escape_string($conn, $_POST['base_station_controller']);
		if ( !isset($_POST['feedback_contoller'])) $feedback_contoller='0'; else $feedback_contoller = mysqli_real_escape_string($conn, $_POST['feedback_contoller']);
		$os_soft = mysqli_real_escape_string($conn, $_POST['os_soft']);	
		$vr_system = mysqli_real_escape_string($conn, $_POST['vr_system']);	
		$description = mysqli_real_escape_string($conn, $_POST['description']);	

		$result=mysqli_query($conn, "SELECT vr_name FROM vr_set");
		while ($element = mysqli_fetch_assoc($result)) {
				$array[] = $element;
				if (in_array($vr_name, $element))
				{
				$already=$vr_name;
				break;
				}
		} 

		if (isset($already)) {
			echo "Устройство ".$vr_name." уже добавлено в базу данных.";
		}
		else {
		if(mysqli_query($conn, "INSERT INTO vr_set(vr_name, type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft, vr_system, description) VALUES('".$vr_name."','".$type."','".$integration."','".$connect_type."','".$tracking_system."','".$accuracy_head."','".$dof."','".$display_type."','".$fov."','".$pupillary_distance."','".$eye_tracking."','".$lens_type."','".$audio_integrated."','".$controller_type."','".$accuracy_controller."','".$base_station_controller."','".$feedback_contoller."','".$os_soft."','".$vr_system."','".$description."')"))
		{
			echo "Информация о системе добавлена <br />";
			echo "Устройство ".$vr_name." внесено в базу данных.";
			//$result=mysqli_query($conn, "SELECT * FROM vr_set");
			//$result=mysqli_query($conn,"SELECT vr_name, type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft, vr_system, description FROM vr_set");
			//while ($element = mysqli_fetch_assoc($result)) {
			//	$array[] = $element;
			//}
			//print_r ($array);
			
		} else {
			echo "Ошибка!";
		}
	}
	}	
	?>
 </div>
 <div style="margin:50px 0px 0px 0px;">
            <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="/" title="">На главную</a>
</div>
</div>
<?php include('footer.php');?>