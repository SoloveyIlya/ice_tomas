<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Проверяем, есть ли уже баннеры
        if (Banner::count() > 0) {
            $this->command->info('Баннеры уже существуют, пропускаем создание.');
            return;
        }

        $banners = [
            ['image' => 'banner-1.png', 'order' => 1],
            ['image' => 'banner-2.png', 'order' => 2],
            ['image' => 'banner-3.png', 'order' => 3],
            ['image' => 'banner-4.png', 'order' => 4],
        ];

        foreach ($banners as $bannerData) {
            // Копируем файл из public/media в storage/app/public/media если его там нет
            $sourcePath = public_path('media/' . $bannerData['image']);
            $storagePath = storage_path('app/public/media/' . $bannerData['image']);
            
            if (File::exists($sourcePath)) {
                // Создаем директорию если её нет
                if (!File::exists(storage_path('app/public/media'))) {
                    File::makeDirectory(storage_path('app/public/media'), 0755, true);
                }
                
                // Копируем файл если его нет в storage
                if (!File::exists($storagePath)) {
                    File::copy($sourcePath, $storagePath);
                    $this->command->info("Скопирован файл: {$bannerData['image']}");
                }
                
                // Создаем запись в БД с путем относительно storage
                Banner::create([
                    'image' => 'media/' . $bannerData['image'],
                    'order' => $bannerData['order'],
                    'is_active' => true,
                ]);
            }
        }

        $this->command->info('Баннеры успешно созданы!');
    }
}
