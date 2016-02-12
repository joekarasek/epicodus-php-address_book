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
        return $app['twig']->render('index.html.twig', array(
            'contacts' => Contact::getAll()
        ));
    });

    $app->get("/add_contact", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->post("/add_contact_success", function() use ($app) {
        $new_contact = new Contact($_POST['first_name'] , $_POST['last_name'] , $_POST['email'] , $_POST['phone'] , $_POST['street_address'] , $_POST['city'] , $_POST['state'] , $_POST['zip_code'] , $_POST['notes']);
        $new_contact->saveContact();


        return $app['twig']->render('index.html.twig', array(
            'contacts' => Contact::getAll()
        ));
    });

    $app->get("/delete_contact", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'contacts' => Contact::getAll(),
            'delete' => true
        ));
    });

    $app->post("/delete_contact_success", function() use ($app) {
        $contact_to_delete_ID = $_POST['delete_contact'];
        foreach($_SESSION['list_of_contacts'] as $key => $contact) {
            if ($contact->getContactID() == $contact_to_delete_ID) { break; }
        }
        $_SESSION['list_of_contacts'][$key]->deleteContact();

        return $app['twig']->render('index.html.twig', array(
            'contacts' => Contact::getAll()
        ));
    });



    return $app;
?>
