<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
$route['default_controller'] = 'calculadora';
$route['404_override'] = '';
$route['operacao/(:num)/(:num)'] = 'calculadora/operacao/$n1/$n2';
$route['translate_uri_dashes'] = FALSE;
*/


/*
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['ola/(:num)/(:any)'] = 'welcome/ola/$1/$2';
$route['operacao/(:any)/(:num)/(:num)'] = 'calculadora/operacao/$1/$2/$3';
$route['translate_uri_dashes'] = FALSE;
*/


$route['aluno'] = 'aluno/mostrarForm';
$route['aluno/cadastro'] = 'aluno/cadastrar';
$route['logout'] = 'login/sair';
