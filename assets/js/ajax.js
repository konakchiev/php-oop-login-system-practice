jQuery(document).ready(function(){

    jQuery('#submit').click(function(e){
       e.preventDefault();

       var username = jQuery('#username').val().trim();
       var password = jQuery('#password').val().trim();
       var email = jQuery('#email').val().trim();
       var name = jQuery('#name').val().trim();
       var passwordRepeat = jQuery('#passwordRepeat').val().trim();

       jQuery.ajax({
           url: 'includes/signup.inc.php',
           type: 'POST',
           data: {
               username: username,
               password: password,
               email: email,
               name: name,
               passwordRepeat: passwordRepeat,
               submit: 1
           },
           success: function(status) {
               var data = jQuery.parseJSON(status);
               var msg = 'Registration successfull! 👍👍. Please login with your username!';
               var msgUsername = 'Username contains symbols that are not allowed! Please fix! 😮';
               var msgExist = 'User with this email or username already exists! 😭';
               var msgPassword = 'Passwords dont match.';
               var msgEmail = '🤥 Email not vaild! Please try again';
               if(data.status == 'success') {
                   jQuery('#alert-danger').hide();
                   jQuery('#alert').show();
                   jQuery('#alert').text(msg);
                   setTimeout(function () {
                       window.location = "/php-oop-login-system-practice";
                   }, 1500);
               } else if (data.status == 'userexists') {
                   jQuery('#alert-danger').show();
                   jQuery('#alert-danger').text(msgExist);
               } else if (data.status == 'usernamenotvalid') {
                   jQuery('#alert-danger').show();
                   jQuery('#alert-danger').text(msgUsername);
               } else if (data.status == 'passwordnotmatch') {
                   jQuery('#alert-danger').show();
                   jQuery('#alert-danger').text(msgPassword);
               } else if (data.status == 'notvalidemail') {
                   jQuery('#alert-danger').show();
                   jQuery('#alert-danger').text(msgEmail);
               }
           },
           error: function (status) {
               var data = jQuery.parseJSON(status);
               var msg = 'Something went wrong!';
               jQuery('#alert-danger').show();
               jQuery('#alert-danger').text(msg);
           }

       });

    });

});