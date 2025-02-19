<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccommodationResource\Pages;
use App\Filament\Resources\AccommodationResource\RelationManagers;
use App\Models\Accommodation;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class AccommodationResource extends Resource
{
    protected static ?string $model = Accommodation::class;
    protected static ?string $navigationGroup = 'Front End Page';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('hotel_name'),
                TextInput::make('distance'),
                TextInput::make('direction')
                    ->url()
                    ->label('Direction URL'),
                TextInput::make('hotel_star')
                    ->numeric(),
                TextInput::make('idr_price')
                    ->numeric()
                    ->inputMode('decimal'),
                TextInput::make('usd_price')
                    ->numeric()
                    ->inputMode('decimal'),
                TextInput::make('url')
                    ->url(),
                TextInput::make('tag'),
                FileUpload::make('image')
                    ->label('Images')
                    ->helperText(new HtmlString('<small style="color:red; "><sup>*</sup><i>Max 3Mb</i></small>'))
                    ->required()
                    ->maxSize(2048)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->directory('accommodation'),
                TextInput::make('no_urut')
                    ->numeric(),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hotel_name')
                    ->description(fn(Accommodation $record): string => 'Rating: ' .  $record->hotel_star)
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('distance'),
                TextColumn::make('idr_price')
                    ->sortable()
                    ->money('IDR')
                    ->label('Price'),
                TextColumn::make('usd_price')
                    ->sortable()
                    ->money('USD')
                    ->label('Price'),
                IconColumn::make('is_active')
                    ->boolean(),

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
            'index' => Pages\ListAccommodations::route('/'),
            'create' => Pages\CreateAccommodation::route('/create'),
            'edit' => Pages\EditAccommodation::route('/{record}/edit'),
        ];
    }
}
