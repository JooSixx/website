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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '{0-Uu!uL!a`Ms:*8G;%7+Fv4~X7B:R[T_&5.~@9>|I2n-1Jys{QXhIO8O/aVzdoO' );
define( 'SECURE_AUTH_KEY',  '718BZ/;d@_ WI)vD[{6.|~v%_fz(EV)?T?k](F~{52Z?x7P)yPXqSJP<Mv=/a~:2' );
define( 'LOGGED_IN_KEY',    '*&P|a$,]l`d&LTGnimdhRa}rO wI}l5d%A=6!`|V>Gz#dtn~pV2}kKt[/87IEB-h' );
define( 'NONCE_KEY',        '~JfA^,Rcgl!D#A+VU^05?xWFI%cyCxnP:Kv/+jVmOs zxTx))XeDWF^AufvQa<5{' );
define( 'AUTH_SALT',        'ezWWl:6xBp*[]M6;o#@O0}vePED`M&xVgeeqkq)=3t1[G+91CFXp1v,M(a|D2,ZF' );
define( 'SECURE_AUTH_SALT', 'v5Sv[x1E%34fV_sY=[ntlpR+&=m3HmL*$z;D*h|YH_0-drA 7|^fi9X0$_BSqG1e' );
define( 'LOGGED_IN_SALT',   'b)KCm?%D>yl/Ex3s1pt<^}kG*p5QODf{U#cC0%H{N)h{]x@]~=?Z(5STNae&}8@*' );
define( 'NONCE_SALT',       ')>9.>NWQ3^%k4|BUdN8c(o0r2VylPn5[0*a]@>o>Eo2DwRziP|qW4IGN2J64uC k' );
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
