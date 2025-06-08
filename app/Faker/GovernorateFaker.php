<?php


namespace App\Faker;

use Faker\Provider\Base;

class GovernorateFaker extends Base
{
    protected static $usedGovernorates = [];

    protected static $governorates = [
        // 'القاهرة',
        // 'الجيزة',
        // 'الأسكندرية',
        // 'الدقهلية',
        // 'البحر الأحمر',
        // 'البحيرة',
        // 'الفيوم',
        // 'الغربية',
        // 'الإسماعلية',
        // 'المنوفية',
        // 'المنيا',
        // 'القليوبية',
        // 'الوادي الجديد',
        // 'السويس',
        // 'اسوان',
        // 'اسيوط',
        // 'بني سويف',
        // 'بورسعيد',
        // 'دمياط',
        // 'الشرقية',
        // 'جنوب سيناء',
        // 'كفر الشيخ',
        // 'مطروح',
        // 'الأقصر',
        // 'قنا',
        // 'شمال سيناء',
        // 'سوهاج'




    ];
    /**
     * الحصول على اسم دولة وكودها بدون تكرار
     */
    public static function uniqueCurrency()
    {
        $available = array_filter(static::$governorates, function ($governorate) {
            return !in_array($governorate['name'], static::$usedGovernorates);
        });

        if (empty($available)) {

            static::$usedGovernorates = [];  // Reset the used categories
            $available = static::$governorates;  // Reset the available categories
        }

        $governorate = static::randomElement($available);
        static::$governorates[] = $governorate['name'];

        return [
            'name' => $governorate['name'],
        ];
    }
}