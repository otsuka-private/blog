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
define( 'DB_NAME', 'toudaisei_wp2' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'toudaisei_wp2' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'aerix9eyc3' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8009.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'jVh%&nD.n%kN<s<-1/%V?dL,#Z)=VZ- w$v_[UE:{m`6yX})+J+kqN{V$Wm:Ki/m' );
define( 'SECURE_AUTH_KEY',  'g} 20.(36#f/(EuC[r#(Zp4c|pDhIE7KA8Q^fOG^Xtfm|!$i Aw?|qjpRg2JQTfL' );
define( 'LOGGED_IN_KEY',    'qZxk^,y+M(d&ap5R]2#HI*(;^l$!>E3ah2S)T[e`$)On{pexZv$$Cv#w:yIMHEMD' );
define( 'NONCE_KEY',        'gw@|)bkwk+%r60!h#<*2(@6#r*ZIq;P%n(]K7pg| !lkv[%pCKw{Kviwzz{35YC8' );
define( 'AUTH_SALT',        '`05sTv(@> [-%71RK6i#Bkvf*hR)V2DCc~}5-c]7a7m<lh+D/_2xn[D2@}&ZP/kW' );
define( 'SECURE_AUTH_SALT', '?Qvsc!6]Yjuz&znH<v!Iy07!ypyHz]b5`[AO#Ug`+mw=0_uOaP_! wDl(oK,B2Sy' );
define( 'LOGGED_IN_SALT',   '~TH3U<!B9h)-%ik=H+Xb:iS3c,{R(v mi=C=Tgj;diU.W%=#bS|zU$@XI.iOi&1j' );
define( 'NONCE_SALT',       'sp3Im(<%e@;B.nO$AyON8UY&Oyp{~Ii+W8>]3u*|,:1++:?WCX1BZx:Hjts?+:>=' );
define( 'WP_CACHE_KEY_SALT', '/sE#Y4tH+s=7M<.<kg#QT=mVs3cQY-GzqVqq)D 42Jnv/+!gkAnQGy~PH*Z1}1,S' );
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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
