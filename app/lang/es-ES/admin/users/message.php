<?php

return array(

    'accepted'                  => 'You have successfully accepted this asset.',
    'declined'                  => 'You have successfully declined this asset.',
    'user_exists'               => 'El Usuario ya existe!',
    'user_not_found'            => 'Usuario [:id] no existe.',
    'user_login_required'       => 'El campo Usuario es obligatorio',
    'user_password_required'    => 'El password es obligatorio.',
    'insufficient_permissions'  => 'No tiene permiso.',
    'user_deleted_warning'      => 'Este usuario ha sido eliminado. Deberá restaurarlo para editarlo o asignarle nuevos Equipos.',


    'success' => array(
        'create'    => 'Usuario correctamente creado.',
        'update'    => 'Usuario correctamente actualizado.',
        'delete'    => 'Usuario correctamente eliminado.',
        'ban'       => 'Usuario correctamente bloqueado.',
        'unban'     => 'Usuario correctamente desbloqueado.',
        'suspend'   => 'Usuario correctamente suspendido.',
        'unsuspend' => 'Usuario correctamente no suspendido.',
        'restored'  => 'Usuario correctamente restaurado.',
        'import'    => 'Usuarios importados correctamente.',
    ),

    'error' => array(
        'create' => 'Ha habido un problema creando el Usuario. Intentalo de nuevo.',
        'update' => 'Ha habido un problema actualizando el Usuario. Intentalo de nuevo.',
        'delete' => 'Ha habido un problema eliminando el  Usuario. Intentalo de nuevo.',
        'unsuspend' => 'Ha habido un problema marcando como no suspendido el Usuario. Intentalo de nuevo.',
        'import'    => 'Ha habido un problema importando los usuarios. Por favor intente nuevamente.',
        'asset_already_accepted' => 'Este equipo ya ha sido aceptado.',
        'accept_or_decline' => 'You must either accept or decline this asset.',
    ),

    'deletefile' => array(
        'error'   => 'File not deleted. Please try again.',
        'success' => 'File successfully deleted.',
    ),

    'upload' => array(
        'error'   => 'File(s) not uploaded. Please try again.',
        'success' => 'File(s) successfully uploaded.',
        'nofiles' => 'You did not select any files for upload',
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, doc, docx, pdf, and txt.',
    ),

);
