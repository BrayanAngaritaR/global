<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Мовні лінії перевірки
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки містять типові повідомлення про помилки, 
    | які використовуються класом валідатора. Деякі з цих правил мають кілька версій, 
    | наприклад правила розміру. Ви можете налаштувати кожне з цих повідомлень тут.
    |
    */

    'accepted' => 'Поле :attribute має бути прийнятним.',
    'accepted_if' => 'Поле :attribute має бути прийнятним, якщо :other є :value.',
    'active_url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'after' => 'Поле :attribute має бути датою після :date.',
    'after_or_equal' => 'Поле :attribute має бути датою після або дорівнювати :date.',
    'alpha' => 'Поле :attribute має містити лише літери.',
    'alpha_dash' => 'Поле :attribute має містити лише літери, цифри, тире та підкреслення.',
    'alpha_num' => 'Поле :attribute має містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'ascii' => 'Поле :attribute має містити лише однобайтові буквено-цифрові символи та символи.',
    'before' => 'Поле :attribute має передувати даті :date.',
    'before_or_equal' => 'Поле :attribute має бути датою, що передує або дорівнює :date.',
    'between' => [
        'array' => 'Поле :attribute має містити між елементами :min і :max.',
        'file' => 'Поле :attribute має бути між :min і :max кілобайтами.',
        'numeric' => 'Поле :attribute має бути між :min та :max.',
        'string' => 'Поле :attribute має бути між символами :min і :max.',
    ],
    'boolean' => 'Поле :attribute має мати значення true або false.',
    'confirmed' => 'Підтвердження поля :attribute не збігається.',
    'current_password' => 'Пароль неправильний.',
    'date' => 'Поле :attribute має містити дійсну дату.',
    'date_equals' => 'Поле :attribute має бути датою, що дорівнює :date.',
    'date_format' => 'Поле :attribute має відповідати формату :format.',
    'decimal' => 'Поле :attribute має містити :decimal знаків після коми.',
    'declined' => 'Поле :attribute має бути відхилено.',
    'declined_if' => 'Поле :attribute має бути відхилено, якщо :other дорівнює :value.',
    'different' => 'Поля :attribute і :other мають відрізнятися.',
    'digits' => 'Поле :attribute має бути :digits цифр.',
    'digits_between' => 'Поле :attribute має бути між :min і :max цифрами.',
    'dimensions' => 'Поле :attribute містить недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'doesnt_end_with' => 'Поле :attribute не має закінчуватися одним із таких: :values.',
    'doesnt_start_with' => 'Поле :attribute не має починатися з одного з наступного: :values.',
    'email' => 'Поле :attribute має бути дійсною електронною адресою.',
    'ends_with' => 'Поле :attribute має закінчуватися одним із таких: :values.',
    'enum' => 'Вибраний :attribute недійсний.',
    'exists' => 'Вибраний :attribute недійсний.',
    'file' => 'Поле :attribute має бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    'gt' => [
        'array' => 'Поле :attribute має містити більше елементів :value.',
        'file' => 'Поле :attribute має бути більшим за :value кілобайт.',
        'numeric' => 'Поле :attribute має бути більшим за :value.',
        'string' => 'Поле :attribute має містити більше символів, ніж :value.',
    ],
    'gte' => [
        'array' => 'Поле :attribute має містити елементи :value або більше.',
        'file' => 'Поле :attribute має бути більше або дорівнювати :value кілобайт.',
        'numeric' => 'Поле :attribute має бути більше або дорівнювати :value.',
        'string' => 'Поле :attribute має бути більше або дорівнювати символам :value.',
    ],
    'image' => 'Поле :attribute має бути зображенням.',
    'in' => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute має існувати в :other.',
    'integer' => 'Поле :attribute має бути цілим числом.',
    'ip' => 'Поле :attribute має бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute має бути дійсною адресою IPv4.',
    'ipv6' => 'Поле :attribute має бути дійсною адресою IPv6.',
    'json' => 'Поле :attribute має бути дійсним рядком JSON.',
    'lowercase' => 'Поле :attribute має бути малим регістром.',
    'lt' => [
        'array' => 'Поле :attribute має містити менше елементів :value.',
        'file' => 'Поле :attribute має бути меншим за :value кілобайт.',
        'numeric' => 'Поле :attribute має бути меншим за :value.',
        'string' => 'Поле :attribute має містити менше символів :value.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :value елементів.',
        'file' => 'Поле :attribute має бути менше або дорівнювати :value кілобайт.',
        'numeric' => 'Поле :attribute має бути менше або дорівнювати :value.',
        'string' => 'Поле :attribute має містити менше або дорівнювати символам :value.',
    ],
    'mac_address' => 'Поле :attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :max елементів.',
        'file' => 'Поле :attribute не має перевищувати :max кілобайт.',
        'numeric' => 'Поле :attribute не має перевищувати :max.',
        'string' => 'Поле :attribute не має перевищувати :max символів.',
    ],
    'max_digits' => 'Поле :attribute не повинно містити більше ніж :max цифр.',
    'mimes' => 'Поле :attribute має бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute має бути файлом типу: :values.',
    'min' => [
        'array' => 'Поле :attribute має містити принаймні :min елементів.',
        'file' => 'Поле :attribute має бути принаймні :min кілобайт.',
        'numeric' => 'Поле :attribute має бути не менше :min.',
        'string' => 'Поле :attribute має містити принаймні :min символів.',
    ],
    'min_digits' => 'Поле :attribute має містити принаймні :min цифр.',
    'missing' => 'Поле :attribute має бути відсутнім.',
    'missing_if' => 'Поле :attribute має бути відсутнім, якщо :other є :value.',
    'missing_unless' => 'Поле :attribute має бути відсутнім, якщо :other не є :value.',
    'missing_with' => 'Поле :attribute має бути відсутнім, якщо присутній :values.',
    'missing_with_all' => 'Поле :attribute має бути відсутнім, якщо присутні :values.',
    'multiple_of' => 'Поле :attribute має бути кратним :value.',
    'not_in' => 'Вибраний :attribute недійсний.',
    'not_regex' => 'Формат поля :attribute недійсний.',
    'numeric' => 'Поле :attribute має бути числом.',
    'password' => [
        'letters' => 'Поле :attribute має містити принаймні одну літеру.',
        'mixed' => 'Поле :attribute має містити принаймні одну велику та одну малу літери.',
        'numbers' => 'Поле :attribute має містити принаймні одне число.',
        'symbols' => 'Поле :attribute має містити принаймні один символ.',
        'uncompromised' => 'Даний :attribute з’явився під час витоку даних. Виберіть інший :attribute.',
    ],
    'present' => 'Поле :attribute має бути присутнім.',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, якщо :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не міститься в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат поля :attribute недійсний.',
    'required' => 'Поле :attribute є обов’язковим.',
    'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
    'required_if' => 'Поле :attribute є обов’язковим, якщо :other дорівнює :value.',
    'required_if_accepted' => 'Поле :attribute є обов’язковим, якщо прийнято :other.',
    'required_unless' => 'Поле :attribute є обов’язковим, якщо :other не міститься в :values.',
    'required_with' => 'Поле :attribute є обов’язковим, якщо присутній :values.',
    'required_with_all' => 'Поле :attribute є обов’язковим, якщо присутні :values.',
    'required_without' => 'Поле :attribute є обов’язковим, якщо немає :values.',
    'required_without_all' => 'Поле :attribute є обов’язковим, якщо немає жодного з :values.',
    'same' => 'Поле :attribute має відповідати :other.',
    'size' => [
        'array' => 'Поле :attribute має містити елементи :size.',
        'file' => 'Поле :attribute має бути :size кілобайт.',
        'numeric' => 'Поле :attribute має бути :size.',
        'string' => 'Поле :attribute має містити символи :size.',
    ],
    'starts_with' => 'Поле :attribute має починатися з одного з наступного: :values.',
    'string' => 'Поле :attribute має бути рядком.',
    'timezone' => 'У полі :attribute має бути дійсний часовий пояс.',
    'unique' => 'Атрибут : уже використано.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'uppercase' => 'Поле :attribute має бути великим.',
    'url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'ulid' => 'Поле :attribute має бути дійсним ULID.',
    'uuid' => 'Поле :attribute має бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Настроювані мовні рядки перевірки
    |--------------------------------------------------------------------------
    |
    | Тут ви можете вказати спеціальні повідомлення перевірки для атрибутів, 
    | використовуючи угоду "attribute.rule" для іменування рядків. 
    | Це дозволяє швидко вказати певний рядок спеціальної мови для даного правила атрибута.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Спеціальні атрибути перевірки
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки використовуються, щоб замінити наш атрибут-заповнювач 
    | на щось більш зручне для читання, наприклад «Адреса електронної пошти» замість 
    | «електронної пошти». Це просто допомагає нам зробити 
    | наше повідомлення більш виразним.
    |
    */

    'attributes' => [
        'name' => 'назва',
        'email' => 'електронна пошта',
        'password' => 'пароль'
    ],

];
