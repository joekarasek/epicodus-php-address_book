<?php
    // include dependencies and classes
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    // initialize super global $_SESSION w/ 'list_of_contacts'
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    // instantiate Silex app, add twig capability to app
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
        ));

    // routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    return $app;
?>
