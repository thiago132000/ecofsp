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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ecofsp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '43397754' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');



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
define( 'AUTH_KEY',         '@$Nv:OjE>)R~A=NdO0WnhZMN> BAraQjZ/Hm~Ldzl>YLrR[^D~ M8z<_=gd;d0A0' );
define( 'SECURE_AUTH_KEY',  '26:y3`8tCkd.t?,7hH5.ZE1tsF;j?4IlgLUL,,U3g.ycTQ0y0cI!]JGlCMfhALLR' );
define( 'LOGGED_IN_KEY',    'hOibV:4n)F] r#WP2}k_iv`/i4Hi0.9*rzD2;$qlL}N1wKG.f9m;M4G,xSPF6m$E' );
define( 'NONCE_KEY',        '}vuV=6NlWJ XC`D}H3mlusJuU(gDnR;:yvuA|WG[_C<^x}P,1~>{R:no99{u;[nI' );
define( 'AUTH_SALT',        '$x:9|KJB<wX@GpZG>b=%$$iD[)ujSDX9O,8/TB|EMM0$QB me4`RD^&?u-3MSb=#' );
define( 'SECURE_AUTH_SALT', 'kNJA^c=cSJi446k-ALqhm`M|iyO,/6VDSCM,fgPQFN)p4WO8JQT+vLkKJrPmPGtg' );
define( 'LOGGED_IN_SALT',   'IxxcD>oyG<aWrYdKI]=@{,f{`HhCXdgVu|jI9~dfKG g?Y5Iu8I?u7cdMGzU>O=.' );
define( 'NONCE_SALT',       '!A.*:lim#Cykd3=khH]Q@&v;c~l:.9^ETVO5q|;%MJ%GavEYoBkm`qv8=4X{a!x7' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
