<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'tahsinkose.github.io' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YBO0h}[TY.T?EM=6qqcy<@<wi,vs+|u[4kab(SU($}=ep>U!$ @ieo$JwH)8yO_1' );
define( 'SECURE_AUTH_KEY',  'D``h(`y?V8%-1Hu2<Mkttl}lvj(~$zmDf05@c9p14G4d0QQ7Cm3h*),Y|<5(b`;2' );
define( 'LOGGED_IN_KEY',    'fm+[n>H1e)d[ph vSRcN?.*|J7,^7K#4WUfIEt;hkREP]r)1f1mLF*]Bt0Vf%q)Q' );
define( 'NONCE_KEY',        'W89^ZIl.`w|6gU<UrpoP_+trbKpd`h-@{h(-Dd:yk!!J<q~<,8OW $P&c8|#QOl]' );
define( 'AUTH_SALT',        '[jn}TZ>h^gQ4=VA}k:0`s5Bjn$Q5E[0cLdXSZi3|5BexU[AA$Xl0`<,I/1+h]Gbm' );
define( 'SECURE_AUTH_SALT', 'qJp6l^q)c]YD!!VE[bUVZQz#fHK,&H9NBZhX4)OO3jAveCkT>!C g!vWuJm;&t6Y' );
define( 'LOGGED_IN_SALT',   '^_pCsvNev9#pF|qbf(p23F*VIK}xo+nSM>[,IK&9UL!TO[4J4~+ta>OW0eL[z@Gv' );
define( 'NONCE_SALT',       '{2NPLG1g+#?!,D8T.voiM<hl/VZ:?G^6dND_t4JY192M/suB<VU_i1]m>yK6qRd-' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
