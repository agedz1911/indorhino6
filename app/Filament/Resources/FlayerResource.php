<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlayerResource\Pages;
use App\Filament\Resources\FlayerResource\RelationManagers;
use App\Models\Flayer;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlayerResource extends Resource
{
    protected static ?string $model = Flayer::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-plus';
    protected static ?string $navigationGroup = 'Front End Components';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                Textarea::make('description'),
                FileUpload::make('flayer')
                    ->maxSize(3072)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->storeFileNamesIn('attachment_file_names')
                    ->directory('Flayer'),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('flayer')
                    ->stacked(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description'),
                ToggleColumn::make('is_active')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListFlayers::route('/'),
            'create' => Pages\CreateFlayer::route('/create'),
            'edit' => Pages\EditFlayer::route('/{record}/edit'),
        ];
    }
}
