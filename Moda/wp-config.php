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
define( 'DB_NAME', 'moda' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'moda' );

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
define( 'AUTH_KEY',         'TMnQK*1XMU!)CX8[A4SR%Qj`8^Z,,THM}]Xh)rkGeHa9_cZX#(@wSuu?b$NPL+?z' );
define( 'SECURE_AUTH_KEY',  'EkgKeQky-rhiyU~bln!@u%,a!drx_^w`GQ<H#+TF*XY1:C8IkWVAz8A@L_eDlW}4' );
define( 'LOGGED_IN_KEY',    'M;Oxlbw>dovDfTqp!h>Ce |o%53YA*G0SH:pTrtW)2$X@/0%{)/WdNpH:Y%QtYz!' );
define( 'NONCE_KEY',        '_HK`zwadt_<o[0bqw L,w5JH)0%7VXhDbZkZyz*=5ao^%.?M3%_}UE%q01)G9Otw' );
define( 'AUTH_SALT',        'L?,F~[b(Q:YAIS6!UR60So0R5C?a#FyU?u76Cn*JqbaXGb:ortUyCdB|{gpF8b&}' );
define( 'SECURE_AUTH_SALT', '#3mS5K$,,?^`t~ey#C:kg@jmLvf5;>(lAve&rj,AK^suG9c(76%moS!Prm#*Gz3?' );
define( 'LOGGED_IN_SALT',   'yxZoLe2>uVuO_{Wl6%N}Aj:$gu>CN5(R:)RWlVWWLd1R>Iuev-$OOG!K[;@-I/S>' );
define( 'NONCE_SALT',       'o?_+It+AH>0mKj-<Bze5[Ul<2FL#1Y(<Haqr0ta27Bh/W_]C,Dy/),S8(+ry~`V3' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
