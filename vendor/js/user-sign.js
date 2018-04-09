$(document).ready(function(){
		jQuery.validator.addMethod("noSpace", function(value, element) { 
        	return value.indexOf(" ") < 0 && value != ""; }, "Boşluk kullanmayınız.");
		jQuery.validator.addMethod("alphanumeric", function( value, element ) {
              return this.optional( element ) || /^\w+$/i.test( value );}, "Kullanıcı adınız sadece harf, sayı ve alt çizgi içerir." );
		$("#loginForm1").validate({
			rules:{
				username: {
					required : true,
					noSpace : true,
					alphanumeric : true,
				},
				password:{
					required : true,
				},
			},
			messages: {
				username: {
					required : "Lütfen kullanıcı adınızı giriniz.",
				},
				password: {
					required : "Lütfen şifrenizi giriniz.",
				},

			},
			errorElement: "small",
            errorPlacement: function(error, element) {

            error.addClass("help-block");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
            
            },
		});
	});