<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Oturum açılamadı',
        'success' => 'Giriş Yapıldı',
        'password-reset' => 'Parola Sıfırlama',
        'reset-password' => 'Paraloyaı Sıfırla',
        'checkpoint' => 'İki faktörlü kimlik doğrulaması',
        'recovery-token' => 'Kullanılan iki faktörlü kurtarma tokeni',
        'token' => 'İki faktörlü meydan okuma çözüldü',
        'ip-blocked' => 'Listelenmemiş IP adresinden engellenen istek için :identifier',
        'sftp' => [
            'fail' => 'SFTP oturum açılamadı',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-posta değiştirildi Eski: :old  Yeni: :new',
            'password-changed' => 'Şifre değiştirildi',
        ],
        'api-key' => [
            'create' => 'Yeni API anahtarı :identifier oluşturuldu.',
            'delete' => 'Silinen API Anahtarı :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH Anahtarı :fingerprint Hesaba Eklendi',
            'delete' => ':fingerprint Hesaptan SSH Anahtarı Silindi',
        ],
        'two-factor' => [
            'create' => 'Etkin iki faktörlü kimlik doğrulaması',
            'delete' => 'Devre dışı bırakılmış iki faktörlü kimlik doğrulama',
        ],
    ],
    'server' => [
        'reinstall' => 'Yeniden yüklenen sunucu',
        'console' => [
            'command' => 'Sunucuda ":command" çalıştırıldı',
        ],
        'power' => [
            'start' => 'Sunucuyu başlattı',
            'stop' => 'Sunucu Kapatıldı',
            'restart' => 'Sunucu Resetlendi',
            'kill' => 'Sunucu Fişi Çekildi',
        ],
        'backup' => [
            'download' => 'İndirilen :name yedekleme',
            'delete' => 'Silinen :name yedekleme',
            'restore' => ':name Yedeği Geri Yüklendi (Silinen Klasör: :truncate)',
            'restore-complete' => 'Tamamlanan Geri Yükleme :name Yedeği',
            'restore-failed' => 'Başarısız Olan Geri Yükleme :name Yedeği',
            'start' => 'Yeni Bir :name adında Yedekleme Başlatıldı',
            'complete' => ':name yedeklemesi tamamlandı olarak işaretlendi',
            'fail' => ':name yedeklenmesi hatalı olarak işaretlendi',
            'lock' => ':name Yedeği Kilitlendi',
            'unlock' => ':name Yedeği Kilidi Açıldı.',
        ],
        'database' => [
            'create' => 'Oluşturulan Veritabanı :name',
            'rotate-password' => 'Veritabanı :name için bir şifre döndürüldü',
            'delete' => 'Silinen Veritabanı :name',
        ],
        'file' => [
            'compress_one' => 'Sıkıştırılmış :directory:file',
            'compress_other' => ':directory deki sıkıştırılmış :count dosyaları',
            'read' => ':file içeriğini görüntüledi',
            'copy' => ':file kopyası oluşturuldu',
            'create-directory' => ':directory:name Klasörü Oluşturuldu',
            'decompress' => ':directory içindeki :files sıkıştırılıyor',
            'delete_one' => ':directory:files.0 Silindi',
            'delete_other' => ':directory içindeki :count dosyaları silindi.',
            'download' => ':file indirildi.',
            'pull' => 'Uzak bir dosyayı şu adresten indirdi: :url den :directory',
            'rename_one' => 'İsim Değiştirme :directory:files.0.from den :directory:files.0.to',
            'rename_other' => ':count Dosyaları :directory olarak yeniden adlandırıldı',
            'write' => ':file Yeni içerik yazıldı',
            'upload' => 'Dosya yüklemeye başladı',
            'uploaded' => ':directory:file Yüklendi',
        ],
        'sftp' => [
            'denied' => 'İzinler nedeniyle SFTP erişimi engellendi',
            'create_one' => ':files.0 oluşturuldu',
            'create_other' => ':count yeni dosyalar oluşturuldu',
            'write_one' => ':files.0 içeriği değişti',
            'write_other' => ':count dosyalarının içeriği değiştirildi',
            'delete_one' => ':files.0 silindi',
            'delete_other' => ':count dosyaları silindi',
            'create-directory_one' => ':files.0 dizini oluşturuldu',
            'create-directory_other' => ':count dizinleri oluşturuldu',
            'rename_one' => ':files.0.from den :files.0.to olarak adlandırıldı',
            'rename_other' => 'Yeniden adlandırılmış veya taşınan :count dosyaları',
        ],
        'allocation' => [
            'create' => 'Sunucuya :allocation eklendi',
            'notes' => '":old" den ":new" ye :allocation için notlar güncellendi',
            'primary' => ':allocation birinci sunucu olarak ayarlandı',
            'delete' => ':allocation silindi',
        ],
        'schedule' => [
            'create' => ':name zamanlaması oluşturuldu',
            'update' => ':name zamanlaması güncellendi',
            'execute' => ':name zamanlaması manuel olarak devam ettirildi',
            'delete' => ':name zamanlaması silindi',
        ],
        'task' => [
            'create' => ':name zamanlaması için yeni bir ":action" görevi oluşturuldu',
            'update' => ':name zamanlaması için ":action" görevi güncelleştirildi',
            'delete' => ':name zamanlaması İçin bir görev silindi',
        ],
        'settings' => [
            'rename' => 'Sunucuyu :old den :new ye yeniden adlandırdı',
        ],
        'startup' => [
            'edit' => ':variable değişkenini ":old" dan ":new" olarak değiştirdi"',
            'image' => 'Sunucu için Docker Görüntüsünü :old den :new ye güncelleştirdi',
        ],
        'subuser' => [
            'create' => 'Bir AltKullanıcı olarak :email eklendi',
            'update' => ':email için alt kullanıcı izinleri güncellendi',
            'delete' => 'Alt kullanıcı olarak :email kaldırıldı',
        ],
    ],
];
