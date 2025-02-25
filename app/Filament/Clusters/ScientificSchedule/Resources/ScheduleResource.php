<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources;

use App\Filament\Clusters\ScientificSchedule;
use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleResource\Pages;
use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleResource\RelationManagers;
use App\Models\Faculty;
use App\Models\Schedule;
use App\Models\ScheduleSession;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static ?string $cluster = ScientificSchedule::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('time_speaker'),
                TextInput::make('topic_title'),
                TextInput::make('speaker'),
                Select::make('sesi_id')
                    ->label('Session Title')
                    ->options(ScheduleSession::all()->mapWithKeys(function ($session) {
                        return [$session->id => $session->title_ses . ' - ' . \Carbon\Carbon::parse($session->date)->format('d F')];
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
                TextColumn::make('time_speaker')
                    ->label('TIme')
                    ->sortable(),
                TextColumn::make('topic_title')
                    ->label('Topics')
                    ->searchable(),
                TextColumn::make('speaker')
                    ->searchable(),
                TextColumn::make('sesi.title_ses')
                    ->searchable()
                    ->sortable()
                    ->description(fn($record) => \Carbon\Carbon::parse($record->sesi->date)->format('d F')),
                TextColumn::make('faculties.name')
                    ->limit(20)
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
