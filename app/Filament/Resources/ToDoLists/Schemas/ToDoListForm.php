<?php

namespace App\Filament\Resources\ToDoLists\Schemas;

use App\Models\ToDoList;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ToDoListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                RichEditor::make('description')
                    ->columnSpanFull(),

                DateTimePicker::make('due_date')
                    ->required()
                    ->timezone('UTC'),

                Select::make('priority')
                    ->options(ToDoList::getPriorities())
                    ->default(ToDoList::PRIORITY_MEDIUM)
                    ->required(),

                Select::make('status')
                    ->options(ToDoList::getStatuses())
                    ->default(ToDoList::STATUS_PENDING)
                    ->required(),

                Checkbox::make('is_important')
                    ->label('Mark as important'),

                \Filament\Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),
            ]);
    }
}
