<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
	ROTA DO ANUNCIO
**/
$route['anuncio/(:any)'] = 'home/lerAnuncio/$1';
$route['anuncio'] = 'home/lerAnuncio/$1';
/**
	ROTA DO CADASTRO DE SERVIÇO E VAGA
**/
$route['enviar'] = 'home/enviarServicoVaga';
/**
	ROTA ADMIN
**/
$route['administrativo'] = 'admin';
$route['administrativo/(:num)'] = 'admin/index/$1';
$route['administrativo/logout'] = 'admin/logout';
/**
    ROTA ADMIN - BLOCK CARD, REMOVE CARD, PROMOTE CARD, EDIT CARD
**/
$route['administrativo/block/(:num)'] = 'admin/actions/block/$1';
$route['administrativo/delete/(:num)'] = 'admin/actions/delete/$1';
$route['administrativo/ads/(:num)'] = 'admin/actions/ads/$1';
$route['administrativo/edit/(:num)'] = 'admin/actions/edit/$1';
/**
	ROTA DA PAGINAÇÃO
**/
$route['(:num)'] = 'home/index/$1';
/**
	ROTA DE LISTAGENS EXPECIFICAS 
**/
$route['empregos/(:num)'] = 'home/empregos/$1';
$route['empregos'] = 'home/empregos';

$route['candidatos/(:num)'] = 'home/candidatos/$1';
$route['candidatos'] = 'home/candidatos';
/**
	ROTA DE PESQUISA 
**/
$route['pesquisa/(:num)'] = 'home/pesquisa/$1';
$route['pesquisa'] = 'home/pesquisa';