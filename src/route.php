<?php
$app->get('/lines', 'App\Lines\Controller\IndexController::GetLines');
$app->get('/stops', 'App\Stops\Controller\StopsController::GetStops');
