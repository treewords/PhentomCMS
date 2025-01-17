<?php
//Refuses direct access
if (!defined("SSC")){ exit("You don't have access to this file"); }

$lang['db_info'] = "Informação da Base de Dados";
$lang['db_host'] = "Host da BD";
$lang['db_user'] = "Utilizador da BD";
$lang['db_password'] = "Palavra Passe da BD";
$lang['db_name'] = "Nome da BD do Site";
$lang['db_forum'] = "Nome da DB do Forum";
$lang['db_error'] = "Erro ao connectar a  BD.";

$lang['server_info'] = "Informação do Servidor";
$lang['server_name'] = "Nome do Servidor";
$lang['server_slogan'] = "Slogan do Servidor";
$lang['user'] = "Utilizador";
$lang['password'] = "Palavra Passe, duas vezes";
$lang['server_core'] = "Núcleo do Servidor";
$lang['expansion'] = "Expanção";
$lang['realmlist'] = "Lista Reino";
$lang['max_players'] = "Máximo de Jogadores";
$lang['slider'] = "Deslizador de Imagens";
$lang['pass_error'] = "Passwords não correspondem";

$lang['config_info'] = "Informação da Configuração";
$lang['error_in'] = "Erro na";
$lang['query'] = "Query";
$lang['no_error'] = "Nenhum erro foi detectado durante a instalação!";

$lang['php_error'] = "PHP 5.4 ou superior é necessário.";
$lang['permissions_error'] = "Dar permissões a pasta do projecto.";
$lang['mysql_error'] = "Mysql 5.4 ou superior é necessário.";

foreach ($lang as $key=>$value){
	$system->assign($key, $lang[$key]);
}
