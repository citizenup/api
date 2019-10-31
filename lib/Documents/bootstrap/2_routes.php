<?php
use Ethereal\Container;

$router = Container::get('Router');
// HTTP_METHOD, path, Controller class FQCN, method name, is auth required
$router->addRoute('GET', '/documents', '\Citizen\Documents\Controller\Documents', 'getAllDocs', false);
$router->addRoute('GET', '/documents/{documentId}', '\Citizen\Documents\Controller\Documents', 'getOneDoc', false);

