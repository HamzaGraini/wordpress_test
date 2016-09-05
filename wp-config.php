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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'uVW2)9>ThNaP^jt.<#fXT8wp^zo;MN{fd^<dKUjFW_zOwz}d?W7VJ:s1|.i/0RG/');
define('SECURE_AUTH_KEY',  '*[LpTZ4jf9L#JbW}ws)S%v,6oe,_(HnD#{=4jI>;R+>gBTb_H`4rD)kt;O(z+!h:');
define('LOGGED_IN_KEY',    'GVJ?LgI^xXEv*X@{rd7>{3uXAbp&>9JGnD~Iw^#q;T!y]d]bMJzJxk/eZ+e7[Hn[');
define('NONCE_KEY',        'Sq0gX=9V1+N(4du;U*H1DXc#hU0=iyW9]Ll?ZF75+|0k)l{D>e?deL>A9b)~~(9;');
define('AUTH_SALT',        'wFX^oGMaH^t7A;+?`,SsoOoGl7WTtoYi}L@$s$UxM~Fsa(mK(?6M<QWNw&|m$jW{');
define('SECURE_AUTH_SALT', 'P[j~_BnU>.ut4!#(]_bJAV6u.,(@T04_[,+(Tz3ep@83Ibj10n A#WMnD$PGBd,:');
define('LOGGED_IN_SALT',   'SyDDXZ0De Ac32&SeK&#WdcQWU=e1_gDqn8J9fl0&MI>i0n7T}n(XP%FHV3)0&G>');
define('NONCE_SALT',       'BR_rfiREkv*Tii{?./cadH!yFfn}4em=gRF#~4uk5}5$]2tF7F:<uI!uEj?%-oEI');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_wordpress';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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