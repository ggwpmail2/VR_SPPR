$(document).ready(function () {
  var form_count = 1, previous_form, next_form, total_forms;
  total_forms = $("fieldset").length;
  $(".next-form").click(function () {
    previous_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(++form_count);
  });
  $(".next-form-fov").click(function () {
    var error_message = '';
    if (!$("#fov").val()) {
      error_message += "Заполните значение угла обзора";
    }
    else {
      $('.alert-success').addClass('hide').html(error_message);
      previous_form = $(this).parent();
      next_form = $(this).parent().next();
      next_form.show();
      previous_form.hide();
      setProgressBarValue(++form_count);
    }
    if (error_message) {
      $('.alert-success').removeClass('hide').html(error_message);
      return false;
    } else {
      return true;
    }
  });


  $(".next-form-connect_type").click(function () {
    var error_message = '';
    var checkbox = $('[name="connect_type[]"]');
    if (checkbox.is(':checked'))
    {
      $('.alert-success').addClass('hide').html(error_message);
      previous_form = $(this).parent();
      next_form = $(this).parent().next();
      next_form.show();
      previous_form.hide();
      setProgressBarValue(++form_count);
    }
    else
    {
      error_message += "Выберите тип подключения";
      $('.alert-success').removeClass('hide').html(error_message);
    }

  });
 
    $(".next-form-tracking_system").click(function () {
      var error_message = '';
      var checkbox = $('[name="tracking_system[]"]');
      if (checkbox.is(':checked'))
      {
        $('.alert-success').addClass('hide').html(error_message);
        previous_form = $(this).parent();
        next_form = $(this).parent().next();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(++form_count);
      }
      else
      {
        error_message += "Выберите датчики отслеживания";
        $('.alert-success').removeClass('hide').html(error_message);
      }
  
    });





  $(".previous-form").click(function () {
    previous_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(--form_count);
  });
  setProgressBarValue(form_count);
  function setProgressBarValue(value) {
    var percent = parseFloat(100 / total_forms) * value;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width", percent + "%")
      .html(percent + "%");
  }

  // Handle form submit and validation
  $("#register_form").submit(function (event) {
    var error_message = '';
    /*if(!$("#email").val()) {
      error_message+="Please Fill Email Address";
    }
    if(!$("#password").val()) {
      error_message+="<br>Please Fill Password";
    }
    if(!$("#mobile").val()) {
      error_message+="<br>Please Fill Mobile Number";
    }*/
    // Display error if any else submit form
    if (error_message) {
      $('.alert-success').removeClass('hide').html(error_message);
      return false;
    } else {
      return true;
    }
  });

  $("#info_form").submit(function (event) {
    var error_message = '';
    if (!$("#vr_name").val()) {
      error_message += "Заполните название устройства";
    }
    if (!$("#fov").val()) {
      error_message += "<br>Заполните поле угол обзора";
    }

    // Display error if any else submit form
    if (error_message) {
      $('.alert-success').removeClass('hide').html(error_message);
      return false;
    } else {
      return true;
    }
  }
  );



});

jQuery(function ($) {
  var requiredCheckboxes = $(':checkbox[required]');
  requiredCheckboxes.on('change', function (e) {
    var checkboxGroup = requiredCheckboxes.filter('[name="' + $(this).attr('name') + '"]');
    var isChecked = checkboxGroup.is(':checked');
    checkboxGroup.prop('required', !isChecked);
  });
  requiredCheckboxes.trigger('change');
});