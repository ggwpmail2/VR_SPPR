<?php 
include('header.php');
?>


<div class="container" style="min-height:500px;">
    <div class="container">
        <h2>Система помощи подбора оборудования виртуальной реальности</h2>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div>
        <div class="alert alert-success hide"></div>
        <form id="register_form" action="multi_form_action.php" method="post">
            <fieldset>
                <h2>Вопрос 1: Тип шлема</h2>
                <div class="form-group">
                    <p>Устройства делятся на две основные категории - автономные и стационарные. </p>
                    <p>Основным различием между автономным и стационарным исполнениями является возможность работать автономным шлемам виртуальной реальности без отдельного вычислительного устройств. 
                    <p>Автономные шлемы виртуальной реальности содержат в своем устройстве специальную однокристальную систему, со своей операционной системой и внутренних хранилищем, для хранения и исполнения приложений виртуальной реальности. Автономные шлемы виртуальной реальности могут иметь возможность подключаться к отдельному вычислительному устройству и работать как стационарный шлем виртуальной реальности, без задействования однокристальной системы.</p>
                </div>
                <div class="form-group">
                <input type="radio" id="type1" name="type" value="Автономный" checked><label for="type1">Автономный</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="type2" name="type" value="Стационарный"><label for="type2">Стационарный</label>
                </div>
                <input type="button" class="next-form btn btn-info" value="Следующий" />
            </fieldset>
            <fieldset>
                <h2> Вопрос 2: Интеграция со сторонними устройствами</h2>
                <div class="form-group">
                    <p>Функционал систем виртуальной реальности можно расширить, интегрировав в него отдельные модули для шлемов или контроллеров. Не все системы поддерживают такие интеграции.</p>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="integration" name="integration" value="1"><label for="integration">Интеграция с другими устройствами </label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 3: Вид подключения</h2>
                <div class="form-group">
                    <p>По виду подключения, шлемы могут быт проводного и беспроводного исполнения. В проводном исполнении, шлем соединяется с вычислительным устройством по кабелю (через интерфейсы HDMI, DisplayPort, USB 3.0). Преимуществом подключения по кабелю является минимально допустимая задержка при передаче информации и не требуется дополнительное сжатие видеопотока, из-за чего пользователю показывается изображение в наилучшем качестве.</p>
                    <p>При беспроводном соединении, используется протокол Wi-Fi (стандарты 802.11ac, 802.11ax). В ближайшем будущем, рассматривается использование сетей 5G. Беспроводные шлемы виртуальной реальности комплектуются емким аккумулятором, для обеспечения хорошей автономности. Преимуществом беспроводных шлемов является их удобство эксплуатации, что позволяет более свободно перемещаться в шлеме по пространству.</p>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="connect_type1" name="connect_type[]" value="Проводной" required="required"><label for="connect_type1">Проводной</label>
                    </div>
                <div class="form-group">
                  <input type="checkbox" id="connect_type2" name="connect_type[]" value="Беспроводной" required="required"><label for="connect_type2">Беспроводной</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form-connect_type btn btn-info  connect_type" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 4: Вид датчиков</h2>
                <div class="form-group">
                    <p>Датчики отслеживания движения и датчики отслеживания пространства позволяют передавать достаточную для комфортного использования виртуальной реальности точность, но, из-за ограничений и несовершенства технологии могут возникать ошибки.</p>
                    <p>Внутренние датчики не требуют специально оборудованного помещения и после небольшой настройки и калибровки устройство готово к работе. Внутренние датчики обеспечивают достаточный уровень отслеживания</p>
                    <p>Во внешних датчиках используются более точные компоненты, нежели чем в интегрированных, так как нет строгого требования к весу и размеру компонента. Так же, из-за фиксирования местоположения самого датчика, его точность на порядок выше.
                    Они обеспечивают максимально возможную точность передачи движений пользователя. Внешние датчики обычно установлены в специально оборудованном помещении. При необходимости смены помещения, требуется установка и полная калибровка датчиков.</p>
                    
                </div>
                <div class="form-group">
                <input type="checkbox" id="tracking_system1" name="tracking_system[]" value="Внешние датчики" required="required"><label for="tracking_system1">Внешние датчики</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="tracking_system2" name="tracking_system[]" value="Интегрированные датчики" required="required"><label for="tracking_system2">Интегрированные датчики</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form-tracking_system btn btn-info tracking_system" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 5: Точность отслеживания шлема</h2>
                <div class="form-group">
                    <p>В зависимости от датчиков и методов отслеживания, точность передачи движений пользователя может варьироваться от минимально достаточной для взаимодействия с виртуальной реальностью, так и быть максимально точной.</p>
                </div>
                <div class="form-group">
                <input type="radio" id="accuracy_head1" name="accuracy_head" value="Достаточная" checked><label for="accuracy_head1">Достаточная</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="accuracy_head2" name="accuracy_head" value="Максимальная"><label for="accuracy_head2">Максимальная</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 6: Количество степеней свободы</h2>
                <div class="form-group">
                    <p>3 степени свободы (3DoF) - отслеживаются повороты и вращение головы, но не перемещение ногами. </p>
                    <p>6 степеней свободы (6DoF) – виртуальное пространство реагирует не только на вращение, но и на перемещение головы в пространстве.</p>
                </div>
                <div class="form-group">
                <input type="radio" id="dof1" name="dof" value="3" checked><label for="dof1">3 DoF</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="dof2" name="dof" value="6"><label for="dof2">6 DoF</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 7: Тип дисплея</h2>
                <div class="form-group">
                    <p>Тип используемой матрицы в дисплее шлема виртуальной реальности, влияет на различные параметры отображения (глубина черного, передача цветов и т.д.).</p>
                </div>
                <div class="form-group">
                <input type="radio" id="display_type1" name="display_type" value="IPS" checked><label for="display_type1">IPS</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="display_type2" name="display_type" value="OLED"><label for="display_type2">OLED</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="display_type3" name="display_type" value="AMOLED"><label for="display_type3">AMOLED</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 8: Угол обзора</h2>
                <div class="form-group">
                    <p>Угол обзора шлема виртуальной реальности отвечает за доступную для отображения площадь изображения. Чем больше угол обзора, тем большее количество элементов может быть показано пользователю.</p>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="fov" id="fov" required placeholder="Угол обзора">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form-fov btn btn-info fov" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 9: Межзрачковое расстояние</h2>
                <div class="form-group">
                    <p>Межзрачковое расстояние (IPD) — это расстояние между центрами ваших глаз.Точные настройки IPD помогают получить четкое изображение и снизить нагрузку на глаза.
