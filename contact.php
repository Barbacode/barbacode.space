<?php

if ( empty( $_POST ) ) {
	return;
}

if ( !isset( $_POST['name'] ) ) {
	$_POST['name'] = 'Not provided';
}

if ( !isset( $_POST['email'] ) ) {
	$_POST['email'] = 'Not provided';
}

if ( !isset( $_POST['message'] ) ) {
	return;
}

mail( 'barbacodespace@gmail.com', 'Formulario de contacto de: ' . $_POST['email'], $_POST['message'] );