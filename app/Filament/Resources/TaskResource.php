<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskResource\Pages;
use App\Filament\Resources\TaskResource\RelationManagers;
use App\Models\Task;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            Forms\Components\Select::make('user_id')
                ->relationship('user', 'full_name')
                ->searchable()
                ->columnSpan('full'),
            Forms\Components\TextInput::make('title')
                ->required()
                ->columnSpan('full'),
            Forms\Components\MarkdownEditor::make('info')
                ->columnSpan('full'), 
            Forms\Components\Select::make('flat_id')
                ->relationship('flat', 'full_name')
                ->searchable()
                ->columnSpan('full'),
            
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label('Created at')
                        ->content(fn (Task $record): ?string => $record->created_at?->diffForHumans()),

                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Last modified at')
                        ->content(fn (Task $record): ?string => $record->updated_at?->diffForHumans())
                    ])
                    
                    ->hidden(fn (?Task $record) => $record === null),
            ])
            ->columns(4);
            
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->description(fn (Task $record) => $record->info, position: 'below'),

            Tables\Columns\TextColumn::make('user.first_name')
                ->label('User Name')
                ->formatStateUsing(fn ($state, Task $record): ?string => $record->user?->first_name .' '. $record->user?->last_name)
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('flat_id')
                ->searchable()
                ->sortable(),   

            Tables\Columns\TextColumn::make('created_at')->since(),
            Tables\Columns\TextColumn::make('updated_at'),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }    
}
