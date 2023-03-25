<?php
require_once "../../controllers/UserController.php";

function obtenerUsuario($email) {
  $userObject = new UserController();
  $datosUsuario = $userObject->email($email);
  return $datosUsuario;
}

function actualizarEstatus($user) {
  $userObject = new UserController();
  $actualizarEstado = $userObject->update("validated = true", "id = $user");
  return $actualizarEstado;
}