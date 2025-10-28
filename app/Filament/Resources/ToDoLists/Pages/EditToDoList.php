<?php

namespace App\Filament\Resources\ToDoLists\Pages;

use App\Filament\Resources\ToDoLists\ToDoListResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditToDoList extends EditRecord
{
    protected static string $resource = ToDoListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
