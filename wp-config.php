<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'pknico');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X[v3?sH,CJVGdZ:[RRLE}U}i}cjGznT?>D^=0IWPQ)=0QG0CMVRFvuf@Q[Pw+-R`');
define('SECURE_AUTH_KEY',  'C4OkZNj@krK]LM><*8a_t+;mD~{PN>@N*tuS|uKH[C+nyZY@$Bf6;m:H$S[nq}-9');
define('LOGGED_IN_KEY',    'h}vl8{s95~a WzFVGU/spI(rMn!#+SIRMh(Eq3_j[pXuS#UT!VP6(/e&|F?]v]ZW');
define('NONCE_KEY',        'j.#i<Va>/ub<e^-S(l`CB$~h<ul]A/O7]-8b0$xa?=|:/cxxK]7~h5{m=l<e~|WF');
define('AUTH_SALT',        '5c/f$x?aE%8CK.}8p9.:tJEeVK4j|2?Y7xI~2B>UBDzD<.]b$+<p1Op8FYnfolrj');
define('SECURE_AUTH_SALT', 'Au7/hDZnj?c`Z^shFGkW4snj+)+=Uz[1O7@/l+5-ORkB9E?k8l|&r=pl%5G|ge/p');
define('LOGGED_IN_SALT',   '0X{4P!y0~{|~Ko^DDSIk/q/Y|WaCh{w~_yp*JNFv;j()tQ}0z-+^,e`L5|J6T${Q');
define('NONCE_SALT',       'x0QRES;=t8r(@2TA}zZLZvm`0LH/&k-mOv5K-g:ymrX/r 3){>kC2XK}!lOX-;Ub');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');