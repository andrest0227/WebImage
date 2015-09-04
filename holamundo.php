<?php
try{
    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();
 
 
    //Creando una instancia de Inyección de Dependencias
    $di = new Phalcon\DI\FactoryDefault();
 
    //Definiendo el directorio de vistas de la aplicacion, con el uso de una función lamba (función anónima)
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });
 
    //Gestionando la petición y desplegando la aplicación
    $application = new \Phalcon\Mvc\Application();
    $application->setDI($di);
    echo $application->handle()->getContent();
 
} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}