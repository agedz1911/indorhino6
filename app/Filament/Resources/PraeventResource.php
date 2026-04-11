<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PraeventResource\Pages;
use App\Filament\Resources\PraeventResource\RelationManagers;
use App\Models\Praevent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PraeventResource extends Resource
{
    use Translatable;

    protected static ?string $model = Praevent::class;
    protected static ?string $navigationGroup = 'Front End Components';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title'),
                FileUpload::make('image')
                    ->maxSize(3072)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->storeFileNamesIn('attachment_file_names')
                    ->directory('Praevent'),
                TextInput::make('no_urut')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
                MarkdownEditor::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('description')->limit(50),
                ToggleColumn::make('is_active')->inline(),
                ImageColumn::make('image')
                    ->stacked()
                    ->square(),
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

    public static function getTranslatableLocales(): array
    {
        return ['en', 'id'];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPraevents::route('/'),
            'create' => Pages\CreatePraevent::route('/create'),
            'edit' => Pages\EditPraevent::route('/{record}/edit'),
        ];
    }
}
