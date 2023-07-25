<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    //protected static ?string $navigationGroup = 'Task';

    protected static ?string $navigationIcon = 'heroicon-o-users';
    

    public function getUserName()
    {
	return 'test'; 
    }

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
                ->unique(User::class, 'email', ignoreRecord: true),
            Forms\Components\TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->dehydrated(fn ($state) => filled($state))
                ->required(fn (string $context): bool => $context === 'create'),

            Forms\Components\Select::make('role_id')
                ->relationship('role', 'name')
                ->searchable(),
                //->hiddenOn(ProductsRelationManager::class),

            Forms\Components\MarkdownEditor::make('bio')
                ->columnSpan('full'),

            Forms\Components\TextInput::make('github_handle')
                ->label('GitHub'),

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
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
