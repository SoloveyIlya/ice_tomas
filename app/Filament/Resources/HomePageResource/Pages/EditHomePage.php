<?php

namespace App\Filament\Resources\HomePageResource\Pages;

use App\Filament\Resources\HomePageResource;
use App\Models\HomePage;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomePage extends EditRecord
{
    protected static string $resource = HomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Убираем удаление, так как нужна только одна запись
        ];
    }

    public function mount(int|string $record = 1): void
    {
        $homePage = HomePage::find($record);
        
        if (!$homePage) {
            // Если записи нет, создаем
            $homePage = HomePage::create([
                'id' => 1,
                'banner_1' => null,
                'banner_2' => null,
                'banner_3' => null,
                'banner_4' => null,
            ]);
        }

        $this->record = $homePage;
        $this->form->fill($homePage->toArray());
    }
}
