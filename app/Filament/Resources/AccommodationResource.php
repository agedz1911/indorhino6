<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccommodationResource\Pages;
use App\Filament\Resources\AccommodationResource\RelationManagers;
use App\Models\accommodation;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class AccommodationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Accommodation::class;
    protected static ?string $navigationGroup = 'Front End Components';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('hotel_name')
                    ->required(),
                TextInput::make('distance'),
                TextInput::make('hotel_star')
                    ->numeric(),
                TextInput::make('url')
                    ->url(),
                MarkdownEditor::make('price'),
                FileUpload::make('image')
                    ->label('Images')
                    ->helperText(new HtmlString('<small style="color:red; "><sup>*</sup><i>Max 3Mb</i></small>'))
                    ->required()
                    ->maxSize(3072)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->directory('accommodation'),
                TextInput::make('no_urut')
                    ->numeric(),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('hotel_name'),
                TextColumn::make('price')
                    ->markdown(),
                TextColumn::make('hotel_star')
                    ->sortable(),
                TextColumn::make('distance'),
                IconColumn::make('is_active')
                    ->boolean()
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
        return ['en', 'id', 'ar'];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccommodations::route('/'),
            'create' => Pages\CreateAccommodation::route('/create'),
            'edit' => Pages\EditAccommodation::route('/{record}/edit'),
        ];
    }
}
