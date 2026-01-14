<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    protected $fillable = [
        'image',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Получить URL изображения (относительный путь для избежания CORS)
     */
    public function getImageUrlAttribute(): ?string
    {
        if (!$this->image) {
            return null;
        }

        // Используем относительный путь для избежания CORS проблем
        $path = str_starts_with($this->image, 'media/') 
            ? $this->image 
            : 'media/' . $this->image;
            
        return '/storage/' . $path;
    }
}
