<?php
/**
 * Site configuration, this file is changed by user per site.
 *
 */

/**
 * Set level of error reporting
 */
error_reporting(-1);
ini_set('display_errors', 1);


/**
 * Set what to show as debug or developer information in the get_debug() theme helper.
 */
$tube->config['debug']['lydia'] = false;
$tube->config['debug']['session'] = false;
$tube->config['debug']['timer'] = true;
$tube->config['debug']['db-num-queries'] = true;
$tube->config['debug']['db-queries'] = true;


/**
 * Set database(s).
 */
$tube->config['database'][0]['dsn'] = 'sqlite:' . TUBE_SITE_PATH . '/data/.ht.sqlite';


/**
 * What type of urls should be used?
 * 
 * default      = 0      => index.php/controller/method/arg1/arg2/arg3
 * clean        = 1      => controller/method/arg1/arg2/arg3
 * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
 */
$tube->config['url_type'] = 1;


/**
 * Set a base_url to use another than the default calculated
 */
$tube->config['base_url'] = null;


/**
 * How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
 */
$tube->config['hashing_algorithm'] = 'sha1salt';


/**
 * Allow or disallow creation of new user accounts.
 */
$tube->config['create_new_users'] = true;


/**
 * Define session name
 */
$tube->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$tube->config['session_key']  = 'lydia';


/**
 * Define server timezone
 */
$tube->config['timezone'] = 'Europe/Stockholm';


/**
 * Define internal character encoding
 */
$tube->config['character_encoding'] = 'UTF-8';


/**
 * Define language
 */
$tube->config['language'] = 'en';


/**
 * Define the controllers, their classname and enable/disable them.
 *
 * The array-key is matched against the url, for example: 
 * the url 'developer/dump' would instantiate the controller with the key "developer", that is 
 * CCDeveloper and call the method "dump" in that class. This process is managed in:
 * $tube->FrontControllerRoute();
 * which is called in the frontcontroller phase from index.php.
 */
$tube->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
);

/**
 * Settings for the theme.
 */
$tube->config['theme'] = array(
  // The name of the theme in the theme directory
  'name'    => 'core', 
);
