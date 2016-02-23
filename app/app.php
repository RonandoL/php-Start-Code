<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Example.php";

    $app = new Silex\Application();
    
    $server = 'mysql:host=localhost;dbname=to_do';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('example.html.twig'); //
    });

    return $app;

?>
