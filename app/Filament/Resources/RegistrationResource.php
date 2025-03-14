<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Filament\Resources\RegistrationResource\RelationManagers;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationGroup = 'Front End Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_reg')
                    ->options([
                        'Symposium' => 'Symposium',
                        'Live Surgery' => 'Live Surgery',
                        'CADAVERIC DISSECTION COURSE' => 'CADAVERIC DISSECTION COURSE',
                        'MASTER COURSES' => 'MASTER COURSES',
                        'INSTRUCTIONAL COURSES' => 'INSTRUCTIONAL COURSES',
                        'PACKAGE REGISTRATION: PLASTIC SURGEON' => 'PACKAGE REGISTRATION: PLASTIC SURGEON',
                        'PACKAGE REGISTRATION: OTHER SPECIALIST' => 'PACKAGE REGISTRATION: OTHER SPECIALIST',
                        'PACKAGE REGISTRATION: GENERAL PRACTIONER (GP)' => 'PACKAGE REGISTRATION: GENERAL PRACTIONER (GP)',
                        'PACKAGE REGISTRATION: RESIDENT' => 'PACKAGE REGISTRATION: RESIDENT',
                        'Master Class' => 'Master Class',
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
                Toggle::make('is_Active')
                    ->default(true)
                    ->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category_reg'),
                TextColumn::make('wilayah_reg'),
                TextColumn::make('title'),
                TextColumn::make('early_bird_reg')
                    ->numeric(),
                TextColumn::make('normal_reg')
                    ->numeric(),
                IconColumn::make('is_Active')
                    ->boolean()
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
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }
}
