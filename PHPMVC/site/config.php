<?php

//-------------------------------------------------------------------------------------
// Set level of error reporting
error_reporting(-1);
ini_set('display_errors', 1);


//-------------------------------------------------------------------------------------
// Set what to show as debug or developer information in the get_debug() theme helper.
$drygia->config['debug']['drygia'] = false;
$drygia->config['debug']['session'] = false;
$drygia->config['debug']['timer'] = false;
$drygia->config['debug']['db-num-queries'] = false;
$drygia->config['debug']['db-queries'] = false;


//-------------------------------------------------------------------------------------
// Set database.
$drygia->config['database'][0]['dsn'] = 'sqlite:' . DRYGIA_SITE_PATH . '/data/.ht.sqlite';


//-------------------------------------------------------------------------------------
// What type of urls should be used?
//
// default      = 0      => index.php/controller/method/arg1/arg2/arg3
// clean        = 1      => controller/method/arg1/arg2/arg3
// querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
$drygia->config['url_type'] = 1;


//-------------------------------------------------------------------------------------
//Set a base_url to use another than the default calculated
$drygia->config['base_url'] = null;


//-------------------------------------------------------------------------------------
// How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
$drygia->config['hashing_algorithm'] = 'sha1salt';


//-------------------------------------------------------------------------------------
// Allow or disallow creation of new user accounts.
$drygia->config['create_new_users'] = true;


//-------------------------------------------------------------------------------------
// Define session name
$drygia->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$drygia->config['session_key']  = 'drygia';


//-------------------------------------------------------------------------------------
//Define server timezone
$drygia->config['timezone'] = 'Europe/Stockholm';


//-------------------------------------------------------------------------------------
// Define internal character encoding
$drygia->config['character_encoding'] = 'UTF-8';


//-------------------------------------------------------------------------------------
// Define language
$drygia->config['language'] = 'en';


//-------------------------------------------------------------------------------------
// Define the controllers, their classname and enable/disable them.
$drygia->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
  'content'   => array('enabled' => true,'class' => 'CCContent'),
  'blog'	  => array('enabled' => true,'class' => 'CCBlog'),
  'page'   	  => array('enabled' => true,'class' => 'CCPage'),
  'theme'     => array('enabled' => true,'class' => 'CCTheme'),
);

//-------------------------------------------------------------------------------------
// Settings for the theme.
$drygia->config['theme'] = array(
  // The name of the theme in the theme directory
  'name'    => 'grid', 
  'stylesheet'  => 'style.php', 
  'template_file'   => 'index.tpl.php',
  // A list of valid theme regions
  'regions' => array('flash','featured-first','featured-middle','featured-last',
    'primary','sidebar','triptych-first','triptych-middle','triptych-last',
    'footer-column-one','footer-column-two','footer-column-three','footer-column-four',
    'footer',),
	//Statiska delar som header, footer m.m
	'data' => array(
		'header' => 'Drygia',
		'footer' => <<<EOD
<p>Drygia</p>

<p>Källkoden finns på github:<br />
<a href="https://github.com/FreKil/kmom06.git">https://github.com/FreKil/kmom06.git</a>
</p>
EOD
), 
);
