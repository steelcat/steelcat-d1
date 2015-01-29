<?php
// Подключаем роутер Nanite
require 'lib/Nanite/Nanite.php';
require 'lib/Nanite/functions.php';

// Главная страница
get('/', function(){
	require_once('pages/index.php');
});

// Мои работы
get('/my-works', function(){
	require_once('pages/my-works.php');
});

// Связаться со мной
get('/contact-me', function(){
	require_once('pages/contact-me.php');
});

// Если страница не существует, показываем 404 страницу
if (!Nanite::$routeProccessed) {
	require_once('pages/404.php');
}