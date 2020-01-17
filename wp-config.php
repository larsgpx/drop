<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'drop' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'ot&Yy%Qrz;O1.Ci^@ qt5v${+W!Mtmmxb/gQmMsA<Hl&c=&N[hwB}w*WwbXNr-,K' );
define( 'SECURE_AUTH_KEY', 'HM.YMRMK7u1>=fJT!+Tw7Fhc$y7yVnsFn.AGBzB#AXyQDYFH;5nXu{/f/%Yvh;Wu' );
define( 'LOGGED_IN_KEY', ')Kr9 ij6iD5Zw6>}{*cR*zVw,vY/LVkfQ:uc,_$B&q._K-=,nj9*`DpItz%3eZ8Z' );
define( 'NONCE_KEY', 't(*jeztspdbhtgoL2NU((Cm2dLTijQ6W#lU%d+|cy}2d~E)WAIE>s]dFW2?9(qGP' );
define( 'AUTH_SALT', 'WD3En$>-#LI_u:8u};%_@|hZ)mI{miyq2]-L->dO6H=/oS;%!o!(p9Ty2){xpEg2' );
define( 'SECURE_AUTH_SALT', '_-8}Zquv {$ }bi]c`YD~GqXRWNTLM4W&K*u)@WZsm<3-tX#sy-;#*e)k1Dmbd*!' );
define( 'LOGGED_IN_SALT', 'E^?x1_&hzxM{~|FrcT530hUx@+G;N^E8X<Z(Z})PK@Lku/y-n?LZR~{9Iv*h1%:#' );
define( 'NONCE_SALT', 'EDU O7[S<X:ti TyGzP$EH]$Cu|naCF9rZvNiwHkY:3{u}Onf|J6O1+X7.GI[q4H' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

