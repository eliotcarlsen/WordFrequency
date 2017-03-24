<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->post("/result", function() use($app) {
        $word_finder = new RepeatCounter;
        return $app['twig']->render('result.html.twig', array('result'=>$word_finder->countRepeats($_POST['wordInput'], $_POST['sentenceInput'])));
    });

    return $app;
?>
