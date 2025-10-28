<?php

namespace App\Filament\Resources\ToDoLists;

use App\Filament\Resources\ToDoLists\Pages\CreateToDoList;
use App\Filament\Resources\ToDoLists\Pages\EditToDoList;
use App\Filament\Resources\ToDoLists\Pages\ListToDoLists;
use App\Filament\Resources\ToDoLists\Schemas\ToDoListForm;
use App\Filament\Resources\ToDoLists\Tables\ToDoListsTable;
use App\Models\ToDoList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ToDoListResource extends Resource
{
    protected static ?string $model = ToDoList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'To-do-list';

    public static function form(Schema $schema): Schema
    {
        return ToDoListForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ToDoListsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListToDoLists::route('/'),
            'create' => CreateToDoList::route('/create'),
            'edit' => EditToDoList::route('/{record}/edit'),
        ];
    }
}
