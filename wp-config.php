<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'smdeisdb' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ju8YqNzIreWJ[>Wjzpc!f9V]_*6Cv!~A6C[W>txs/n2MKZWk[`uvNR{I.CE-~gF3' );
define( 'SECURE_AUTH_KEY',  'L-e_K#<g3@W!p)])$Evbpf[$5P.+HyKEG+y)>&|5&UDF57&IP)#Ab3c21wJ<-[5]' );
define( 'LOGGED_IN_KEY',    'J/~z5M7=fVA#Y1O4*{F4oz/g3~L6|>?#pL66wWwWOq5Y&mCjS2Izxd$ZCY;#O{Hr' );
define( 'NONCE_KEY',        'Yur^)z%j`o0{Tljxn ?W*|JBWV?3}n6zrE|Toj5J:,D 5yf>zd-lO=JKW/U%hU~d' );
define( 'AUTH_SALT',        'zF,de!u707P8%Hxxym) Jo1+~0*lBYWlaE/_[|1eL6Kd[Sh!H>V~G~td[4hj$5}&' );
define( 'SECURE_AUTH_SALT', 'MQuel/KBqz-5H/TWt[emwiP{npg@Y4A&Wym1:l[H/gS{>6i>f F$(d+L!K! f*{4' );
define( 'LOGGED_IN_SALT',   ':[~?2[d3f!~tVZ6XZp&N9-4H;H03&>crPYqyT >QVRP%S<jFpw`%DJ`j43dCo~B@' );
define( 'NONCE_SALT',       'v!u}xp/(xzcjOOZ7|eZF/jgFd3h$aYUq);P,pdA}l]KoPUDc-wB-d/ vtuwn@M+f' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
