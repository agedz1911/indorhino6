<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AtGlanceResource\Pages;
use App\Filament\Resources\AtGlanceResource\RelationManagers;
use App\Models\AtGlance;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AtGlanceResource extends Resource
{
    protected static ?string $model = AtGlance::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $modelLabel = 'Program at Glance';
    protected static ?string $navigationGroup = 'Front End Components';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // SpatieMediaLibraryFileUpload::make('file_at_glances')
                //     ->collection('at_glances'),
                Select::make('room')
                    ->options([
                        'Skill Lab FK Universitas Mataram' => 'Skill Lab FK Universitas Mataram',
                        'IBS RSUD NTB' => 'IBS RSUD NTB',
                        'Gili Meno' => 'Gili Meno',
                        'Gili Trawangan' => 'Gili Trawangan',
                        'Mandalika' => 'Mandalika',
                        'Pejanggik' => 'Pejanggik',
                        'Rinjani Ballroom' => 'Rinjani Ballroom',
                        'Gili Air' => 'Gili Air',
                        'Sangkareang' => 'Sangkareang',
                        'Melati Ballroom' => 'Melati Ballroom',
                        'PLN' => 'PLN',
                        'Melati 1' => 'Melati 1',
                        'Melati 2' => 'Melati 2',
                    ]),
                Select::make('category_sesi')
                    ->options([
                        'Symposium' => 'Symposium',
                        'Workshop' => 'Workshop',
                        'Rapat' => 'Rapat',
                        'Free Paper' => 'Free Paper',
                        'Accepted Paper' => 'Accepted Paper',
                        'E-Poster' => 'E-Poster',
                        'Video Parade' => 'Video Parade',
                    ])
                    ->native(false),
                DatePicker::make('date')
                    ->native(false),
                TextInput::make('time'),
                TextInput::make('title'),
                Textarea::make('description'),
                Toggle::make('is_active')
                    ->inline(false)
                    ->default(true),
                TextInput::make('no_urut')
                    ->numeric(),
                ColorPicker::make('color'),
                TextInput::make('moderator')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('id'),
                // SpatieMediaLibraryImageColumn::make('file_at_glances')
                //     ->collection('at_glances'),

                TextColumn::make('room'),
                TextColumn::make('date')
                    ->date('d M Y'),
                TextColumn::make('time'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->limit(30),
                ToggleColumn::make('is_active'),
                TextColumn::make('no_urut')
                    ->sortable(),
                ColorColumn::make('color'),
                TextColumn::make('moderator')
                    ->searchable()
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAtGlances::route('/'),
            'create' => Pages\CreateAtGlance::route('/create'),
            'edit' => Pages\EditAtGlance::route('/{record}/edit'),
        ];
    }
}
