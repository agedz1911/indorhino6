<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Filament\Resources\RegistrationResource\RelationManagers;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Registration::class;
    protected static ?string $navigationGroup = 'Front End Components';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category')
                    ->options([
                        'Symposium' => 'Symposium',
                        'Workshop' => 'Workshop',
                    ])
                    ->native(false),
                Select::make('wilayah_reg')
                    ->options([
                        'indonesia' => 'indonesia',
                        'foreign' => 'foreign',
                    ])
                    ->native(false),
                TextInput::make('title'),
                TextInput::make('early_bird_reg')
                    ->numeric(),
                TextInput::make('normal_reg')
                    ->numeric(),
                TextInput::make('onsite_reg')
                    ->numeric(),
                MarkdownEditor::make('description'),
                MarkdownEditor::make('price'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category'),
                TextColumn::make('title'),
                TextColumn::make('description')->limit(70)->markdown(),
                TextColumn::make('price')->limit(70)->markdown(),

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

    // public static function getTranslatableLocales(): array
    // {
    //     return ['en', 'id'];
    // }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }
}
