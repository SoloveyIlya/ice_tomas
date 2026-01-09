<?php

namespace App\Filament\Resources\HomePageResource\Pages;

use App\Filament\Resources\HomePageResource;
use App\Models\HomePage;
use Filament\Resources\Pages\ListRecords;

class ListHomePages extends ListRecords
{
    protected static string $resource = HomePageResource::class;

    // Удаляем mount с редиректом, чтобы избежать бесконечной загрузки
}
