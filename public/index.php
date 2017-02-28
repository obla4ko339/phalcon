<?php
use Phalcon\Mvc\Router;

try {
    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();

    //Create a DI
    $di = new Phalcon\DI\FactoryDefault();



    $di->set('db', function(){
       return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
          "host"=>"localhost",
          "username"=>"root",
          "password"=>"",
          "dbname"=>"iac"
       ));
    });

    //Setting up the view component
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });





    //Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
    echo "Ошибка : ", $e->getMessage();
}
?>