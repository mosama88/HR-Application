<?php


namespace App\Faker;

use Faker\Provider\Base;

class CountryFacker extends Base
{
    protected static $usedCountries = [];

    protected static $countries = [
        'مصر' => 'EG',
        'السعودية' => 'SA',
        'الإمارات' => 'AE',
        'الكويت' => 'KW',
        'قطر' => 'QA',
        'البحرين' => 'BH',
        'عمان' => 'OM',
        'الأردن' => 'JO',
        'سوريا' => 'SY',
        'لبنان' => 'LB',
        'العراق' => 'IQ',
        'اليمن' => 'YE',
        'الجزائر' => 'DZ',
        'المغرب' => 'MA',
        'تونس' => 'TN',
        'ليبيا' => 'LY',
        'السودان' => 'SD',
        'فلسطين' => 'PS',
        'موريتانيا' => 'MR',
        'جيبوتي' => 'DJ',
        'جزر القمر' => 'KM',
        'الولايات المتحدة' => 'US',
        'كندا' => 'CA',
        'المملكة المتحدة' => 'GB',
        'فرنسا' => 'FR',
        'ألمانيا' => 'DE',
        'إيطاليا' => 'IT',
        'إسبانيا' => 'ES',
        'البرتغال' => 'PT',
        'اليونان' => 'GR',
        'تركيا' => 'TR',
        'الهند' => 'IN',
        'الصين' => 'CN',
        'اليابان' => 'JP',
        'كوريا الجنوبية' => 'KR',
        'أستراليا' => 'AU',
        'البرازيل' => 'BR',
        'الأرجنتين' => 'AR',
        'جنوب أفريقيا' => 'ZA',
        'نيجيريا' => 'NG',
        'إندونيسيا' => 'ID',
        'باكستان' => 'PK',
        'روسيا' => 'RU',
        'أوكرانيا' => 'UA',
        'بولندا' => 'PL',
        'السويد' => 'SE',
        'النرويج' => 'NO',
        'الدنمارك' => 'DK',
        'هولندا' => 'NL',
        'سويسرا' => 'CH',
        'النمسا' => 'AT',
        'فنلندا' => 'FI',
        'بلجيكا' => 'BE',
        'تشيكيا' => 'CZ',
    ];

    /**
     * الحصول على اسم دولة وكودها بدون تكرار
     */
    public static function uniqueCountry()
    {
        $available = array_diff_key(static::$countries, static::$usedCountries);

        if (empty($available)) {
            // Reset if exhausted
            static::$usedCountries = [];
            $available = static::$countries;
        }

        // اختر عشوائي من الدول المتاحة
        $countryName = array_rand($available);
        $countryCode = static::$countries[$countryName];

        // سجل كأنها تم استخدامها
        static::$usedCountries[$countryName] = true;

        return [
            'name' => $countryName,
            'country_code' => $countryCode,
        ];
    }
}