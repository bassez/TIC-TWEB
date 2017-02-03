<?php
function call($controller, $action) {
    require_once('controllers/' . $controller . 'Controller.php');

    switch($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'recipe':
            $controller = new RecipeController();
            break;
    }

    $controller->{ $action }();
}

$controllers = array(
    'pages' => ['home', 'error'],
    'recipe' => ['create']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>
