<?php

return [
    'daemon_connection_failed' => 'Sunucu ile iletişim kurmaya çalışırken bir HTTP /:code yanıt koduyla sonuçlanan bir istisna vardı. Bu özel durum günlüğe kaydedildi.',
    'node' => [
        'servers_attached' => 'Bir Nodenin silinebilmesi için kendisine bağlı sunuculara sahip olmaması gerekir.',
        'daemon_off_config_updated' => 'Daemon yapılandırması <strong> güncellendi</strong>, ancak Sunucudaki yapılandırma dosyasını otomatik olarak güncellemeye çalışırken bir hatayla karşılaşıldı. Yapılandırma dosyasını el ile güncelleştirmeniz gerekir (config.daemon un bu değişiklikleri uygulayabilmesi için.',
    ],
    'allocations' => [
        'server_using' => 'Şu anda bu ayırmaya bir sunucu atanmıştır. Bir ayırma yalnızca şu anda atanmış bir sunucu yoksa silinebilir.',
        'too_many_ports' => 'Aynı anda tek bir aralıkta 1000den fazla bağlantı noktası eklemek desteklenmez.',
        'invalid_mapping' => 'İçin sağlanan eşleme: bağlantı noktası geçersizdi ve işlenemedi.',
        'cidr_out_of_range' => 'CIDR gösterimi yalnızca / 25 ile / 32 arasındaki maskelere izin verir.',
        'port_out_of_range' => 'Ayırmadaki bağlantı noktaları 1024ten büyük ve 65535ten küçük veya ona eşit olmalıdır.',
    ],
    'nest' => [
        'delete_has_servers' => 'Etkin sunucuların bağlı olduğu bir Yuva Panelden silinemez.',
        'egg' => [
            'delete_has_servers' => 'Etkin sunucuların bağlı olduğu bir Yumurta Panelden silinemez.',
            'invalid_copy_id' => 'Bir komut dosyasını kopyalamak için seçilen yumurta mevcut değil veya bir komut dosyasının kendisini kopyalıyor.',
            'must_be_child' => 'Bu Yumurta için "Ayarları Kopyala" yönergesi seçilen Yuva için bir alt seçenek olmalıdır.',
            'has_children' => 'Bu Yumurta bir veya daha fazla Yumurtanın ebeveyni. Lütfen bu Yumurtayı silmeden önce bu Yumurtaları silin.',
        ],
        'variables' => [
            'env_not_unique' => 'Ortam değişkeni :name bu Yumurtaya özgü olmalıdır.',
            'reserved_name' => 'Ortam değişkeni: ad korunur ve bir değişkene atanamaz.',
            'bad_validation_rule' => 'Doğrulama kuralı ": kural" bu uygulama için geçerli bir kural değildir.',
        ],
        'importer' => [
            'json_error' => 'JSON dosyasını ayrıştırmaya çalışırken bir hata oluştu: :error.',
            'file_error' => 'Sağlanan JSON dosyası geçerli değildi.',
            'invalid_json_provided' => 'Sağlanan JSON dosyası tanınabilecek bir biçimde değil.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Kendi alt kullanıcı hesabınızı düzenlemeye izin verilmez.',
        'user_is_owner' => 'Sunucu sahibini bu sunucu için alt kullanıcı olarak ekleyemezsiniz.',
        'subuser_exists' => 'Bu e-posta adresine sahip bir kullanıcı zaten bu sunucu için alt kullanıcı olarak atanmıştır.',
    ],
    'databases' => [
        'delete_has_databases' => 'Kendisine bağlı etkin veritabanları olan bir veritabanı ana sunucusu silinemiyor.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Zincirleme bir görev için maksimum aralık süresi 15 dakikadır.',
    ],
    'locations' => [
        'has_nodes' => 'Etkin düğümlerin bağlı olduğu bir konum silinemiyor.',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Node #:node</a> üzerindeki anahtarlar iptal edilemedi. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan düğüm bulunamadı.',
        'no_viable_allocations' => 'Otomatik dağıtım gereksinimlerini karşılayan hiçbir ayırma bulunamadı.',
    ],
    'api' => [
        'resource_not_found' => 'Bu sunucuda istenen kaynak yok.',
    ],
];
