<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Radio;
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

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        $countries = countries();
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Last Name')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('first_name'),
                TextInput::make('nik')
                    ->label('NIK')
                    ->numeric(),
                Radio::make('title')
                    ->options([
                        'Prof.' => 'Prof.',
                        'Dr.' => 'Dr.',
                        'dr.' => 'dr.',
                        'MD.' => 'MD.',
                        'Mr.' => 'Mr.',
                        'Ms.' => 'Ms.',
                        'Mrs.' => 'Mrs.',
                    ])
                    ->inline()
                    ->inlineLabel(false),
                TextInput::make('title_specialist'),
                TextInput::make('name_on_certificate'),
                TextInput::make('institution'),
                TextInput::make('phone_number')
                    ->tel(),
                Select::make('country')
                    ->options(collect($countries)->mapWithKeys(function ($country) {
                        return [$country['name'] => $country['name']];
                    })->all())
                    ->searchable(),
                Textarea::make('address'),
                TextInput::make('province'),
                TextInput::make('city'),
                TextInput::make('postal_code')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('Full Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name_on_certificate'),
                TextColumn::make('institution')
                ->searchable(),
                TextColumn::make('address'),
                TextColumn::make('country')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('city')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone_number'),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
