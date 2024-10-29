<?php

namespace App\Filament\Resources\CollectionExhibitionResource\Pages;

use App\Filament\Resources\CollectionExhibitionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollectionExhibitions extends ListRecords
{
    protected static string $resource = CollectionExhibitionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
