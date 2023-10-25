<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\chic-dressing0\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chic-dressing0' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|g1`8$#1$B}EV-^8@p4aJhsxd8`FEk0jVclZq/b{kb#8&wL<k{6Hn..7ps~OH7|q' );
define( 'SECURE_AUTH_KEY',  '73Ou|`IaaaTs3YB|s49km;O=6)BvDY|9BC$)gbZ^w;Dt>(2(=Ep_3nRce7QN+V5<' );
define( 'LOGGED_IN_KEY',    'rJY^@Yb9SM{{XqDF6dvsv5]||Y ze!HIJ=1d!z?~*0MwH)2sdBZf,Z3!UbG^^YCM' );
define( 'NONCE_KEY',        'ISfbIPla2!56&_PcjshVE[#5r-.+Pu2we=-uWatgpb*sl]c&#;A5Z5P~LRNtGl(y' );
define( 'AUTH_SALT',        'k/fM4B<{fQZU%0QlOLypFx0ch`>}Or#7HFhj0-SgG?rZ:A+_]J|e<6yUL}U31Ao ' );
define( 'SECURE_AUTH_SALT', '@$aXqv(!,483T{e:/]L{g{%(Z&|qlz5#*<6Sj5~q-dwt`<%+h&aX)+|t.s-)7~q;' );
define( 'LOGGED_IN_SALT',   'atvjN88HY&*T|v</ i{~^wISk[,i$~#8]`|rwSj[1Jy@dEg4c:<^/lpX2&[(!Zel' );
define( 'NONCE_SALT',       'M$#Ik@Ka,CgU/9p[Iiv|EAJ<kJf/l| u;&@3dJ(*(G!A{8A-ptkK}fEh@].6,.US' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
