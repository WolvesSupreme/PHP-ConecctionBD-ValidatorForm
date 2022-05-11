jQuery.validator.addMethod(
  "noSpace",
  function (value, element) {
    return value == "" || value.trim().length != 0;
  },
  "No space please and don't leave it empty"
);
jQuery.validator.addMethod(
  "noSpace",
  function (value, element) {
    return value.indexOf(" ") < 0 && value != "";
  },
  "Space are not allowed"
);
var $registrationForm = $("#registration");
if ($registrationForm.length) {
  $registrationForm.validate({
    rules: {
      placa: {
        required: true,
        minlength: 8,
        noSpace: true
      },
      marca: "required",
      modelo: "required",
      anio: {
        required: true,
        digits: true,
        maxlength: 4,
      },
      color: "required",
    },
    messages: {
      placa: {
        required: "Please enter placa!",
        minlength: "Placa must be 8 char long",
        noSpace: true,
      },
      marca: {
        required: "Please enter marca!",
      },
      modelo: {
        required: "Please enter modelo!",
      },
      anio: {
        required: "Please enter anio!",
        number: "Accept only number",
        maxlength: "Accept only 4 characters",
      },
      color: {
        required: "Please enter color!",
      },
    },
  });
}
