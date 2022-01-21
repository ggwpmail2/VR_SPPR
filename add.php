<?php 
include('header.php');
include_once("db_connect.php");

?>



<div class="container" style="min-height:500px;">
    <div class="container">
        

        <div class="form_add">
            <h2>Форма добавления нового оборудования</h2>
        <div class="alert alert-success hide"></div>
        
        <form id="info_form" action="add_info.php" method="post" >
        
        <fieldset><input type="text" class="form-control" name="vr_name" id="vr_name" required placeholder="Название"  /></fieldset>
        
        <fieldset><input type="radio" id="type1" name="type" value="Автономный"><label for="type1">Автономный</label>
                  <input type="radio" id="type2" name="type" value="Стационарный"><label for="type2">Стационарный</label></fieldset>
        <fieldset><input type="checkbox" id="integration" name="integration" value="1"><label>Интеграция с другими устройствами </label></fieldset>
        
        <fieldset><input type="checkbox" id="connect_type1" name="connect_type[]" value="Проводной" required="required"><label for="connect_type1">Проводной</label>
                  <input type="checkbox" id="connect_type2" name="connect_type[]" value="Беспроводной" required="required"><label for="connect_type2">Беспроводной</label></fieldset>
    
        <fieldset><input type="checkbox" id="tracking_system1" name="tracking_system[]" value="Внешние датчики" required="required"><label for="tracking_system1">Внешние датчики</label>
                  <input type="checkbox" id="tracking_system2" name="tracking_system[]" value="Интегрированные датчики" required="required"><label for="tracking_system2">Интегрированные датчики</label></fieldset>
     
        <fieldset><input type="radio" id="accuracy_head1" name="accuracy_head" value="Достаточная"><label for="accuracy_head1">Достаточная</label>
                  <input type="radio" id="accuracy_head2" name="accuracy_head" value="Максимальная"><label for="accuracy_head2">Максимальная</label></fieldset>
     
        <fieldset><input type="radio" id="dof1" name="dof" value="3"><label for="dof1">3 DoF</label>
                  <input type="radio" id="dof2" name="dof" value="6"><label for="dof2">6 DoF</label></fieldset>
    
        <fieldset><input type="radio" id="display_type1" name="display_type" value="IPS"><label for="display_type1">IPS</label>
                  <input type="radio" id="display_type2" name="display_type" value="OLED"><label for="display_type2">OLED</label>
                  <input type="radio" id="display_type3" name="display_type" value="AMOLED"><label for="display_type3">AMOLED</label></fieldset>
    
        <fieldset><input type="text" class="form-control" name="fov" id="fov" required placeholder="Угол обзора"></fieldset>
     
        <fieldset><input type="checkbox" id="pupillary_distance" name="pupillary_distance" value="1"><label>Настройка межзрачкового расстояния </label></fieldset>
     
        <fieldset><input type="checkbox" id="eye_tracking" name="eye_tracking" value="1"><label>Отслеживание взгляда </label></fieldset>
     
        <fieldset><input type="radio" id="lens_type1" name="lens_type" value="Линзы Френеля"><label for="lens_type1">Линзы Френеля</label>
                  <input type="radio" id="lens_type2" name="lens_type" value="Оптические"><label for="lens_type2">Оптические</label>
                  <input type="radio" id="lens_type3" name="lens_type" value="Асферические"><label for="lens_type3">Асферические</label>
                  <input type="radio" id="lens_type4" name="lens_type" value="Двояковыпуклые"><label for="lens_type4">Двояковыпуклые</label></fieldset>
       
        <fieldset><input type="checkbox" id="audio_integrated" name="audio_integrated" value="1"><label>Интегрированные аудио устройства </label></fieldset>
      
        <fieldset><input type="radio" id="controller_type1" name="controller_type" value="Steam VR"><label for="controller_type1">Steam VR</label>
                  <input type="radio" id="controller_type2" name="controller_type" value="Open VR"><label for="controller_type2">Open VR</label>
                  <input type="radio" id="controller_type3" name="controller_type" value="Vive Reality"><label for="controller_type3">Vive Reality</label>
                  <input type="radio" id="controller_type4" name="controller_type" value="Meta VR"><label for="controller_type4">Meta VR</label></fieldset>
   
        <fieldset><input type="radio" id="accuracy_controller1" name="accuracy_controller" value="Достаточная"><label for="accuracy_controller1">Достаточная</label>
                  <input type="radio" id="accuracy_controller2" name="accuracy_controller" value="Максимальная"><label for="accuracy_controller2">Максимальная</label></fieldset>
       
        <fieldset><input type="checkbox" id="base_station_controller" name="base_station_controller" value="1"><label>Базовые станции </label></fieldset>
       
        <fieldset><input type="checkbox" id="feedback_contoller" name="feedback_contoller" value="1"><label>Обратная связь контроллеров </label></fieldset>
       
        <fieldset><input type="radio" id="os_soft1" name="os_soft" value="Windows"><label for="os_soft1">Windows</label>
                  <input type="radio" id="os_soft2" name="os_soft" value="Android"><label for="os_soft2">Android</label>
                  <input type="radio" id="os_soft3" name="os_soft" value="Linux"><label for="os_soft3">Linux</label></fieldset>
      
        <fieldset><input type="radio" id="vr_system1" name="vr_system" value="Steam VR"><label for="vr_system1">Steam VR</label>
                  <input type="radio" id="vr_system2" name="vr_system" value="Open VR"><label for="vr_system2">Open VR</label>
                  <input type="radio" id="vr_system3" name="vr_system" value="Vive Reality"><label for="vr_system3">Vive Reality</label>
                  <input type="radio" id="vr_system4" name="vr_system" value="Meta VR"><label for="vr_system4">Meta VR</label></fieldset>

        <fieldset><input type="text" class="form-control" name="description" id="description" placeholder="Описание продукта"></fieldset>

        <fieldset><input type="submit" name="submit_info" class="submit btn btn-success" value="Отправить" /></fieldset>
</form>
</div>

<div style="margin:50px 0px 0px 0px;">
            <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="/" title="">На главную</a>
        </div>
<br /><br /><br />
       
    </div>
    <?php include('footer.php');?>