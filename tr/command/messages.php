<?php

return [
    'location' => [
        'no_location_found' => 'Sağlanan kısa kodla eşleşen bir kayıt bulunamadı.',
        'ask_short' => 'Konum Kısa Kodu',
        'ask_long' => 'Konum Açıklaması',
        'created' => ':id kimliğine sahip yeni bir konum (:name) başarıyla oluşturuldu.',
        'deleted' => 'İstenen konum başarıyla silindi.',
    ],
    'user' => [
        'search_users' => 'Kullanıcı adı, Kullanıcı KİMLİĞİ ya da e-Posta Adresinizi girin',
        'select_search_user' => 'Silinecek kullanıcının kimliği (Yeniden aramak için \'0\' girin)',
        'deleted' => 'Kullanıcı Panelden başarıyla silindi.',
        'confirm_delete' => 'Bu kullanıcıyı Panelden silmek istediğinizden emin misiniz?',
        'no_users_found' => 'Sağlanan arama terimi için kullanıcı bulunamadı.',
        'multiple_found' => 'Sağlanan kullanıcı için --etkileşim yok bayrağı nedeniyle bir kullanıcıyı silemeyen birden çok hesap bulundu.',
        'ask_admin' => 'Bu kullanıcı yönetici mi?',
        'ask_email' => 'E-Posta Adresi',
        'ask_username' => 'Kullanıcı Adı',
        'ask_name_first' => 'İsim',
        'ask_name_last' => 'Soyad',
        'ask_password' => 'Şifre',
        'ask_password_tip' => 'Kullanıcıya e-postayla gönderilen rastgele bir parola içeren bir hesap oluşturmak istiyorsanız, bu komutu (CTRL + C) yeniden çalıştırın ve `--no-password` bayrağını iletin.',
        'ask_password_help' => 'Parolalar en az 8 karakter uzunluğunda olmalı ve en az bir büyük harf ve sayı içermelidir.',
        '2fa_help_text' => [
            'Bu komut etkinleştirilirse, bir kullanıcının hesabı için 2 faktörlü kimlik doğrulamayı devre dışı bırakır. Bu, yalnızca kullanıcı hesabından kilitlenmişse hesap kurtarma komutu olarak kullanılmalıdır.',
            'Yapmak istediğiniz bu değilse, bu işlemden çıkmak için CTRL + C tuşlarına basın.',
        ],
        '2fa_disabled' => ':email için 2 Faktörlü kimlik doğrulaması devre dışı bırakıldı.',
    ],
    'schedule' => [
        'output_line' => '`:schedule` (:hash) deki ilk görev için iş gönderme.',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Hizmet yedekleme dosyası :file siliniyor.',
    ],
    'server' => [
        'rebuild_failed' => '":node" Nodesindeki ":name" (#:id) için yeniden oluşturma isteği hata: :message başarısız oldu',
        'reinstall' => [
            'failed' => '":node" Nodesindeki ":name" (#:id) isteğini yeniden yükleme hatası: :message başarısız oldu',
            'confirm' => 'Bir grup sunucuya karşı yeniden yüklemek üzeresiniz. Devam etmek istiyor musunuz?',
        ],
        'power' => [
            'confirm' => ':action Karşı bir eylem gerçekleştirmek üzeresiniz :count sunucuları için. Devam etmek istiyor musunuz?',
            'action_failed' => '":node" Nodesindeki ":name" (#:id) için güç eylemi isteği hata: :message başarısız oldu',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Hostu (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Kullanıcı Adı',
            'ask_smtp_password' => 'SMTP Şifre',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_endpoint' => 'Mailgun Bitiş',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'APİ Anahtarı',
            'ask_driver' => 'E-posta göndermek için hangi sürücü kullanılmalıdır?',
            'ask_mail_from' => 'E-posta adresi e-postaları aşağıdakilerden kaynaklanmalıdır',
            'ask_mail_name' => 'E-postaların görünmesi gereken ad',
            'ask_encryption' => 'Kullanılacak şifreleme yöntemi',
        ],
    ],
];
