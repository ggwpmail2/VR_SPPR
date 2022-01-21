<?php 
include('header.php');
include_once("db_connect.php");

?>



<div class="container" style="min-height:500px;">
<h2>БД оборудования</h2>
 <div class="container">
            <?php 
                    $zapros = "SELECT id,vr_name, type, integration, connect_type, tracking_system, accuracy_head, dof, display_type, fov, pupillary_distance, eye_tracking, lens_type, audio_integrated, controller_type, accuracy_controller, base_station_controller, feedback_contoller, os_soft, vr_system, description FROM vr_set" ;
            		$result=mysqli_query($conn,$zapros);
                   

                    if($vivod = $conn->query($zapros)){
                        $rowsCount = $vivod->num_rows; // количество полученных строк
                        echo "<p>Получено объектов: $rowsCount</p>";
                        echo "<table border=1><tr><th>Id</th><th>Название</th><th>Тип</th><th>Интеграция с устройствами</th><th>Соединение</th><th>Система отслеживания</th><th>Точность</th><th>Степеней свободы</th><th>Тип дисплея</th><th>Угол обзора</th><th>Настройка межзрачкового расстояния</th><th>ОТслеживание взгляда</th><th>Тип линз</th><th>Интегрированное аудио</th><th>Тип контроллеров</th><th>Точность контроллеров</th><th>Базовые станции</th><th>Обратная связь</th><th>Операционная система</th><th>Платформа</th><th>Описание</th><th>Удалить</th></tr>";
                        foreach($vivod as $row){
                            echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["vr_name"] . "</td>";
                                echo "<td>" . $row["type"] . "</td>";
                                echo "<td>" . $row["integration"] . "</td>";
                                echo "<td>" . $row["connect_type"] . "</td>";
                                echo "<td>" . $row["tracking_system"] . "</td>";
                                echo "<td>" . $row["accuracy_head"] . "</td>";
                                echo "<td>" . $row["dof"] . "</td>";
                                echo "<td>" . $row["display_type"] . "</td>";
                                echo "<td>" . $row["fov"] . "</td>";
                                echo "<td>" . $row["pupillary_distance"] . "</td>";
                                echo "<td>" . $row["eye_tracking"] . "</td>";
                                echo "<td>" . $row["lens_type"] . "</td>";
                                echo "<td>" . $row["audio_integrated"] . "</td>";
                                echo "<td>" . $row["controller_type"] . "</td>";
                                echo "<td>" . $row["accuracy_controller"] . "</td>";
                                echo "<td>" . $row["base_station_controller"] . "</td>";
                                echo "<td>" . $row["feedback_contoller"] . "</td>";
                                echo "<td>" . $row["os_soft"] . "</td>";
                                echo "<td>" . $row["vr_system"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td><span><a href='delete.php?id=".$row['id']."'>Delete</a></span></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        $vivod->free();
                    }
                    
                    /*if ($result) {
                        while ($element = mysqli_fetch_assoc($result)) {
                            $array[] = $element;
                            print_r ($array);
                        }
                    } else {
                        echo "Ошибка!";
                    }*/

                    $conn->close();
                   
            ?>
        </div>
        <div style="margin:50px 0px 0px 0px;">
            <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="/" title="">На главную</a>
        </div>
        </div>
        <?php include('footer.php');?>