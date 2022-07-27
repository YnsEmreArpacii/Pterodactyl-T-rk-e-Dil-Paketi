<?php

return [
    'email' => [
        'title' => 'E-postanızı güncelleyin',
        'updated' => 'E-posta adresiniz güncellendi.',
    ],
    'password' => [
        'title' => 'Şifre değiştirme',
        'requirements' => 'Yeni şifreniz en az 8 karakter uzunluğunda olmalıdır.',
        'updated' => 'Şifreniz güncellendi.',
    ],
    'two_factor' => [
        'button' => '2 Faktörlü Kimlik Doğrulamayı Yapılandırma',
        'disabled' => 'Hesabınızda iki faktörlü kimlik doğrulaması devre dışı bırakıldı. Oturum açarken artık bir belirteç sağlamanız istenmeyecek.',
        'enabled' => 'Hesabınızda iki faktörlü kimlik doğrulama etkinleştirildi! Şu andan itibaren, giriş yaparken, cihazınız tarafından oluşturulan kodu sağlamanız gerekecektir.',
        'invalid' => 'Sağlanan token geçersizdi.',
        'setup' => [
            'title' => 'İki faktörlü kimlik doğrulamayı ayarlama',
            'help' => 'Kodu tarayamıyor musunuz? Uygulamanıza aşağıdaki kodu girin:',
            'field' => 'Tokeni Girin',
        ],
        'disable' => [
            'title' => 'İki faktörlü kimlik doğrulamayı devre dışı bırak',
            'field' => 'Tokeni Girin',
        ],
    ],
];
