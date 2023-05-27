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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'photographe' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?T05uYPuF4S^x%dn-3[[{H}Nk6 wp|jYG<<{2Y;Y:ga8JLzO4yMy:+0)o.Pzck2H' );
define( 'SECURE_AUTH_KEY',  'C|8p.4Xc(Gks6=KaGkxnnYM*`CT*<:R%+^mjwFhAi(tkLCSHXKZdqg#.MOs07Z]a' );
define( 'LOGGED_IN_KEY',    'o<3?VL,MUlPNsVBW5/wgsb]2A35<_Q<dwzQ2pf!&~0]PTfAJ4oM>hUn<1u/*M3+c' );
define( 'NONCE_KEY',        '{k(+aZ=8$TqM<8rKo0pTT^gUo) 5k,#,r7Y^@7i~^JpFbzf`{Kz)}(OSf],Zo0I[' );
define( 'AUTH_SALT',        ':5PBZbXW^M.~U,gDG5#T*qXuoK3lKo >uyxC/|`KpBi8MAd%-Y.#LY|?lW#%s(`7' );
define( 'SECURE_AUTH_SALT', 'l8`>dwR-EBnI`ol>emTRBfwx.gp&2&-3Bs8=8pSV]Lh|<D?P,bw;><Jl[&ro=(9x' );
define( 'LOGGED_IN_SALT',   '-op X}|L^-60?Sbg[J`J|EYq`~A?*/UjzG4s[AC9wk:Xh[QIw5zz:$YgiVu`uGlZ' );
define( 'NONCE_SALT',       'W5DkLL-XTD[(qqkQURpztH7M9U?>V|Mq@[VjO-+f65*Hx(Iu+6O|jYUB8@^HC~*L' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
