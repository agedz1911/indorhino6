<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WelcomeMessageResource\Pages;
use App\Filament\Resources\WelcomeMessageResource\RelationManagers;
use App\Models\WelcomeMessage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables\Columns\ImageColumn;

class WelcomeMessageResource extends Resource
{
    use Translatable;

    protected static ?string $model = WelcomeMessage::class;
    protected static ?string $navigationGroup = 'Front End Components';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('title')->required(),
                TextInput::make('no_urut')->numeric(),
                Toggle::make('is_active'),
                FileUpload::make('image')
                    ->directory('welcomeMessage'),
                MarkdownEditor::make('description')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->limit(20),
                TextColumn::make('title')->limit(20),
                ImageColumn::make('image'),
                TextColumn::make('description')->markdown()->limit(250),
                IconColumn::make('is_active')->boolean()
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
        return ['en', 'id'];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWelcomeMessages::route('/'),
            'create' => Pages\CreateWelcomeMessage::route('/create'),
            'edit' => Pages\EditWelcomeMessage::route('/{record}/edit'),
        ];
    }
}
