function validarPassword(password) {
    let regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$/;
    return regex.test(password);
}

function validateForm() {
    // Validar campos
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();

    if (name == "" || email == "" || password == "" || confirm_password == "") {
        $("#mensaje").html(`
        <div class="alert alert-danger" role="alert">
            Todos los campos son obligatorios.
        </div>
        `);
        return false;
    } else if(!validarPassword(password)) {
        $("#mensaje").html(`
        <div class="alert alert-danger" role="alert">
            Contraseña inválida
        </div>
        `);
        return false;
    }else if (password != confirm_password) {
        $("#mensaje").html(`
        <div class="alert alert-danger" role="alert">
        Las contraseñas no coinciden.
        </div>
        `);
        return false;
    } else {
        return true;
    }
}

function registerValidation(event) {
    // Evitar que se recargue la página
    event.preventDefault();

    // Validar el formulario
    if (validateForm()) {
        // Crear objeto FormData y agregar campos del formulario
        var datos = new FormData();

        datos.append("name", $("#name").val());
        datos.append("email", $("#email").val());
        datos.append("password", $("#password").val());

        let ajax = new XMLHttpRequest();
    
        if (window.XMLHttpRequest) {
            ajax = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            ajax = new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax.onreadystatechange = function() {
            if( this.readyState === 4 && this.status === 200 ) {
                //mensaje.innerHTML = this.responseText;
                $("#mensaje").html(this.responseText);
                document.getElementById("register-form").reset();
            }
        }

        ajax.open("POST", "../../ajax/auth/Register.php", true);
        ajax.send(datos);
    }
}