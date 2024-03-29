<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TaskResource\Pages;
use App\Filament\Admin\Resources\TaskResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;
use App\Models\Task;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
    

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Group::make()
                ->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->columnSpan('full'),
            Forms\Components\MarkdownEditor::make('info')
                ->columnSpan('full'),
            Forms\Components\Select::make('status')
                ->options([
                    'new' => 'New',
                    'processing' => 'Processing',
                    'done' => 'Done',
                    'cancelled' => 'Cancelled',
                ])
                ->required(),
            Forms\Components\DatePicker::make('begin')
                ->required(),
            Forms\Components\FileUpload::make('attachments')
                ->image()
                ->imageEditor()
                ->multiple()
                ->disk('public')
                ->directory('task')
                ->columnSpan('full'),
            ])
            ->columns(2)
            ->columnSpan(['lg' => fn (?Task $record) => $record === null ? 3 : 2]),

            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label('Created at')
                        ->content(fn (Task $record): ?string => $record->created_at?->diffForHumans()),

                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Last modified at')
                        ->content(fn (Task $record): ?string => $record->updated_at?->diffForHumans())
                    ])
                    ->columnSpan(['lg' => 1])
                    ->hidden(fn (?Task $record) => $record === null),
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
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->description(fn (Task $record) => $record->info, position: 'below'),
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'danger' => 'cancelled',
                    'warning' => 'processing',
                    'success' => 'done',
                ]),

            Tables\Columns\ImageColumn::make('attachments')
                ->searchable()
                ->sortable(),    
            Tables\Columns\TextColumn::make('creator.full_name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('begin')
                ->searchable()
                ->sortable(),
                    
            Tables\Columns\TextColumn::make('created_at')->since()
                ->sortable(),
            Tables\Columns\TextColumn::make('updated_at')
                ->sortable(),
                //
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'done' => 'Done',
                        'new' => 'New',
                        'processing' => 'Processing'
                     ])
                    ->attribute('status'),
                   
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->groups([
                Tables\Grouping\Group::make('created_at')
                    ->label('Order Date')
                    ->date()
                    ->collapsible(),
                Tables\Grouping\Group::make('begin')
                    ->label('Begin Date')
                    ->date()
                    ->collapsible()
            ])
            ;
    }
    
    public static function getRelations(): array
    {
        return [];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }    

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 'new')->count();
    }
}
