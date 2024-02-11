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
define( 'DB_NAME', 'chic-dressing' );

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
define( 'AUTH_KEY',         ']*C*q3;.+xIk_S{OfnE trt=h2$6/UQ78(UE&JTI$:KNZ<=u^c_`7tH__zyRy=Jb' );
define( 'SECURE_AUTH_KEY',  'hXqQJ3_%f:7b=<ziPEqmso,A@XMd|;Ky5 ;fZ<E(1HY@tB6Ag2H<wu84tnl2UhfY' );
define( 'LOGGED_IN_KEY',    '`Q|Y`pG;VrmrSs,+$)]Tg)K/+UIrtlgqNx~:>~TH,K9xT#L57-r9bP{)cuwLi;3!' );
define( 'NONCE_KEY',        'b?8|t:As2y#-;UBoC}#E)X0vMu):2S*!CE[#_6JfssG:Xdt+/dXfnbz3|Y`cDRS ' );
define( 'AUTH_SALT',        '40b+#4XAy.J{xbd1:IuT/VMWqw%Gbja8_/shvUNL^S,GF<{VPO:Ur,p.+FO6:1`:' );
define( 'SECURE_AUTH_SALT', '!=}#l/US,AISG?PU3eOq_/POt38p}+msew4bn/Z6~uei332{i1s#mQyHX5v3x&+$' );
define( 'LOGGED_IN_SALT',   'h>78// |M:@]Xo}Z2&jb~)$VKIG Bo%sgo;@EP;EOZ&Vz07*:ZY=w@$>7&&mU}#@' );
define( 'NONCE_SALT',       'f1o~XL9{meq05yU.,rCO=vwsJ[E.g6n)Sl(FS0m6>thpS4tF1J.{HZo-8o8,?3Jt' );
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
