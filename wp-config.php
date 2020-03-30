<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'globe-arts');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R;n_Z9W_ww*szg3O&LK=@&tt(Ppnfk}6ENH$xmVtkiAUVx oE2m)+LN-#~cu?qru');
define('SECURE_AUTH_KEY',  '_?C1-UQ94:HW7P2wI_cMe)fZGvKhUBy9B1gi|3sT$0`oOT^uY;5]/G=EYZot:ZLe');
define('LOGGED_IN_KEY',    ':4dKkHeM#TqGxDrb%0bAM8huMdk@6J@+qI9b<DEPCW8<;r9bB?RDs=zMU>*M!bEx');
define('NONCE_KEY',        'W3$uf;xhM|2Y>VjM.FR*G7uWC[$3xeNN5yD3Z0#)Xay6B0Q$S~gm/Am-;l];@ENM');
define('AUTH_SALT',        'qs5K1 wOel}tzzOo0)/&FG4)7$8)P=@Zpu3Qp?l9jM?o%.]2GxV)eJ/S>C0c6,^I');
define('SECURE_AUTH_SALT', 'U6u]7N4!< @S1Jc.uq*1T]H&H2/INqPaoGr[n+,prE**SGmZ=&d7K1OAC)9@yYG>');
define('LOGGED_IN_SALT',   'BRyK]?n~YG$ZVnbX109vK,3g};^W:BR!t90{GeH6bm&W1O4T=L8Qko{1^`u^ePMS');
define('NONCE_SALT',       'GB5TCUb,:-e~r-fFt6D>7Lr?$@g>VVFA.+YH],w9X5%f^?^[B8&0tkW/D8s/63xa');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');