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
		   
		mysqli_query($conn, "INSERT INTO form_question(type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft, vr_system) VALUES('".$type."','".$integration."','".$connect_type."','".$tracking_system."','".$accuracy_head."','".$dof."','".$display_type."','".$fov."','".$pupillary_distance."','".$eye_tracking."','".$lens_type."','".$audio_integrated."','".$controller_type."','".$accuracy_controller."','".$base_station_controller."','".$feedback_contoller."','".$os_soft."','".$vr_system."')");

	
		/*
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
        $vr_system = mysqli_real_escape_string($conn, $_POST['vr_system']);	*/
		
		//mysqli_query($conn, "INSERT INTO form_question(type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft) VALUES( '" . $type . "', '". $integration."', '".$connect_type."', '".$tracking_system."', '".$accuracy_head."', '".$dof."', '".$display_type."', '".$fov."',  '".$pupillary_distance."', '".$eye_tracking."', '".$lens_type."', '".$audio_integrated."', '".$controller_type."', '".$accuracy_controller."', '".$base_station_controller."', '".$feedback_contoller."', '".$os_soft."', '".$vr_system."')");
		//$result=mysqli_query($conn, " SELECT (type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft) FROM vr_set");
		//$vr_name = mysqli_real_escape_string($conn, $_POST['vr_name']);
		   					/*	echo "<table><tr>";
                                echo "<td>" . $type. "</td>";
                                echo "<td>" . $integration. "</td>";
                                echo "<td>" . $connect_type. "</td>";
                                echo "<td>" . $tracking_system. "</td>";
                                echo "<td>" . $accuracy_head. "</td>";
                                echo "<td>" . $dof. "</td>";
                                echo "<td>" . $display_type. "</td>";
                                echo "<td>" . $fov. "</td>";
                                echo "<td>" . $pupillary_distance. "</td>";
                                echo "<td>" . $eye_tracking. "</td>";
                                echo "<td>" . $lens_type. "</td>";
                                echo "<td>" . $audio_integrated. "</td>";
                                echo "<td>" . $controller_type. "</td>";
                                echo "<td>" . $accuracy_controller. "</td>";
                                echo "<td>" . $base_station_controller. "</td>";
                                echo "<td>" . $feedback_contoller. "</td>";
                                echo "<td>" . $os_soft. "</td>";
                                echo "<td>" . $vr_system. "</td>";   
								echo "</tr></table>";*/

		$found=0;
		$result=mysqli_query($conn, "SELECT * FROM vr_set");
		while ($element = mysqli_fetch_assoc($result)) {
        //$array[] = $element;
        		if (($element["type"]==$type) && ($element["integration"]==$integration) && ($element["connect_type"]==$connect_type) && ($element["tracking_system"]==$tracking_system) && ($element["accuracy_head"]==$accuracy_head) && ($element["dof"]==$dof) && ($element["display_type"]==$display_type) && (($element["fov"]<=($fov+10))&&($element["fov"]>=($fov-10))) && ($element["pupillary_distance"]==$pupillary_distance) && ($element["eye_tracking"]==$eye_tracking) && ($element["lens_type"]==$lens_type) && ($element["audio_integrated"]==$audio_integrated) && ($element["controller_type"]==$controller_type) && ($element["accuracy_controller"]==$accuracy_controller) && ($element["base_station_controller"]==$base_station_controller) && ($element["feedback_contoller"]==$feedback_contoller) && ($element["os_soft"]==$os_soft))
				{
					echo "<p>На основании данных вами ответов, рекомендуем Вам шлем виртуальной реальности <b>";
					echo $element["vr_name"];
					echo "</b>.</p><br />";
					echo "<p>".$element["description"]."</p>";
					$found=1;
				}      
				
			}		 
			if ($found==0) 
				{
					echo "<p>По результатам ваших ответов, оборудование не найдено.</p>";
				}
		}	
	?>
         </div>
		 <div style="margin:50px 0px 0px 0px;">
            <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="/" title="">На главную</a>
		</div>
        </div>
        <?php include('footer.php');  ?>