Объективы шлема фокусируют изображения в своем оптическом центре. В VR-отрасли эту область четкости иногда называют «золотой точкой». Вращая регулятор IPD, можно настроить область четкости для наиболее комфортного просмотра. Неправильно отрегулированный параметр IPD и неправильно настроенные шлемы — основные причины размытости изображений, головокружения и усталости глаз.</p>
                </div>
                <div class="form-group">
                <input type="checkbox" id="pupillary_distance" name="pupillary_distance" value="1"><label for="pupillary_distance">Настройка межзрачкового расстояния </label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 10: Отслеживание взгляда</h2>
                <div class="form-group">
                    <p>Функция отслеживание взгляда предоставляет приложениям сведения о том, куда смотрит пользователь в реальном времени. Может использоваться в различных сценариях взаимодействия с приложениями.</p>
                </div>
                <div class="form-group">
                <input type="checkbox" id="eye_tracking" name="eye_tracking" value="1"><label for="eye_tracking">Отслеживание взгляда </label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 11: Тип линз</h2>
                <div class="form-group">
                    <p></p>
                </div>
                <div class="form-group">
                <input type="radio" id="lens_type1" name="lens_type" value="Линзы Френеля" checked><label for="lens_type1">Линзы Френеля</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="lens_type2" name="lens_type" value="Оптические"><label for="lens_type2">Оптические</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="lens_type3" name="lens_type" value="Асферические"><label for="lens_type3">Асферические</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="lens_type4" name="lens_type" value="Двояковыпуклые"><label for="lens_type4">Двояковыпуклые</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 12: Встроенные аудио устройства</h2>
                <div class="form-group">
                    <p>Наличие встроенных динамиков или наушников для воспроизведения звуков, микрофона(-ов) для передачи голоса</p>
                </div>
                <div class="form-group">
                <input type="checkbox" id="audio_integrated" name="audio_integrated" value="1"><label for="audio_integrated">Интегрированные аудио устройства </label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 13: Тип контроллеров</h2>
                <div class="form-group">
                    <p></p>
                </div>
                <div class="form-group">
                <input type="radio" id="controller_type1" name="controller_type" value="Стандартные контроллеры" checked><label for="controller_type1">Стандартные контроллеры</label>
                </div>
                <div class="form-group">
                <input type="radio" id="controller_type2" name="controller_type" value="Игровые контроллеры"><label for="controller_type2">Игровые контроллеры</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="controller_type3" name="controller_type" value="Перчатки-контроллеры"><label for="controller_type3">Перчатки-контроллеры</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="controller_type4" name="controller_type" value="Виртуальные контроллеры"><label for="controller_type4">Виртуальные контроллеры</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="controller_type5" name="controller_type" value="Тактильные контроллеры"><label for="controller_type5">Тактильные контроллеры</label>
                </div>
                <div class="form-group">
                <input type="radio" id="controller_type6" name="controller_type" value="Тактильные перчатки-контроллеры"><label for="controller_type6">Тактильные перчатки-контроллеры</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="controller_type7" name="controller_type" value="Тактильные костюмы"><label for="controller_type7">Тактильные костюмы</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="controller_type8" name="controller_type" value="Рули и джойстики"><label for="controller_type8">Рули и джойстики</label>
                  </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 14: Точность контроллеров</h2>
                <div class="form-group">
                    <p></p>
                </div>
                <div class="form-group">
                <input type="radio" id="accuracy_controller1" name="accuracy_controller" value="Достаточная" checked><label for="accuracy_controller1">Достаточная</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="accuracy_controller2" name="accuracy_controller" value="Максимальная"><label for="accuracy_controller2">Максимальная</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 15: Обратная связь</h2>
                <div class="form-group">
                    <p></p>
                </div>
                <div class="form-group">
                <input type="checkbox" id="feedback_contoller" name="feedback_contoller" value="1"><label for="feedback_contoller">Обратная связь контроллеров </label>
                </div>
                
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 16: Базовые станции</h2>
                <div class="form-group">
                    <p>Для реализации работоспособности систем виртуальной реальности в больших помещениях с большим количеством пользователей, требуются дополнительные датчики, позволяющие собирать и обрабатывать большое количество данных об отслеживании.</p>
                </div>
                <div class="form-group">
                <input type="checkbox" id="base_station_controller" name="base_station_controller" value="1"><label for="base_station_controller">Базовые станции </label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2>Вопрос 17: Операционная система</h2>
                <div class="form-group">
                    <p>Операционная система для настройки и запуска приложений виртуальной реальности.</p>
                </div>
                <div class="form-group">
                <input type="radio" id="os_soft1" name="os_soft" value="Windows" checked><label for="os_soft1">Windows</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="os_soft2" name="os_soft" value="Android"><label for="os_soft2">Android</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="os_soft3" name="os_soft" value="Linux"><label for="os_soft3">Linux</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2>Вопрос 18: Платформа</h2>
                <div class="form-group">
                    <p>Инструмент для использования виртуальной реальности, выступающий платформой для создания взаимосвязи между оборудованием и приложением.</p>
                </div>
                <div class="form-group">
                <input type="radio" id="vr_system1" name="vr_system" value="Steam VR" checked><label for="vr_system1">Steam VR</label>
                </div>
                <div class="form-group">
                  <input type="radio" id="vr_system2" name="vr_system" value="Open VR"><label for="vr_system2">Open VR</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="vr_system3" name="vr_system" value="Vive Reality"><label for="vr_system3">Vive Reality</label>
                  </div>
                <div class="form-group">
                  <input type="radio" id="vr_system4" name="vr_system" value="Meta VR"><label for="vr_system4">Meta VR</label>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="submit" name="submit" class="submit btn btn-success" value="Отправить" />
            </fieldset>
        </form>



        <div style="margin:50px 0px 0px 0px;">
            <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="/" title="">На главную</a>
        </div>
    </div>
    <?php include('footer.php');?>