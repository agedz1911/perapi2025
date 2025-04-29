<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlyerResource\Pages;
use App\Filament\Resources\FlyerResource\RelationManagers;
use App\Models\Flyer;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlyerResource extends Resource
{
    protected static ?string $model = Flyer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Section';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                Textarea::make('description'),
                FileUpload::make('flyer')
                    ->maxSize(3072)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->storeFileNamesIn('attachment_file_names')
                    ->multiple()
                    ->directory('Flyer'),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('flyer')
                    ->stacked(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description'),
                ToggleColumn::make('is_active')
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
            'index' => Pages\ListFlyers::route('/'),
            'create' => Pages\CreateFlyer::route('/create'),
            'edit' => Pages\EditFlyer::route('/{record}/edit'),
        ];
    }
}
