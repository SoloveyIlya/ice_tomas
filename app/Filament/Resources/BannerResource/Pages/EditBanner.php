<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditBanner extends EditRecord
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Если поле image не передано или пустое, сохраняем старое значение
        if (!isset($data['image']) || empty($data['image']) || $data['image'] === '') {
            $data['image'] = $this->record->image;
            return $data;
        }

        // Если это массив (Filament иногда возвращает массив)
        if (is_array($data['image'])) {
            // Если массив пустой, оставляем старое
            if (empty($data['image'])) {
                $data['image'] = $this->record->image;
                return $data;
            }
            // Берем первый элемент
            $data['image'] = $data['image'][0];
        }

        // Если новое значение отличается от старого, удаляем старое
        if ($data['image'] !== $this->record->image) {
            $oldImagePath = $this->record->image;
            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        return $data;
    }
}
