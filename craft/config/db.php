<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	'*' => array(        
        // Use the same prefix in all environments
        'tablePrefix' => 'craft',
    ),

	// Dev database info
	'.dev' => array(
  	// 'server' => 'localhost',
		// 'user' => 'root',
		// 'password' => 'root',
		// 'database' => 'corben',
		'server' => '198.1.79.94',
		'user' => 'ryanbeli_dbadmin',
		'password' => '@436StaffordSt',
		'database' => 'ryanbeli_corben',
  ),

  // Staging database info
	'staging.studiochakra.com' => array(
    'server' => 'localhost',
		'user' => 'ryanbeli_dbadmin',
		'password' => '@436StaffordSt',
		'database' => 'ryanbeli_corben',
  ),  

  // LIVE database info
	'corben.com.au' => array(
    'server' => 'localhost',
		'user' => 'petercru_admin',
		'password' => 'ROb2oinZu6SZ',
		'database' => 'petercru_corben',
  ),  

);