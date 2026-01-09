<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Validation\ValidationException;

class CreateBanner extends CreateRecord
{
    protected static string $resource = BannerResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Проверяем, что изображение загружено при создании
        if (empty($data['image'])) {
            throw ValidationException::withMessages([
                'image' => 'Пожалуйста, загрузите изображение баннера.',
            ]);
        }

        return $data;
    }
}
