<?php

namespace App\Filament\Resources\ToDoLists\Pages;

use App\Filament\Resources\ToDoLists\ToDoListResource;
use Filament\Resources\Pages\CreateRecord;

class CreateToDoList extends CreateRecord
{
    protected static string $resource = ToDoListResource::class;
}
