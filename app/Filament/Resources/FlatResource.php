<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlatResource\Pages;
use App\Filament\Resources\FlatResource\RelationManagers;
use App\Models\Flat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlatResource extends Resource
{
    protected static ?string $model = Flat::class;

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('street')
                    ->required(),
                Forms\Components\TextInput::make('number')
                    ->required(),
                Forms\Components\TextInput::make('code')
                    ->required(),
                Forms\Components\TextInput::make('city')
                    ->required()
                
            ])
            ->columns(2);
                //
//            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('flat_id')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('object_id')
                    ->searchable()
                    ->sortable(),   
                Tables\Columns\TextColumn::make('street')
                    ->searchable()
                    ->sortable(),   
                Tables\Columns\TextColumn::make('number')
                    ->searchable()
                    ->sortable(),   
                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->sortable(),   
                Tables\Columns\TextColumn::make('city')
                    ->searchable()
                    ->sortable(),   

                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            RelationManagers\TasksRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFlats::route('/'),
            'edit' => Pages\EditFlat::route('/{record}/edit')
        ];
    }    
}
