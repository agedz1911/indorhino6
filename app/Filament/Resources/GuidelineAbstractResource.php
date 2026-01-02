<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuidelineAbstractResource\Pages;
use App\Filament\Resources\GuidelineAbstractResource\RelationManagers;
use App\Models\GuidelineAbstract;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Mail\Markdown;

class GuidelineAbstractResource extends Resource
{
    use Translatable;

    protected static ?string $model = GuidelineAbstract::class;
    protected static ?string $navigationGroup = 'Front End Components';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('no_urut')->numeric(),
                MarkdownEditor::make('description')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description')->markdown()->limit(250),
                TextColumn::make('no_urut')
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
            'index' => Pages\ListGuidelineAbstracts::route('/'),
            'create' => Pages\CreateGuidelineAbstract::route('/create'),
            'edit' => Pages\EditGuidelineAbstract::route('/{record}/edit'),
        ];
    }
}
