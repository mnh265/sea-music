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
define('DB_NAME', 'heroku_3ce1501e01df110');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bd8876724e2c33');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '112e2fc4');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-02.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mNM$|M_?|]25,v!&.gW=I>/-.<iu^ihgbR]Hk/`MgG$>c_WiY=(@P({[Y3MS^Vkx');
define('SECURE_AUTH_KEY',  '`_xekb(|-[QHSi}5LVY_a*0m4rL-?uNn<-YzZ dW,z0Ha|.,!+s [rIE3ebym6N=');
define('LOGGED_IN_KEY',    '*C&9~lU70:0+FalTa-C504 a>H-yx^^X+G-k>O+b+?Y;yikg+c]<;&Av/zj6K={ ');
define('NONCE_KEY',        '098!V{rpzE5B88`ilZ&&-1iSJgP<u?V]:3FW--K(83xr.6 4cv|A2#.}hQS,H9i|');
define('AUTH_SALT',        '5v3#}o^]8p5dY-QO8 7UV :@@1HEo36d8&t7VnOo}Wl&C] Cmx|*dYvBLZ*e%SA5');
define('SECURE_AUTH_SALT', 'k`>)#F|( ?99t$e/mq]W(MS4}sN=d%j#KSN_ZtY<]slV+7kiLXlKA<%+`,5^Q~Vr');
define('LOGGED_IN_SALT',   'hw^2-M0V^Y`|<ofu*D^nv;6SX+q>0-OtLxGP@!tiB6{tOJ*lpp#0K^JnDNl}=|3T');
define('NONCE_SALT',       'G_F1hICyfec`2$6OZs5]1xrs5.f%, X186EmSAbFEL:Q5}gV_[^S(?!F8Y(q|._0');

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
