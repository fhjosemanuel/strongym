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
