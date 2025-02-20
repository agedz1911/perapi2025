<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegInfoResource\Pages;
use App\Filament\Resources\RegInfoResource\RelationManagers;
use App\Models\RegInfo;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
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

class RegInfoResource extends Resource
{
    protected static ?string $model = RegInfo::class;
    protected static ?string $label = 'Registration Information';
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('no_urut')
                    ->integer(),
                MarkdownEditor::make('description'),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_urut'),
                TextColumn::make('title'),
                TextColumn::make('description')
                    ->markdown()
                    ->limit(80),
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
            'index' => Pages\ListRegInfos::route('/'),
            'create' => Pages\CreateRegInfo::route('/create'),
            'edit' => Pages\EditRegInfo::route('/{record}/edit'),
        ];
    }
}
