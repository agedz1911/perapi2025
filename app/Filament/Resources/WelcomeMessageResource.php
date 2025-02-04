<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WelcomeMessageResource\Pages;
use App\Filament\Resources\WelcomeMessageResource\RelationManagers;
use App\Models\WelcomeMessage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
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

class WelcomeMessageResource extends Resource
{
    protected static ?string $model = WelcomeMessage::class;
    protected static ?string $navigationGroup = 'Frond End';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('title'),
                MarkdownEditor::make('description'),
                FileUpload::make('image')
                    ->maxSize(3072)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->directory('welcomeMessage'),
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
                TextColumn::make('no_urut'),
                ImageColumn::make('image'),
                TextColumn::make('name'),
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
            'index' => Pages\ListWelcomeMessages::route('/'),
            'create' => Pages\CreateWelcomeMessage::route('/create'),
            'edit' => Pages\EditWelcomeMessage::route('/{record}/edit'),
        ];
    }
}
