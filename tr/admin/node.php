<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Sağlanan FQDN veya IP adresi geçerli bir IP adresine çözümlenmiyor.',
        'fqdn_required_for_ssl' => 'Bu Node için SSL kullanmak için genel bir IP adresine çözümleyen tam etki alanı adı gerekir.',
    ],
    'notices' => [
        'allocations_added' => 'Ayırmalar bu Node başarıyla eklenmiştir.',
        'node_deleted' => 'Node panelden başarıyla kaldırıldı.',
        'location_required' => 'Bu panele Node eklemeden önce yapılandırılmış en az bir konumunuz olmalıdır.',
        'node_created' => 'Yeni Node başarıyla oluşturuldu. "Yapılandırma" sekmesini ziyaret ederek daemon\'u bu makinede otomatik olarak yapılandırabilirsiniz. <strong>Herhangi bir sunucu ekleyebilmeniz için önce en az bir IP adresi ve bağlantı noktası ayırmanız gerekir.</strong>',
        'node_updated' => 'Node bilgileri güncellendi. Herhangi bir daemon ayarı değiştirilmişse, bu değişikliklerin etkili olması için yeniden başlatmanız gerekir.',
        'unallocated_deleted' => '<Code>:ip</code> için ayrılmamış tüm bağlantı noktaları silindi.',
    ],
];
