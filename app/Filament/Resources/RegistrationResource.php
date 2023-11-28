<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Filament\Tables\Filters\SelectFilter;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('country')
                ->required()
                ->columnSpan('full'),                
            Forms\Components\TextInput::make('code')
                ->required(),
            Forms\Components\TextInput::make('city')
                ->columnSpan(3)
                ->required(),
            Forms\Components\TextInput::make('street')
                ->columnSpan(3)
                ->required(),
            Forms\Components\TextInput::make('number')
               ->required(),
            
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label('Created at')
                        ->content(fn (Registration $record): ?string => $record->created_at?->diffForHumans()),

                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Last modified at')
                        ->content(fn (Registration $record): ?string => $record->updated_at?->diffForHumans())
                    ])
                    
                    ->hidden(fn (?Registration $record) => $record === null),
            ])
            ->columns(4);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->sortable(),
                Tables\Columns\TextColumn::make('flat_id')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('user_id')
                ->sortable(),
                Tables\Columns\TextColumn::make('street')
                ->sortable(),
                Tables\Columns\TextColumn::make('house_number')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('flat_number'),
                Tables\Columns\TextColumn::make('code')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('city')
                ->sortable()
                ->searchable()
                
            ])
            ->filters([
            /*
                SelectFilter::make('status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive'
                     ])
                    ->attribute('status'),
            */
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            //->contentGrid([
            //    'sm' => 2,
            //    'sm' => 3,
            //]);
            ;
    }
    
    public static function getRelations(): array
    {
        return [
            //RelationManagers\AddressesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrations::route('/'),
        ];
    }    

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}
