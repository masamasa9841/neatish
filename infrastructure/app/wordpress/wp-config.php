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
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'db');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|*Nr(#n}i@2V+=[->kkaM-fsQ2xI.W>fucIP0%-k|WaaWVQY8]PSsoW=k3.%]S;U');
define('SECURE_AUTH_KEY',  ']MMg~h-%1DB,qJY90@VVg7VYJH=fY6y#R]F>29{26|/s5nVl_~i#AdP`T&0N=Mf,');
define('LOGGED_IN_KEY',    '_/p*-d(=-y^27 h7&y2,y2.~$#1nFtSY&2a MS|y-L,O>UQ{DiiR&ZZz0+%}mL<j');
define('NONCE_KEY',        '|Rz?!1-`$FA+g&1xdK`]-zu]#07KuQGufvT<{wzZ+a*QF2!|75Dxyx|FSJ$9S`ul');
define('AUTH_SALT',        'c~UdU?%e!l17{GE(!Rpz6:eWg9_2,M_-7hefF4~,XvK{Q|+Mx[Ye6d1Ez|>E4HZ8');
define('SECURE_AUTH_SALT', 'VZPLGW/ A*0CKLieQu!DARXHerIBBevY3V7%0>trJDYAmh.%:ts8Aj|@Z/,q-YEc');
define('LOGGED_IN_SALT',   '@j$D<k3TR)U*.$QsBY],04c2-LiM~SC<_5]<7`ui/7B?MF?D#[f[2 +g7>%`.c w');
define('NONCE_SALT',       'ur^m>qK@$|aF*)+]KM*F?253+z2;,=HFP4+T{CFeoMP}_4s{^J|{X&-[~4Sz?i++');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
