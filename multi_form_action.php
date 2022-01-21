<?php 
include('header.php');
include_once("db_connect.php");
?>
    <div class="container" style="min-height:500px;">
        <div class="container">
            <h2>Рекомендация</h2>
            <div class="row well alert alert-success"> 
                <?php
	if (isset($_POST['submit'])) {	
		
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		$integration = mysqli_real_escape_string($conn, $_POST['integration']);
		$connect_type = mysqli_real_escape_string($conn, $_POST['connect_type']);
		$tracking_system = mysqli_real_escape_string($conn, $_POST['tracking_system']);
		$accuracy_head = mysqli_real_escape_string($conn, $_POST['accuracy_head']);		
        $dof = mysqli_real_escape_string($conn, $_POST['dof']);
		$display_type = mysqli_real_escape_string($conn, $_POST['display_type']);
		$fov = mysqli_real_escape_string($conn, $_POST['fov']);
		$pupillary_distance = mysqli_real_escape_string($conn, $_POST['pupillary_distance']);
		$eye_tracking = mysqli_real_escape_string($conn, $_POST['eye_tracking']);
		$lens_type = mysqli_real_escape_string($conn, $_POST['lens_type']);	
        $audio_integrated = mysqli_real_escape_string($conn, $_POST['audio_integrated']);
		$controller_type = mysqli_real_escape_string($conn, $_POST['controller_type']);
		$accuracy_controller = mysqli_real_escape_string($conn, $_POST['accuracy_controller']);
		$base_station_controller = mysqli_real_escape_string($conn, $_POST['base_station_controller']);
		$feedback_contoller = mysqli_real_escape_string($conn, $_POST['feedback_contoller']);
		$os_soft = mysqli_real_escape_string($conn, $_POST['os_soft']);	
        $vr_system = mysqli_real_escape_string($conn, $_POST['vr_system']);	
		
		mysqli_query($conn, "INSERT INTO vr_set(type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft) VALUES( '" . $type . "', '". $integration."', '".$connect_type."', '".$tracking_system."', '".$accuracy_head."', '".$dof."', '".$display_type."', '".$fov."',  '".$pupillary_distance."', '".$eye_tracking."', '".$lens_type."', '".$audio_integrated."', '".$controller_type."', '".$accuracy_controller."', '".$base_station_controller."', '".$feedback_contoller."', '".$os_soft."', '".$vr_system."')");
		$result=mysqli_query($conn, " SELECT (type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft) FROM vr_set");
		//$vr_name = mysqli_real_escape_string($conn, $_POST['vr_name']);

		if($type) {
			echo "Рекомендуем";
			echo $result;
		} else {
			echo "Ошибка!";
		}
	}	
	?>
         </div>
           
        </div>
        <?php include('footer.php');  ?>