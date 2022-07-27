<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Yeni bir yuva olan :name başarıyla oluşturuldu.',
        'deleted' => 'İstenen yuvayı Panelden başarıyla silindi.',
        'updated' => 'Yuva yapılandırma seçenekleri başarıyla güncelleştirildi.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Bu Yumurtayı ve ilişkili değişkenleri başarıyla içe aktardı.',
            'updated_via_import' => 'Bu Yumurta sağlanan dosya kullanılarak güncellendi.',
            'deleted' => 'İstenen yumurtayı Panelden başarıyla silindi.',
            'updated' => 'Yumurta yapılandırması başarıyla güncellendi.',
            'script_updated' => 'Yumurta yükleme komut dosyası güncellendi ve sunucular her yüklendiğinde çalışacak.',
            'egg_created' => 'Yeni bir yumurta başarıyla atıldı. Bu yeni yumurtayı uygulamak için çalışan iblisleri yeniden başlatmanız gerekecek.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '":variable" değişkeni silindi ve yeniden oluşturulduktan sonra artık sunuculara sunulmayacak.',
            'variable_updated' => '":variable" değişkeni güncellendi. Değişiklikleri uygulamak için bu değişkeni kullanarak tüm sunucuları yeniden oluşturmanız gerekir.',
            'variable_created' => 'Yeni değişken başarıyla oluşturuldu ve bu yumurtaya atandı.',
        ],
    ],
];
