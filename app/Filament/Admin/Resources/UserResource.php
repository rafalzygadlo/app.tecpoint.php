<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Filament\Admin\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\FileUpload;
 

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-users';
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Group::make()
                    ->schema([
            Forms\Components\TextInput::make('first_name')
                ->required(),
            Forms\Components\TextInput::make('last_name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->unique(User::class, 'email'),
            Forms\Components\TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->dehydrated(fn ($state) => filled($state))
                ->required(fn (string $context): bool => $context === 'create'),

            //Forms\Components\Select::make('role_id')
              //  ->relationship('role', 'name')
              //  ->searchable(),
                //->hiddenOn(ProductsRelationManager::class),

            Forms\Components\MarkdownEditor::make('bio')
                ->columnSpan('full'),
            Forms\Components\FileUpload::make('avatar')
                ->image()
                ->imageEditor()       
                ->disk('public')
                ->directory('avatar'),
            Forms\Components\TextInput::make('birth_date'),
            Forms\Components\TextInput::make('twitter_handle')
                ->label('Twitter'),
                
            ])
            ->columns(2)
            ->columnSpan(['lg' => fn (?User $record) => $record === null ? 3 : 2])
            ,
            
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label('Created at')
                        ->content(fn (User $record): ?string => $record->created_at?->diffForHumans()),

                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Last modified at')
                        ->content(fn (User $record): ?string => $record->updated_at?->diffForHumans())
                    ])
                    ->columnSpan(['lg' => 1])
                    ->hidden(fn (?User $record) => $record === null),

            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
            
            
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar'),
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('hr')
                ->searchable()
                ->sortable(),   
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable()
                    ->sortable(),
		        Tables\Columns\TextColumn::make('last_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('birth_date')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_work_day')
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('status')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at'),
            ])
            ->filters([
                
        
                SelectFilter::make('status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive'
                     ])
                    ->attribute('status'),
                   
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])->defaultSort('id','desc');
            ;
    }
    
    public static function getRelations(): array
    {
        return [
            RelationManagers\AddressesRelationManager::class            
        ];
    }
    
    public static function getPages(): array
    {

        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];

        return [
            'index' => Pages\ListUsers::route('/'),
        ];
    }    
}
