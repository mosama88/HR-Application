<?php


namespace App\Faker;

use Faker\Provider\Base;

class GovernorateFaker extends Base
{
    protected static $usedGovernorates = [];

    protected static $governorates = [
        'القاهرة',
        'الجيزة',
        'الأسكندرية',
        'الدقهلية',
        'البحر الأحمر',
        'البحيرة',
        'الفيوم',
        'الغربية',
        'الإسماعلية',
        'المنوفية',
        'المنيا',
        'القليوبية',
        'الوادي الجديد',
        'السويس',
        'اسوان',
        'اسيوط',
        'بني سويف',
        'بورسعيد',
        'دمياط',
        'الشرقية',
        'جنوب سيناء',
        'كفر الشيخ',
        'مطروح',
        'الأقصر',
        'قنا',
        'شمال سيناء',
        'سوهاج'
    ];
    /**
     * الحصول على اسم دولة وكودها بدون تكرار
     */


    public function uniqueGovernorate()
    {
        $available = array_diff(static::$governorates, static::$usedGovernorates);
        if (empty($available)) {
            throw new \Exception("No unique department left.");
        }

        $governorate = static::randomElement($available);
        static::$usedGovernorates[] = $governorate;
        return $governorate;
    }
}
