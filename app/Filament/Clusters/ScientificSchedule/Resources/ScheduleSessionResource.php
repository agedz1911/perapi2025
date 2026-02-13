<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources;

use App\Filament\Clusters\ScientificSchedule;
use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource\Pages;
use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource\RelationManagers;
use App\Models\ScheduleSession;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleSessionResource extends Resource
{
    protected static ?string $model = ScheduleSession::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $label = 'Category Session';

    protected static ?string $cluster = ScientificSchedule::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_sesi')
                    ->options([
                        'Symposium' => 'Symposium',
                        'Workshop' => 'Workshop',
                        'Master Class' => 'Master Class',
                        'Free Paper' => 'Free Paper',
                        'Research Proposal' => 'Research Proposal',
                        'E-Poster' => 'E-Poster',
                        'Video Parade' => 'Video Parade',
                    ])
                    ->native(false),
                TextInput::make('title_ses')
                    ->label('Session Title'),
                DatePicker::make('date')
                    ->native(false),
                TextInput::make('time'),
                Select::make('room')
                    ->options([
                        'Pecatu 1&2' => 'Pecatu 1&2',
                        'Pecatu 3&5' => 'Pecatu 3&5',
                        'Mengwi 1&2' => 'Mengwi 1&2',
                        'Mengwi 3&5' => 'Mengwi 3&5',
                        'Mengwi 6&7' => 'Mengwi 6&7',
                        'Mengwi 6' => 'Mengwi 6',
                        'Mengwi 7' => 'Mengwi 7',
                        'Mengwi 8' => 'Mengwi 8',
                        'Legian 1' => 'Legian 1',
                        'Legian 2' => 'Legian 2',
                        'Legian 3' => 'Legian 3',
                        'Legian 5' => 'Legian 5',
                        'Legian 6' => 'Legian 6',
                        'Legian 7' => 'Legian 7',
                        'DAPS CLINIC' => 'DAPS CLINIC',
                        'Bali International Hospital' => 'Bali International Hospital',
                        'room 1' => 'room 1',
                        'room 2' => 'room 2',
                        'room 3' => 'room 3',
                    ])
                    ->native(false),
                TextInput::make('moderator'),
                Textarea::make('panelist'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('room')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title_ses')
                    ->searchable()
                    ->label('Session Title'),
                TextColumn::make('schedules.speaker'),
                TextColumn::make('date')
                    ->sortable()
                    ->date('d M Y'),
                TextColumn::make('category_sesi')
                    ->searchable()
                    ->sortable()
                    ->label('Category')
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
            'index' => Pages\ListScheduleSessions::route('/'),
            'create' => Pages\CreateScheduleSession::route('/create'),
            'edit' => Pages\EditScheduleSession::route('/{record}/edit'),
        ];
    }
}
