<?php

/** @var \Laravel\Lumen\Routing\Router $router */



$router->get('/data', 'MemberController@readData');
$router->post('/data', 'MemberController@createData');
$router->put('/data', 'MemberController@updateData');
$router->delete('/data', 'MemberController@deleteData');