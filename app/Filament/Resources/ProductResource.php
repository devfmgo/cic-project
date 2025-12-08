<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, $state) => $set('slug', str($state)->slug()))
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->readOnly(),
                Forms\Components\TextInput::make('product_code')
                    ->label('Product Code')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Select::make('product_category_id')
                    ->label('Product Category')
                    ->relationship('productCategory', 'product_category_name')
                    ->required(),
                Forms\Components\Select::make('obat_category_id')
                    ->label('Obat Category')
                    ->relationship('obatCategory', 'obat_category_name')
                    ->required(),
                Forms\Components\Select::make('uom_id')
                    ->label('Unit of Measure')
                    ->relationship('uom', 'uom_name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_name')
                    ->label('Nama Produk'),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug'),
                Tables\Columns\TextColumn::make('product_code')
                    ->label('Product Code')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('productCategory.product_category_name')
                    ->label('Product Category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('obatCategory.obat_category_name')
                    ->label('Obat Category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
