<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationGroup = 'Filament Shield';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        $countries = countries();
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('First Name')
                    ->required(),
                TextInput::make('last_name'),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->required(fn(Page $livewire) => ($livewire instanceof CreateRecord))
                    ->password()
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->dehydrated(fn($state) => filled($state)),
                Select::make('role')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload(),
                TextInput::make('nik')
                    ->label('NIK')
                    ->numeric(),
                Select::make('type')
                    ->options([
                        'Specialist' => 'Specialist',
                        'Resident' => 'Resident',
                        'General Practitioner' => 'General Practitioner',
                        'Student' => 'Student',
                    ]),
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
                TextColumn::make('name')
                    ->label('First Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name'),
                TextColumn::make('email')
                    ->sortable(),
                TextColumn::make('name_on_certificate'),
                TextColumn::make('institution')
                    ->searchable(),
                TextColumn::make('country')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('city')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone_number')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('roles.name'),
                TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date('d M Y'),
                TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->since(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
