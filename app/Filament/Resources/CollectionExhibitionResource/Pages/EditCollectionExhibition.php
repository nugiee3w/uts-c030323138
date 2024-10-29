<?php

namespace App\Filament\Resources\CollectionExhibitionResource\Pages;

use App\Filament\Resources\CollectionExhibitionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollectionExhibition extends EditRecord
{
    protected static string $resource = CollectionExhibitionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
