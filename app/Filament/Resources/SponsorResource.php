<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsorResource\Pages;
use App\Filament\Resources\SponsorResource\RelationManagers;
use App\Models\Sponsor;
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
use Illuminate\Support\HtmlString;

class SponsorResource extends Resource
{
    
    protected static ?string $model = Sponsor::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-path';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company')
                    ->label('Company Name'),
                TextInput::make('website')
                    ->url(),
                TextInput::make('category'),
                TextInput::make('no_urut')
                    ->numeric(),
                MarkdownEditor::make('company_profile'),
                FileUpload::make('logo')
                    ->label('Images')
                    ->helperText(new HtmlString('<small style="color:red; "><sup>*</sup><i>Max 2Mb</i></small>'))
                    ->maxSize(2048)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->directory('sponsor'),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('logo'),
                TextColumn::make('website'),
                TextColumn::make('category')
                    ->sortable(),
                TextColumn::make('company_profile')
                    ->markdown()
                    ->limit(50),
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
            'index' => Pages\ListSponsors::route('/'),
            'create' => Pages\CreateSponsor::route('/create'),
            'edit' => Pages\EditSponsor::route('/{record}/edit'),
        ];
    }
}
