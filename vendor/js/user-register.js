$(document).ready(function() {
        jQuery.validator.addMethod("noSpace", function(value, element) { 
            return value.indexOf(" ") < 0 && value != ""; 
            }, "Boşluk kullanmayınız.");
          
        jQuery.validator.addMethod( "alphanumeric", function( value, element ) {
              return this.optional( element ) || /^\w+$/i.test( value );
            }, "Sadece harf, sayı ve alt çizgi kullanınız." );

        $("#signupForm1").validate({
            rules: {
            username: {
                noSpace: true,
                alphanumeric: true,
                required: true,
                minlength: 4,
                maxlength: 18,
                remote: {
                    url: "./check_username.php",
                    type: "POST",
                dataType: 'json',
                  }
                },
            birth_date: {
                required: true,
                min : "1900-01-01",
                max : "2012-01-01",
            },
            password: {
                noSpace:true,
                required: true,
                minlength: 5,
                maxlength: 18,
            },
            password2: {
                required: true,
                equalTo: "#password"
            },
            email: {
            required: true,
            remote: {
                url: "./check_email.php",
                type: "POST",
                dataType: 'json',
                  }
            },
            },
            messages: {
            username: {
                required: "Lütfen kullanıcı adı giriniz.",
                minlength: "Kullanıcı adınız en az 4 en fazla 18 karakter olmalıdır.",
                maxlength: "Kullanıcı adınız en az 4 en fazla 18 karakter olmalıdır.",
            },
            birth_date: {
                required: "Lütfen doğum tarihinizi giriniz.",
                max:"Lütfen geçerli bir tarih giriniz",
                min:"Lütfen geçerli bir tarih giriniz",
            },
            password: {
                required: "Lütfen bir şifre belirleyiniz.",
                minlength: "Şifreniz en az 5 en fazla 18 karakter içermelidir.",
                maxlength: "Şifreniz en az 5 en fazla 18 karakter içermelidir.",
            },
            password2: {
                required: "Lütfen şifrenizi doğrulamak için bu alanı doldurunuz.",
                equalTo: "Şifreleriniz uyuşmuyor",
            },
            email: {
                required: "Lütfen e-mail adresi giriniz",
                email: "Lütfen geçerli bir email adresi giriniz.",  
              }
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