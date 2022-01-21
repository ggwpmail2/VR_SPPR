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
        <form id="register_form" novalidate action="multi_form_action.php" method="post">
            <fieldset>
                <h2>Вопрос 1: Add Account Details</h2>
                <div class="form-group">
                    <label for="email">Email address*</label>
                    <input type="email" class="form-control" required id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <input type="button" class="next-form btn btn-info" value="Следующий" />
            </fieldset>
            <fieldset>
                <h2> Вопрос 2: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 3: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 4: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 5: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 6: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 7: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 8: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 9: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 10: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 11: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 12: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 13: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 14: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 15: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2> Вопрос 16: Add Personal Details</h2>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Предыдущий" />
                <input type="button" name="next" class="next-form btn btn-info" value="Следующий" />
            </fieldset>

            <fieldset>
                <h2>Вопрос 17: Add Contact Information</h2>
                <div class="form-group">
                    <label for="mobile">Mobile*</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" placeholder="Communication Address"></textarea>
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