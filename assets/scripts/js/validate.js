/**
 * Created by Nick on 12/11/2014.
 */



    function validate() {

        if (document.login.username.value == "" || document.login.password.value == ""){

            alert("Username or password is empty please insert something.");


            if (document.login.username.value == ""){
                document.login.username.focus();
            }

            else if (document.login.password.value == "") {
                document.login.password.focus();
            }

            return false;
        }
    }

    function regValidate() {

        if (document.register.regUsername.value == "" || document.register.regPassword.value == ""){

            alert("Username or password is empty please insert something.");

            if (document.register.regUsername.value == ""){
                document.register.regUsername.focus();
            }

            else if(document.register.regPassword.value == "") {
                document.register.regPassword.focus();
            }
            return false;
        }
    }