<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Bu sunucu için varsayılan ayırmayı silmeye çalışıyorsunuz ancak kullanılacak geri dönüş ayırması yok.',
        'marked_as_failed' => 'Bu sunucu, önceki bir yüklemede başarısız olarak işaretlendi. Bu durumda geçerli durum değiştirilemez.',
        'bad_variable' => ':name değişkeninde bir doğrulama hatası oluştu.',
        'daemon_exception' => 'Daemon ile iletişim kurmaya çalışırken bir HTTP/:code yanıt koduyla sonuçlanan bir istisna vardı. Bu özel durum günlüğe kaydedildi. (istek kimliği: : request_id)',
        'default_allocation_not_found' => 'Bu sunucunun ayırmalarında istenen varsayılan ayırma bulunamadı.',
    ],
    'alerts' => [
        'startup_changed' => 'Bu sunucunun başlangıç yapılandırması güncelleştirildi. Eğer bu server\'s yuva ya da yumurta değiştirildi, yeniden şimdi gerçekleşiyor olacak.',
        'server_deleted' => 'Sunucu sistemden başarıyla silindi.',
        'server_created' => 'Sunucu panelde başarıyla oluşturuldu. Lütfen daemonun bu sunucuyu tamamen kurması için birkaç dakika bekleyin.',
        'build_updated' => 'Bu sunucu için yapı ayrıntıları güncelleştirildi. Bazı değişikliklerin etkili olması için yeniden başlatma gerekebilir.',
        'suspension_toggled' => 'Sunucu askıya alma durumu :status olarak değiştirildi.',
        'rebuild_on_boot' => 'Bu sunucu, Docker Kapsayıcısının yeniden oluşturulmasını gerektirecek şekilde işaretlendi. Bu, sunucu bir sonraki başlatıldığında gerçekleşir.',
        'install_toggled' => 'Bu sunucunun yükleme durumu değiştirildi.',
        'server_reinstalled' => 'Bu sunucu, şimdi başlayan bir yeniden yükleme için sıraya alındı.',
        'details_updated' => 'Sunucu ayrıntıları başarıyla güncellendi.',
        'docker_image_updated' => 'Bu sunucu için kullanılacak varsayılan Docker görüntüsünü başarıyla değiştirdi. Bu değişikliği uygulamak için yeniden başlatma gereklidir.',
        'node_required' => 'Bu panele sunucu ekleyebilmeniz için önce yapılandırılmış en az bir düğüme sahip olmanız gerekir.',
        'transfer_nodes_required' => 'Sunucuları aktarabilmeniz için önce yapılandırılmış en az iki düğümünüz olmalıdır.',
        'transfer_started' => 'Sunucu aktarımı başlatıldı.',
        'transfer_not_viable' => 'Seçtiğiniz düğüm, bu sunucuyu barındırmak için gerekli disk alanına veya belleğe sahip değil.',
    ],
];
