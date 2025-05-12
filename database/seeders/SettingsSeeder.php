<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\SettingTranslation;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        // الإعدادات الأساسية (غير قابلة للترجمة)
        $settings = [
            'default_local'        => 'ar',
            'default_timezone'     => 'Africa/Cairo',
            'reviews_enable'       => true,
            'autoApproveReviews'   => true,
            'supported_currencies' => json_encode(['USD', 'LE', 'SAR']),
            'default_currency'     => 'USD',
            'store_email'          => 'admin@store.com',
            'search_engine'        => 'mysql',
            'local_shipping_cost'  => 0,
            'outer_shipping_cost'  => 0,
            'free_shipping_cost'   => 0,
        ];

        // القيم المترجمة (لكل لغة)
        $translations = [
            'store_name' => [
                'en' => 'ُelkesh Store',
                'ar' => 'متجر القؤش',
            ],
            'free_shipping_label' => [
                'en' => 'Free shipping',
                'ar' => 'شحن مجاني',
            ],
            'local_shipping_label' => [
                'en' => 'Local shipping',
                'ar' => 'شحن محلى',
            ],
            'outer_shipping_label' => [
                'en' => 'Outer shipping',
                'ar' => 'شحن خارجى',
            ],
        ];

        // إدخال الإعدادات الأساسية
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
               
            );
        }

        foreach ($translations as $key => $locales) {
            // كل ترجمة تعتبر إعداد جديد بـ key مختلف (مثل الإعدادات العادية)
            $setting = Setting::firstOrCreate(['key' => $key]);
        
            // لكل لغة، احفظ الترجمة
            foreach ($locales as $locale => $translatedValue) {
                // استخدم العمود الصحيح 'setting_id' بدلاً من 'key'
                $translation = $setting->translateOrNew($locale);
                $translation->plan_value = $translatedValue; // تعيين القيمة المترجمة في العمود الصحيح
            }
        
            $setting->save();
        }
    }
}
