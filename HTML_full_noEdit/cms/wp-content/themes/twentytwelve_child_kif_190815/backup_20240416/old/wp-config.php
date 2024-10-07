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
define( 'DB_NAME', 'kzaidan_cms' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'kzaidan' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'zaidan2021' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql57.kzaidan.sakura.ne.jp' );

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
define( 'AUTH_KEY',         'Qe<P{/&(A)sQO|m--ND@uo;GRjGY%zNmYB5%FaQ5x1K0X&VH>|rG(Zhu 6$DWoWQ' );
define( 'SECURE_AUTH_KEY',  'PZ0?@JD #6]!vL&#/{KEf[vC2Y31Xat25[@2}So`JH+o={8hukpg4Sy,SwF5)m*p' );
define( 'LOGGED_IN_KEY',    'w}mF9?~@=D5|Jh,CuWYH#[M![URA`bIgC<fCWo=7K5f)d:hjt2?r@}I}fcR]<L2V' );
define( 'NONCE_KEY',        'Ed?vHJonrh-5[c&bF&P;K{xck7N^6BwC.H ?(94Xh2)GQXFp~02`:5ska=xM_#=o' );
define( 'AUTH_SALT',        'gjYyH.i_>{3/O%p8U`Pk=TSv/|p<}e:9OIL0,H/P?>K(D)W{HF.YBM){ak]_[x46' );
define( 'SECURE_AUTH_SALT', '((z{(__r5;9~;c[+IJrt[`N/{jq#I|{)},bmn/uR_T~0Qc rNc+!tT^$<N]4~!ck' );
define( 'LOGGED_IN_SALT',   ';sVN(wIZro9Pf&8CG6|rW6;[P!c?hxsB{Aj(i3aH{}9RfYQp6&O.B]<}Q:%2uIsd' );
define( 'NONCE_SALT',       '|>2>XVL!M<)QB[|]uDI+({4D%0N4Ws3`}FptEmOk38&ijEaE!+NBgDW4HW|b7[zs' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'cms_';

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
