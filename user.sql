CREATE TABLE IF NOT EXISTS `form_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vr_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `integration` boolean NOT NULL,
  `connect_type` varchar(100) NOT NULL,
  `tracking_system` varchar(100) NOT NULL,
  `accuracy_head` varchar(100) NOT NULL,
  `dof` int(11) NOT NULL,
  `display_type` varchar(100) NOT NULL,
  `fov` int(11) NOT NULL,
  `pupillary_distance` boolean NOT NULL,
  `eye_tracking` boolean NOT NULL,
  `lens_type` varchar(100) NOT NULL,
  `audio_integrated` boolean NOT NULL,
  `controller_type` varchar(100) NOT NULL,
  `accuracy_controller` varchar(100) NOT NULL,
  `base_station_controller` boolean NOT NULL,
  `feedback_contoller` boolean NOT NULL,
  `os_soft` varchar(100) NOT NULL,
  `vr_system` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci AUTO_INCREMENT=1 ;

INSERT INTO vr_set(vr_name, type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft, description) VALUES('".$vr_name."', '" . $type . "', '". $integration."', '".$connect_type."', '".$tracking_system."', '".$accuracy_head."', '".$dof."', '".$display_type."', '".$fov."',  '".$pupillary_distance."', '".$eye_tracking."', '".$lens_type."', '".$audio_integrated."', '".$controller_type."', '".$accuracy_controller."', '".$base_station_controller."', '".$feedback_contoller."', '".$os_soft."', '".$vr_system."','". $description."')
INSERT INTO vr_set(type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft) VALUES( '" . $type . "', '". $integration."', '".$connect_type."', '".$tracking_system."', '".$accuracy_head."', '".$dof."', '".$display_type."', '".$fov."',  '".$pupillary_distance."', '".$eye_tracking."', '".$lens_type."', '".$audio_integrated."', '".$controller_type."', '".$accuracy_controller."', '".$base_station_controller."', '".$feedback_contoller."', '".$os_soft."', '".$vr_system."')