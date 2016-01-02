<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cavachon_com');

/** MySQL database username */
define('DB_USER', 'chriscava');

/** MySQL database password */
define('DB_PASSWORD', '1234cava');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '20h9a!Sw<S+- t l#u*Yt{mrm~!;:+7A|2GU(wq:<+J(:(`l>>6u@X9VFIMRc^M+');
define('SECURE_AUTH_KEY',  'P1]CI]59^=tEn5aVl?DS~hZ+]+ZPKYd:;Y`!pDC{.8)j7}!]p=+8rtz%4AI3Vt|@');
define('LOGGED_IN_KEY',    '3+gY&BZ_clg?DD;5Rs+@V?3||B{Lpl089-9Amnn4jdJWKA9M6gc!z^vA&u5<tIPa');
define('NONCE_KEY',        '_u:`ih,TlF#*W8U,r(:x-%Y2^<Tz!`iYYiS;L-(0.KPXkNgZ2{#tL<CwO%B-|v+1');
define('AUTH_SALT',        '!h{0Ksp|fqXp6p)~cGK2HG+Br+chw-LP$.?mo>|8iFlc]mufj8#HG=<)?)$VT:bd');
define('SECURE_AUTH_SALT', '78|eFY#IMJTpd-O`sS}+b1|(Lf@r^4>SS.[._Zsj5[1sP3.eZ~-XrZ#DfVbWGS3(');
define('LOGGED_IN_SALT',   '%k~8-K*=.dcylZ*uw|R4Q+w8GoP+ga#|.X56Hzvp6lY9_qMdN|(h}4G>HDTP~1QL');
define('NONCE_SALT',       'EO=| Y}tqNjyZ-/)Ac33$o1f5,IZa{p8m!)iu|N$CAXh;=[Q7^qwV!aZvIyd<y-@');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
