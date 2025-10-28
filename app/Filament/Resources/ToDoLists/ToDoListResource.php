<?php

namespace App\Filament\Resources\ToDoLists;

use UnitEnum; // REQUIRED for the $navigationGroup type hint

use App\Filament\Resources\ToDoLists\Pages\CreateToDoList;
use App\Filament\Resources\ToDoLists\Pages\EditToDoList;
use App\Filament\Resources\ToDoLists\Pages\ListToDoLists;
use App\Filament\Resources\ToDoLists\Schemas\ToDoListForm;
use App\Filament\Resources\ToDoLists\Tables\ToDoListsTable;
use App\Models\ToDoList;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Form; // Use Form instead of Schema for v3/v4 forms

// You may need to replace 'Filament\Schemas\Schema' with the correct Form/Component import
// based on what ToDoListForm::configure expects. We will assume Form for now.


class ToDoListResource extends Resource
{
    // MUST BE 'string' (not nullable) for Filament v3/v4
    protected static string $model = \App\Models\ToDoList::class; 
    
    // MUST BE 'string' (not nullable) for Filament v3/v4
    protected static string $navigationIcon = 'heroicon-o-document-text';
    
    // MUST USE 'string | UnitEnum | null' for Filament v3/v4
    protected static string | UnitEnum | null $navigationGroup = 'Tasks';

    
    // NOTE: If ToDoListForm is an external class, it might expect a different type, 
    // but the Resource itself now uses Filament\Forms\Form
    public static function form(Form $form): Form
    {
        return ToDoListForm::configure($form);
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