<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'riding_info_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Fenjapa510' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kXsB)P?>_20&$<MtpSB1-2EIYOjV8~5 tdu!Oy0kV{j+) &88BeS&Uo0N+p.{Ns6' );
define( 'SECURE_AUTH_KEY',  ']#nm+^Jl2cr]]*H<:80@&V>ik2JOAxNARuuZ1(6E.}M@_o4E(N:S ) boe;hE/I]' );
define( 'LOGGED_IN_KEY',    'VpU@8B^UIG5^mJ8;#7(qao,]xVI1hkLJZ=KhG|*@#( UyO:G6!BN&kZ6`T}%xT4E' );
define( 'NONCE_KEY',        'k|Uj:FXg1d?:(4rYNK=5eSMP~`Nw)T0r&?4Q{)##&fjzT{f=~v`Q1<vhSvYL|&=M' );
define( 'AUTH_SALT',        '/!YIRn=]x$bW9TrBV#,%$_SVN/!C7Xrb968JD@<U{`WRdcjcg{j~7V@if=g.?>N0' );
define( 'SECURE_AUTH_SALT', '{o%cnSwTCB?O/}](zb6,W{T}x{tu:Qh<3wp1B1dcN3#i|.H1e+3o:J9Eub4zwF|S' );
define( 'LOGGED_IN_SALT',   '96<i25Q/Uyc52@$ED#5sLA5M<B9=RBd+N%p=D9nr/N*I*g:-i~E+oPAZ |o${6Vd' );
define( 'NONCE_SALT',       '3_5pe8`U@tL&;F ?23(6j@#Xl0tRU RKaVuae$U> waPuQh{2g!&,`J#UeMsHclL' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
