<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'melbrins');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'melbrins');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ender711');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql5-18');

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
define('AUTH_KEY',         '@)1(_EgBf5+]8u5wCz]IUMFa;.Mv$b Gr:-rYYoFqdQ+4akM5I,RL6=cpHBW.ZU{'); 
define('SECURE_AUTH_KEY',  'IC 8~#p2u1q+<EzyH0PL*ln@&&_)Y!M$vbIv+#({@.q^TqOW; uLKikq3W!Qxm f'); 
define('LOGGED_IN_KEY',    'LT7M0v/;^BbAZtbfb=0Mn.zOzk#|iM|Yl*G>aQ}s&bWxIB>2/{/j[}6#p=-gsoGW'); 
define('NONCE_KEY',        '*<<_)6>yBqn$]6IP@S@(ue;![(C;;_Lg>o2|H-&^>H_EU+h_WOP12+w/3Xl+~7Pr'); 
define('AUTH_SALT',        'jrmUbt5$5dh*^9bgbxex}k2z94a3q1E+xbvLf(|G|]#o d`Jgzbp-qZy/QxlF/Hl'); 
define('SECURE_AUTH_SALT', 'k,K/o|.W}2|#*4<Cx^*L;`g4,+VT{`I+L3f1aH2szB+8rUB-(>=Tc!kpqNCY#+~S'); 
define('LOGGED_IN_SALT',   '-k)x+aksk.cN)=&dxZ2]+C*eHSLfxgM5,oGGz`+u<aAT|4RiTAzV(-zpW!qPzei8'); 
define('NONCE_SALT',       'bmy~^FPYg_nq{[4T-<&1{:ZJg1&<;j+>+s;@J:.UCN5L!+ooq$Q3l+8cV0R$5uV3'); 
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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