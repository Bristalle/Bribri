<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bribri_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'woody' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '123' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'X7poU2@lE(@v]K#%Ln9tZTC>7{]wY =c/M}ltb^ibOo[N$>f8k-ju?^lPWT>bxd|' );
define( 'SECURE_AUTH_KEY',  '$Gu6*|bF+M?,*A;F)V6= -PtGk=hBkNApq,ZSc#8W,YK^]~Oz62 6]uJa6ZyA@Xy' );
define( 'LOGGED_IN_KEY',    'BhX&02#%o9_.t?kWOi=+pyK9Fcy?*wV#o<,b6/!v9bK5wIyYv}ebdaU$:x2?Jk 9' );
define( 'NONCE_KEY',        'YQZjM)b.k$F#.TV7GCQFfwS,1ZHrAd zh <OuDsg$A):Qc;@XnSvD9}dWxs`/y:b' );
define( 'AUTH_SALT',        '<r/w0ZuM8$5Yz@NTHTtxcwM]oaK{QYION_)sxW?0tRanPoJ ?7^H9j/}Rj: E]mZ' );
define( 'SECURE_AUTH_SALT', 'CR~@Fk$)O=a8/3-[kKw0;C7a1jDsBL#0xNhA<w5AL6}*mIT25IGHB9)ikj][O9?]' );
define( 'LOGGED_IN_SALT',   '&|gCCx5dgOerk^J<dY#=!(mT&[UYibN|a+jFx30vs:bwoGW]N%Rdbokj<C-h4Wpb' );
define( 'NONCE_SALT',       '%TT/*yq3mwTgeeAl_Qw7V9IC4TF=&dHtD%Qy:!IOXnKm.PrZsv[e*z#S.qhht&>|' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
