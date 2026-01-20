<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\AtGlance;
use App\Models\Faculty;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Schedule Fix';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('time_speaker')
                    ->maxLength(255),
                Forms\Components\TextInput::make('topic_title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('speaker')
                    ->maxLength(255),
                Select::make('glance_id')
                    ->label('Session Title')
                    ->options(AtGlance::all()->mapWithKeys(function ($session) {
                        return [$session->id => $session->title . ' - ' . \Carbon\Carbon::parse($session->date)->format('d F')];
                    }))
                    ->searchable(),
                Select::make('faculty_id')
                    ->label('Faculty')
                    ->searchable()
                    ->options(Faculty::all()->pluck('name', 'id'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('time_speaker')
                    ->searchable(),
                Tables\Columns\TextColumn::make('topic_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('glance.title')
                    ->label('Session Title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('speaker')
                    ->searchable(),
                Tables\Columns\TextColumn::make('faculty_id')
                    ->label('Faculty')
                    ->getStateUsing(fn(Schedule $record) => $record->faculties ? $record->faculties->name : '-')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
