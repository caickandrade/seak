<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'seak');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^H1V FW`_M`+05TjEP*l=j%|.de3C<~*E1ipZk&?;yoOL^xWiS34Jy5!W4C&=7N/');
define('SECURE_AUTH_KEY',  '1C.R9s,8$xn;%Lzy+c}5[TLM3Mo%ei)C0uDEf}`Fr-UK3G N}M*{v(5*BeO^$_1|');
define('LOGGED_IN_KEY',    '1:FKQ*B7{!Kw>fz#/<D(9:_GZ>~D/!Pwi}>&eS-bU#eutXOm<h-89E$,Ifp5?8b/');
define('NONCE_KEY',        '/CA2rqZQ!@%a5`jtmsvvx@_3YkNBTR-7t+A{+D1&S<yD.o-&lJWvZjd9|ASWl+ct');
define('AUTH_SALT',        ':M!v+uC(/{hU~$&#!owN+&]Xw>@[,tc.IKP&2e%dqpm-qD9gh,{$Pt0bZ7EEYvX2');
define('SECURE_AUTH_SALT', ',Gh#pO|Ka6HIH|&c96lYCi*iG0CPa5)d@ But.aS]1_@?mV`zH5)FqDS=<`5deUb');
define('LOGGED_IN_SALT',   'q(ov}>?`mum;vzs/K7KoZ,<*t$v/vi5^-_9tCewP6R=Asl[ u>QX@&o1:]s*nRA^');
define('NONCE_SALT',       '9Te_ G5nK]-g@]?kpq @[?1punGk9 ~*;Egx&g(GD5`z+7<:!<!JBGm9hT!{sZz$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
