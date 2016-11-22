<?php
$dbms = 'mysqli';
$dbhost = getenv('DB_HOST');
$dbport = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$dbuser = getenv('DB_USER');
$dbpasswd = getenv('DB_PASS');
$table_prefix = 'phpbb_';
$acm_type = 'file';
$load_extensions = '';

$siteChatUrl = 'ws://localhost:4241';
$siteChatProtocol = 'site-chat';

@define('PHPBB_INSTALLED', true);
?>
