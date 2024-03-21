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
define( 'DB_NAME', 'nathalie-mota' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'YCMugnp{cJMK>A9sV P~|KDvg{bXJ=f[1e~omevRS#S|ZTMAM`sM^Xmt<o&}Z<+<' );
define( 'SECURE_AUTH_KEY',  './+P`_$:H~{}9`6*Bp,;N1Buq:,E?Fa Ceua2!RT`aFJcy6q}xj,(M3t}yEC#>Py' );
define( 'LOGGED_IN_KEY',    'k+>w!Yz~dqJ~s}b^lGUeu~,28v#<IzRB[iNHL`nKk$IMbz;/LXTi|mTI6[xZe+69' );
define( 'NONCE_KEY',        '@#+ebuyiHb[7pi{+P`k+%!6]QoiQuG2C-~(nm. bB}U>Y1Fm(x uWFC_6@R-k4AE' );
define( 'AUTH_SALT',        't?}Y!|~P.IvDP5wB|JtsPjO)S6dN}QKc2k:vZ5rEoV!-f* JE)uh[4MIHKzR,@ )' );
define( 'SECURE_AUTH_SALT', 'nYFvRH7]6qI=DsXi0|3{VdnT}Y,#->xIt{lK$FnB$7o:FR4ONB}cr?ktJ/W=Q3WA' );
define( 'LOGGED_IN_SALT',   'w>S7R#8}7p8QP$o~H/nOA|g66TL{u!A$l*|nTI2TXAw*M-^2AfJN1*#wlKFNM6[/' );
define( 'NONCE_SALT',       '#8c*?]<Q:7s=Yjg?:?vz$cSV3lQ2^|RNJXXJ{cf1#}UEXCCxs)M/nc|!osoRYr48' );
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
