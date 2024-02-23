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
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/chic-dressing/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'chic-dressing' );

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
define( 'AUTH_KEY',         '&14d~z-]7,,Ab;zw|c}IJ(dI EFGV2%s/,DwX/.ZS&QX(6.Ai8s&xh-f45szn.`N' );
define( 'SECURE_AUTH_KEY',  'J{3v[xN(]ma`i+!A3t%kAyvXa.Dl00*i*^A7!C^0BiQzZo.I??)tu6xY4}-EHfP{' );
define( 'LOGGED_IN_KEY',    'H<YO#teEP}NVmQgKP7%e?Y##N0v<J7iz=!~I<g*mN=k$%1)$n`8xuRpJtAVt1Ay;' );
define( 'NONCE_KEY',        'Bjoht d`/w[.fX7=x,k)y}o|4YH=bOd@a;!@`Rx>>Pg01sAr bKL.>J/mm&?sP~M' );
define( 'AUTH_SALT',        '=<N+rbI$bRvC|Y@ZB>Gjq,qz{[SXLL/&gJ,/Y(CFsEcP;mq!]o~9clbF/qhT1#<z' );
define( 'SECURE_AUTH_SALT', 'I2eM,-1XGC.2&Rmp.b~`#r4GaWB-m@p6f.|DZdw4.xyVLg<?z@UEXQHl_J$BB~`4' );
define( 'LOGGED_IN_SALT',   '%b`~*,Rxm-*;a0m1yob&>NMH3`(RDgtIlb*mra`dIiyoe>|8n}Z^u64-.TqM]dXU' );
define( 'NONCE_SALT',       ';sM_^^JJfsgp F,%$:`ZVPJ$kXgvlxr5r1i[0MfDoj&p[U M10@q2D,ggos6^B:<' );
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
