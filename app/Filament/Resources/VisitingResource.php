<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitingResource\Pages;
use App\Filament\Resources\VisitingResource\RelationManagers;
use App\Models\Visiting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
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

class VisitingResource extends Resource
{
    use Translatable;

    protected static ?string $model = Visiting::class;
    protected static ?string $navigationGroup = 'Front End Components';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Select::make('category_visit')
                    ->native(false)
                    ->options([
                        'Cultural' => 'Cultural',
                        'Culinary' => 'Culinary',
                    ]),
                TextInput::make('title_visit'),
                FileUpload::make('image')
                    ->label('Images')
                    ->helperText(new HtmlString('<small style="color:red; "><sup>*</sup><i>Max 3Mb</i></small>'))
                    ->maxSize(2048)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->directory('visiting'),
                MarkdownEditor::make('description'),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('category_visit'),
                TextColumn::make('title_visit'),
                TextColumn::make('description')->limit(70)->markdown(),
                IconColumn::make('is_active')->boolean()
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
            'index' => Pages\ListVisitings::route('/'),
            'create' => Pages\CreateVisiting::route('/create'),
            'edit' => Pages\EditVisiting::route('/{record}/edit'),
        ];
    }
}
