<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'يجب قبول  :attribute',
    'active_url'           => ' :attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على  :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي  :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي  :attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون  :attribute ًمصفوفة',
    'before'               => 'يجب على  :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة  :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => ' :attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق  :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون ان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي  :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي  :attribute ما بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => ' :attribute لاغٍ',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => ' :attribute إجباري',
    'image'                => 'يجب أن يكون  :attribute صورةً',
    'in'                   => ' :attribute لاغٍ',
    'in_array'             => ' :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون  :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون  :attribute عنوان IP ذي بُنية صحيحة',
    'json'                 => 'يجب أن يكون  :attribute نصآ من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة  :attribute أصغر من :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي  :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون  ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون  ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة  :attribute أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute أكبر من :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي  :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => ' :attribute لاغٍ',
    'numeric'              => 'يجب على  :attribute أن يكون رقمًا',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'صيغة  :attribute .غير صحيحة',
    'required'             => ' :attribute مطلوب.',
    'required_if'          => ' :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ' :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ' :attribute إذا توفّر :values.',
    'required_with_all'    => ' :attribute إذا توفّر :values.',
    'required_without'     => ' :attribute إذا لم يتوفّر :values.',
    'required_without_all' => ' :attribute إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق  :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string'  => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array'   => 'يجب أن يحتوي  :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'string'               => 'يجب أن يكون  :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة  :attribute مُستخدمة من قبل',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

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

    'attributes'           => [
        'name'                  => 'الاسم',
        'third_name'                  => 'الاسم الثالث',
        'second_name'                  => 'الاسم الثاني',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم',
        'image'                 => 'الصورة',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'birth_date'                 => 'تاريخ الميلاد',
        'card_no'                 => 'رقم البطاقة',
        'card_source'                 => 'محل الإصدار',
        'home'               => 'رقم المنزل',
        'card_name'               => 'صورة البطاقة',
        'cert_name'               => 'صورة الشهادة',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'desc'                  => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'url'                   => 'الرابط',
        'message'                   => 'نص الرسالة',
    ],

];
