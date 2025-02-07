<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImportantDateResource\Pages;
use App\Filament\Resources\ImportantDateResource\RelationManagers;
use App\Models\ImportantDate;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImportantDateResource extends Resource
{
    protected static ?string $model = ImportantDate::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                DatePicker::make('date')
                    ->native(false),
                DatePicker::make('date_end')
                    ->native(false),
                TextInput::make('no_urut')
                    ->numeric(),
                Toggle::make('is_active')
                    ->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('date')
                    ->date(),
                TextColumn::make('date_end')
                    ->date(),
                TextColumn::make('no_urut'),
                IconColumn::make('is_active')
                    ->boolean()
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
            'index' => Pages\ListImportantDates::route('/'),
            'create' => Pages\CreateImportantDate::route('/create'),
            'edit' => Pages\EditImportantDate::route('/{record}/edit'),
        ];
    }
}
