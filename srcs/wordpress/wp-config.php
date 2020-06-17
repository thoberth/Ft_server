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
define('DB_NAME', 'wp_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'HBpI$Z@(:w!#q`=|4q|1g^[Qc*|Q<MZVI+s8RFR|N>(Wn7nG<Z%aE5@::uVCotud');
define('SECURE_AUTH_KEY',  'z3x+a*tN2o?E<r4N,vztS#9|YOsugG`)`u$eC!2DK}#T+:hS4jSL~be455(>{1{D');
define('LOGGED_IN_KEY',    '@m8 `c}o$x^A4fLno8h[yb-|pA+}sp[suVg(Fqb@l*3bnX7D0DHys50YyqDrZ,oH');
define('NONCE_KEY',        '#Y+m~y(cj,GQj5qvnTB6+>[x8O8+$m#?@4%?i8SN}>;#NVAG`$/u?i}s[H|j@#y2');
define('AUTH_SALT',        '|V}wYF4z%/pxmIi(o`9C8y^x68c?.eI+_vG9)<%Ch+?!LJ=SZ;.KP(|ypi:BkF-|');
define('SECURE_AUTH_SALT', 'NNGv0^e4]HlMy<(HL^8iqx|h50i}5`9pjF#>]ukESw]BA2cQ-up=jTP=+Tbrc6[i');
define('LOGGED_IN_SALT',   'QEq|hy[rlL/EkuC0k)9d58,IUE920Mm{<vsoJX|])&S@2l5j:u3Tu4<m!Qpw,A&o');
define('NONCE_SALT',       'LN-9K/XB_H)YM:{3NwgU[$-%GBEk1i19Y{#35W%/!pMJ/2t{I].v|WvVWrs_g=s1');
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');