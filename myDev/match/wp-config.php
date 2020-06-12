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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'match_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Fenjapa510' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U_w;it{VI4HABC#lSa#bK#[`L|{g-sKxl9%ZO).ZkZp~+6:zf*VmkheULKYv+ $=' );
define( 'SECURE_AUTH_KEY',  '7/# lx*bR>w,0uO::?]uhZ.$ih%wNUu=Wn(6sk&-BceUU<`{rtMpqJ.H`qzR f;o' );
define( 'LOGGED_IN_KEY',    'At vS|?8i)x-j&daP;ulxK$F2y!-22l5}Z(|]68![c2qwt=2>SzjfnhbjRW=X7UO' );
define( 'NONCE_KEY',        'fn-Bv@FM#}FH5,ZDuax4FGRExwEsL#(=.G{(56~0|-dvx`TMm8Y5:XBU)&v_yILO' );
define( 'AUTH_SALT',        'YUZxJNs8/Rpp#tbLL&)p-li(>dE1IhH-yzdaR(.J%:NSjglC^P3_BzdQIajD |w)' );
define( 'SECURE_AUTH_SALT', 'hoR-rRSfn{P~}tO*59(0q)/0Ls74]H!xOaSsd;#;,Vx)~O%G-:pe_e-[]+H|c=BS' );
define( 'LOGGED_IN_SALT',   'Y:Sb2>]|[AEzFC{4ZvKLFfCPZ~Ul]A#9RIL_}q~L6_>K@ig2O!}2:qMIJiR@p=!~' );
define( 'NONCE_SALT',       'C|_(F:4s~F_Fx-]YwveJcekI6SaX)M~<5;@<Nv[F<oQV_odaHCK{vD(P`|g~MDqt' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'match_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
