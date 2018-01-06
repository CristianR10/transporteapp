<?php
  //Constantes  
  /* *******OBS DUVIDAS ASSISTIR A AULA 14 
  https://www.youtube.com/watch?v=VY6-8kj2frI&list=PL2NLqGvZxQu2xMnvPKqLz4f9Pljsj-K4B&index=15*/

  $configs = new HXPHP\System\Configs\Config;
  /*Configuração dos ambientes para isso ele precisa existir na pasta
  src/HXPHP/System/configs/Environments duvidas assistir a aula 2 
  https://www.youtube.com/watch?v=sr_awqysIn8&list=PL2NLqGvZxQu2xMnvPKqLz4f9Pljsj-K4B&index=2
  */

  $configs->env->add('development');
  $configs->env->development->baseURI = '/git/transporte/';
  /*variavel config conecta com env = environment = ambiente configura a URI*/

  $configs->env->development->database->setConnectionData(array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'transporteapp'
  ));
  //Conecxão do ambiente ao BD

  $configs->env->development->auth->setURLs('/git/transporte/home', '/git/transporte/login');
  $configs->env->development->menu->setMenus(array(
    'Home/fa-dashboard' => '%baseURI%/home',
    'Editar perfil/cog' => '%baseURI%/perfil/editar',
    'Sair/sign-out' => '%baseURI%/login/sair',
  ), 'user');
  $configs->env->development->menu->setMenus(array(
    'Home/dashboard' => '%baseURI%/home',
    'Usuários/users' => '%baseURI%/usuarios',
    'Editar perfil/cog' => '%baseURI%/perfil/editar',
    'Sair/sign-out' => '%baseURI%/login/sair'
  ), 'administrator');
  $configs->env->development->menu->setMenus(array(
    'Home/dashboard' => '%baseURI%/home'
  ));
  //Mudar 
  $configs->env->development->menu->setConfigs(array(
    'container' => 'nav',
    'container_class' => 'navbar navbar-default',
    'menu_class' => 'nav navbar-nav'
  ));

  $configs->env->add('production');
  $configs->env->production->baseURI = '/';
  $configs->env->production->database->setConnectionData(array(
    'host' => 'localhost',
    'user' => 'hxphp190_sistema',
    'password' => '^EKI1LK(&kV[',
    'dbname' => 'hxphp190_sistemahx'
  ));
  $configs->env->production->auth->setURLs('/home/', '/login/');
  $configs->env->production->menu->setMenus(array(
  //texto do menu/
    'Home/dashboard' => '%baseURI%/home',
    'Editar perfil/cog' => '%baseURI%/perfil/editar',
    'Sair/sign-out' => '%baseURI%/login/sair',
  ), 'user');
  $configs->env->production->menu->setMenus(array(
    'Home/dashboard' => '%baseURI%/home',
    'Usuários/users' => '%baseURI%/usuarios',
    'Editar perfil/cog' => '%baseURI%/perfil/editar',
    'Sair/sign-out' => '%baseURI%/login/sair'
  ), 'administrator');
  $configs->env->production->menu->setMenus(array(
    'Home/dashboard' => '%baseURI%/home'
  ));
  $configs->env->production->menu->setConfigs(array(
    'container' => 'nav',
    'container_class' => 'navbar navbar-default',
    'menu_class' => 'nav navbar-nav'
  ));
  //Modifica a navbar mas ainda não sei onde coloca o js do materialise
  return $configs;