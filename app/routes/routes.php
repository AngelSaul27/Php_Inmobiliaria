<?php
    require_once('../libs/middleware/router.php');

    Router::getResquest('/', 'home');

    //===========CLIENTES==============
    Router::getResquest('cliente', 'cliente/cliente'); //READY
    Router::getResquest('cliente/mensaje', 'cliente/clienteMensajes');
    Router::getResquest('cliente/cita', 'cliente/clienteCitas'); //READY

    //===========ADMINISTRADORES==============
    Router::getResquest('admin', 'admin/admin', 'profile'); //READY
    Router::getResquest('admin/citas', 'admin/admin', 'ListCitas'); //READY
    Router::getResquest('admin/clientes', 'admin/admin', 'ListClientes'); //READY
    Router::getResquest('admin/acesores', 'admin/admin', 'ListAcesores'); //READY
    Router::getResquest('admin/propiedades', 'admin/admin', 'ListPropiedades'); //READY

    //==============BROKER====================
    Router::getResquest('acesor', 'acesor/acesor', 'profile'); //READY
    Router::getResquest('acesor/propiedades', 'acesor/acesor' , 'propiedades'); //READY
    Router::getResquest('acesor/preguntas', 'acesor/acesor' , 'preguntas'); //READY
    Router::getResquest('acesor/citas', 'acesor/acesor' , 'citas'); //READY

    //==============PROPIEADES================
    Router::getResquest('propiedades/filter', 'Propiedades/FilterPropiedades', 'view'); //READY
    Router::getResquest('propiedades/view', 'Propiedades/propiedad', 'view', true); //READY
    Router::getResquest('propiedad/create', 'Propiedades/propiedad', 'viewCreate'); //READY
    Router::getResquest('propiedad/edit', 'Propiedades/propiedad' , 'edit', true); //READY
    Router::postRequest('propiedad_update', 'Propiedades/propiedad', 'update'); //READY
    Router::postRequest('propiedad_create', 'Propiedades/propiedad', 'Create'); //READY

    //==============OTRAS================
    Router::postRequest('deleted_cita_admin', 'admin/admin', 'DeletedCitas');
    Router::postRequest('deleted_usuarios_admin', 'admin/admin', 'DeletedUsuarios');
    Router::postRequest('deleted_propiedad_admin', 'admin/admin', 'DeletedPropiedades');

    Router::postRequest('cliente_update', 'cliente/cliente', 'updateProfile'); //READY
    Router::postRequest('cliente_favorite_remove', 'cliente/cliente', 'deletedFavoriteProfile'); //READY
    Router::postRequest('cliente_delete_mensaje', 'cliente/clienteMensajes', 'deletedMensaje'); //READY

    Router::postRequest('favorite_add', 'favorite/favorite', 'add_favorite'); //READY
    Router::postRequest('question_properties', 'Propiedades/question', 'createQuestionProperties'); //READY

    Router::postRequest('create_cite', 'Propiedades/cite', 'createCiteProperties'); //READY
    Router::postRequest('deleted_cita', 'Propiedades/cite', 'deletedCiteProperties'); //READY
    
    //===========AUTHENTICADORES==============
    Router::postRequest('logout', 'auth/logout'); //READY
    Router::postRequest('auth_login', 'auth/login', 'validation'); //READY
    Router::postRequest('auth_register', 'auth/register', 'validation'); //READY

    //===========404==============
    Router::Errores('errores')
?>