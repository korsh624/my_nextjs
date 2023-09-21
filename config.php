<?php
define("SYS_TITLE", "Application title");
define("SYS_LOGO", "Logo text");
define("SYS_SENDER", "Sender name");
define("SYS_DESCRIPTION", "Description");
define("SYS_KEYWORDS", "Keywords");
define("SYS_COPYRIGHT", "Copyright");

// Production mode
define("PRODUCTION", false);

// Cookie defines
define("SYS_COOKIE", "mycookie-");
define("SYS_COOKIE_ACCEPT", SYS_COOKIE . "accept");
define("SYS_COOKIE_DTE", SYS_COOKIE . "dte");
define("SYS_COOKIE_AUTH", SYS_COOKIE . "auth");

// Path constants
define('PATH_LIB', join(DIRECTORY_SEPARATOR, [ROOT_PATH, "lib"]));
define('PATH_LOGS', join(DIRECTORY_SEPARATOR, [ROOT_PATH, "logs"]));
define('PATH_CACHE', join(DIRECTORY_SEPARATOR, [ROOT_PATH, "cache"]));
define('PATH_ASSETS', join(DIRECTORY_SEPARATOR, [ROOT_PATH, "assets"]));

// DB Connection string
//define('DB_CONNECT', 'mysql://user:password@localhost/database_name');
//define('DB_CONNECT', 'postgres://user:password@localhost/database_name');
