
<?php
 
try {
 
    //Registro del autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();
 
    //Creamos un DI, inyector de dependencias, todo está desacoplado, por eso es tan rápido
    $di = new Phalcon\DI\FactoryDefault();
 
    //seteamos donde tendremos las vistas
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });
 
    //seteamos el baseurl, muy útil, reemplaza /phalcon/helloworld/ por tu proyecto,
    //yo lo tengo en htdocs/phalcon/helloworld
    $di->set('url', function(){
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri('/phalcon/helloworld/');
        return $url;
    });
 
    //manejador de las peticiones al framework, recibe el contenedor con las dependencias
    $application = new \Phalcon\Mvc\Application($di);
 
    echo $application->handle()->getContent();
 
} catch(\Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}