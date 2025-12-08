<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ObatCategory;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ObatCategoryResource\Pages;
use App\Filament\Resources\ObatCategoryResource\RelationManagers;

class ObatCategoryResource extends Resource
{
    protected static ?string $model = ObatCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('obat_category_name')
                    ->label('Obat Category Name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, $state) => $set('slug', str($state)->slug()))
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->readOnly(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('obat_category_name')
                    ->label('Nama Category Obat'),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListObatCategories::route('/'),
            'create' => Pages\CreateObatCategory::route('/create'),
            'edit' => Pages\EditObatCategory::route('/{record}/edit'),
        ];
    }
}
