<?php
/**
 * application.config.php
 *
 * Main application configuration parameters.
 * You can change those values according to your application environment.
 *
 * @filesource application.config.php
 * @author Rosario Carvello <rosario.carvello@gmail.com>
 * @version GIT:v1.0.0
 * @copyright (c) 2016 Rosario Carvello <rosario.carvello@gmail.com> - All rights reserved. See License.txt file
 * @license BSD Clause 3 License
 * @license https://opensource.org/licenses/BSD-3-Clause This software is distributed under BSD-3-Clause Public License
 */

/**
 * Defines the constants for MySQL database connection parameters.
 */

/**
 *  MySQL Host
 */
define("DBHOST","YOUR_HOST");

/**
 *  MySQL User
 */
define("DBUSER","YOUR_USER");

/**
 * MySQL Password
 */
define("DBPASSWORD","YOUR_PASSWORD");

/**
 *  MySQL Database
 */
define("DBNAME","YOUR_DB");

/**
 *  MySQL Port
 */
define('DBPORT', '3306');

/**
 * Defines a constant for site URL
 * @note without the ending slash
 */
define("SITEURL","http://YOUR_HOST/YOUR_APP");
// Or HTTPS
// define("SITEURL","https://YOUR_HOST/YOUR_APP");

/**
 * Defines a constant for the default controller
 * @note use URL like notation for mapping a Controller named with a PascalCase notation
 */
define("DEFAULT_CONTROLLER", "index");

/**
 * Defines a constant for indicating the default login controller
 * You can use URL notation for specifying your custom Controller
 */
define("DEFAULT_LOGIN_PAGE", "common/login");

/**
 * Date formats:
 * @note HTML5 date format is like 2016/01/20 - aaaa/mm/dd
 */

/**
 * Defines a constant for the transformation of the date format of all
 * date fields fetched from mysql tables
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used  format: define("FETCHED_DATE_FORMAT","d/m/Y");
 */
define("FETCHED_DATE_FORMAT","Y-m-d");

/**
 * Defines a constant for the transformation of the datetime format of all
 * datetime fields fetched from mysql tables.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("FETCHED_DATETIME_FORMAT","d/m/Y H:i:s");
 *
 */
define("FETCHED_DATETIME_FORMAT","Y-m-d H:i:s");

/**
 * Defines a constant for interpreting of dates format used into all the
 * SQL statements for inserting or updating mysql date fields.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("STORED_DATE_FORMAT","%d/%m/%Y");
 */
define("STORED_DATE_FORMAT","%Y-%m-%d");

/**
 * Defines a constant for interpreting of datetime format used into all the
 * SQL statements for inserting or updating mysql datetime fields.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("STORED_DATETIME_FORMAT","%d/%m/%Y %H:%i:%s");
 */
define("STORED_DATETIME_FORMAT","%Y-%m-%d %H:%i:%s");

/**
 *  Instructs framework if MYSQL uses FULL_GROUP_BY sql mode
 *  On MySQL > 5.7  FULL_GROUP_BY is enabled by default
 *  If on your MySQL ULL_GROUP_BY is ON set it to true else false 
 */
define ("MYSQL_MODE_FULL_GROUP_BY",false);
/**
 * Globals Placeholders
 */
include_once ("globals.config.php");
