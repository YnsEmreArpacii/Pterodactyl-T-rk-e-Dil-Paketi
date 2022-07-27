<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute Kabul Edildi.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute , :date den sonraki bir tarih olmalı.',
    'after_or_equal' => ':attribute , :date den sonraki veya eşit bir tarih olmalı.',
    'alpha' => ':attribute sadece harfler içerebilir.',
    'alpha_dash' => ':attribute yalnızca harfler, sayılar ve kısa çizgiler içerebilir.',
    'alpha_num' => ':attribute sadece harf ve rakam içerebilir.',
    'array' => ':attribute bir dizi olmalı.',
    'before' => ':attribute , :date den önceki bir tarih olmalı.',
    'before_or_equal' => ':attribute :date önce veya eşit bir tarih olmalı.',
    'between' => [
        'numeric' => ':attribute , :min ve :max arasında olmalı..',
        'file' => ':attribute , :min ve :max kilobytes arasında olmalı.',
        'string' => ':attribute , :min ve :max karakter arasında olmalı.',
        'array' => ':attribute , :min ve :max öğe arasında olmalı.',
    ],
    'boolean' => ':attribute doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onay eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_format' => ':attribute , :format biçimiyle eşleşmiyor.',
    'different' => ' :attribute ve :other farklı olmalı.',
    'digits' => ':attribute , :digits hane olmalı.',
    'digits_between' => ':attribute , :min ve :max hane arasında olmalı.',
    'dimensions' => ':attribute geçersiz görüntü boyutlarına sahiptir.',
    'distinct' => ':attribute alanın yinelenen bir değeri var.',
    'email' => ':attribute geçerli bir e-posta adresi olmalı.',
    'exists' => 'Seçilen :attribute Geçersiz.',
    'file' => ':attribute bir dosya olmalı.',
    'filled' => ':attribute alan gereklidir.',
    'image' => ':attribute bir görüntü olmalı.',
    'in' => 'Seçilen :attribute Geçersi.',
    'in_array' => ':other da :attribute alanı yok.',
    'integer' => ':attribute tamsayı olmalı.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalı.',
    'max' => [
        'numeric' => ':attribute , :max dan büyük olmamalıdır.',
        'file' => ':attribute , :max kilobytes dan büyük olmamalıdır.',
        'string' => ':attribute , :max karakterden büyük olmamalıdır.',
        'array' => ':attribute , :max öğeden daha fazlasına sahip olmamalıdır.',
    ],
    'mimes' => ':attribute Dosya Türü: :values olmalıdır.',
    'mimetypes' => ':attribute Dosya Türü: :values olmalıdır.',
    'min' => [
        'numeric' => ':attribute En az :min olmalıdır.',
        'file' => ':attribute En Az :min kilobytes olmalıdır.',
        'string' => ':attribute En Az :min Karakter Olmalıdır.',
        'array' => ':attribute en az :min öğe olmalıdır..',
    ],
    'not_in' => 'Seçilen :attribute geçersizdir.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'present' => ':attribute alan mevcut olmalıdır.',
    'regex' => ':attribute biçimi geçersizdir.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı :other :value olduğunda gereklidir.',
    'required_unless' => ':other :values olmadığı sürece :attribute alanı gereklidir.',
    'required_with' => ':values olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':values olduğunda :attribute alanı gereklidir.',
    'required_without' => ':values olmadığında :attribute alanı gereklidir.',
    'required_without_all' => ':values deb hiç biri olmadığında :attribute alanı gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute , :size olmalıdır.',
        'file' => ':attribute , :size kilobytes olmalıdır.',
        'string' => ':attribute , :size karakter olmalıdır.',
        'array' => ':attribute , :size karakter içermelidir..',
    ],
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir zaman dilmi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute biçimi geçersiz.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env Değişken',
        'invalid_password' => 'Bu hesap için sağlanan parola geçersizdir..',
    ],
];
