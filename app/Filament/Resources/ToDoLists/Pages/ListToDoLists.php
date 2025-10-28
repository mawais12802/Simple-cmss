<?php

namespace App\Filament\Resources\ToDoLists\Pages;

use App\Filament\Resources\ToDoLists\ToDoListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListToDoLists extends ListRecords
{
    protected static string $resource = ToDoListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
