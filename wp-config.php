<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'turbodb');

/** MySQL database username */
define('DB_USER', 'turbodb');

/** MySQL database password */
define('DB_PASSWORD', 'gtgt88865089');

/** MySQL hostname */
define('DB_HOST', 'mysql796.umbler.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
 
define('AUTH_KEY',         '`y.BoubX^g8wi^EE>+]<0~=k{9g*adj:}C=/}Ykg D.*y(zBWD!<m=b}1t[QRs>/');
define('SECURE_AUTH_KEY',  'fQ8C^u4c@Bd7`Hn_313Uv/5*Zk+G{O.JS?e|>TwiH.-h,-{+m@ES(lZBm$#O1aY;');
define('LOGGED_IN_KEY',    'u:NHu9t%WgiUc+gnppFf1 +aZdO~7lyylR)dlBgcI|~VtKqiG-awm}q3;) 6!7ex');
define('NONCE_KEY',        'mW2On<&Qd(l%_}`GL3<R^l21mh)tW.3kWf@+WX$(=pR-7]DRG2Jz4J8wP>N6?RR:');
define('AUTH_SALT',        '+p<Ug2A5b*SBIQgHjUFbXb0;O(qp#i.x)hFN+e]&CY2Jg#QgByKz-[gl;UonSc`a');
define('SECURE_AUTH_SALT', 'c$;&l&UFa}Xcn4Y#6HrNuY876DeX&d|]4,CG6+`[VR1cH$yrs8gjcI-M{SPJYRL@');
define('LOGGED_IN_SALT',   'XB+F._*6|,!bax:(~;4EZ>cj|ywM({W9uBd9d]d@-n|-<oWt5/MF6x++fp:@V,Wi');
define('NONCE_SALT',       'RK&n5l=bKS|Ly|O0+i9fo&&5D>}s+rS{U=qaJr=Ef-#yaO~cUZh$wA?}DM7r3koI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
