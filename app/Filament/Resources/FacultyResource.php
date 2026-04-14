<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultyResource\Pages;
use App\Filament\Resources\FacultyResource\RelationManagers;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
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

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;
    protected static ?string $navigationGroup = 'Front End Page';
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        $countries = countries();

        return $form
            ->schema([
                Section::make('Faculty Information')->schema([
                    Select::make('category')
                        ->options([
                            'inapras' => 'inapras',
                            'apras' => 'apras',
                            'both' => 'both',
                        ])
                        ->searchable(),
                    TextInput::make('name'),
                    Select::make('country')
                        ->options(collect($countries)->mapWithKeys(function ($country) {
                            return [$country['name'] => $country['name']];
                        })->all())
                        ->searchable(),
                    FileUpload::make('image')
                        ->maxSize(3072)
                        ->downloadable()
                        ->reorderable()
                        ->panelLayout('grid')
                        ->image()
                        ->imageEditor()
                        ->directory('Faculty'),
                    Textarea::make('description'),
                    TextInput::make('no_urut')
                        ->numeric(),
                    Toggle::make('is_active')
                        ->inline()
                        ->default(true),
                ])->columns(2),
                Repeater::make('abstracts')
                    ->relationship('submit_abstracts')
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('title'),
                                FileUpload::make('abstract')
                                    ->label('Abstract File')
                                    ->preserveFilenames()
                                    ->acceptedFileTypes([
                                        'application/pdf',
                                        'application/msword',
                                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                                    ])
                                    ->maxSize(3072)
                                    ->downloadable()
                                    ->directory('Abstracts'),
                            ])->columns(2)
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image'),
                TextColumn::make('country')
                    ->searchable(),
                TextColumn::make('description'),
                TextColumn::make('submit_abstracts.title')
                    ->label('Abstracts')
                    ->limit(40),
                TextColumn::make('submit_abstracts.abstract')
                    ->label('Abstract Files')
                    ->limit(40),
                TextColumn::make('schedules.topic_title'),
                IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
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
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }
}
