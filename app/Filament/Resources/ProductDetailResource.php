<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProductDetail;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductDetailResource\Pages;
use App\Filament\Resources\ProductDetailResource\RelationManagers;

class ProductDetailResource extends Resource
{
    protected static ?string $model = ProductDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'product_name')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Price')
                    ->numeric(),
                Forms\Components\TextInput::make('kemasan')
                    ->label('Kemasan')

                    ->maxLength(255),
                Forms\Components\TextInput::make('nomer_registrasi')
                    ->label('Nomer Registrasi')

                    ->maxLength(50),
                Forms\Components\TextInput::make('url_website')
                    ->label('URL Website')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url_video')
                    ->label('URL Video')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('manufaktur')
                    ->label('Manufaktur')

                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->label('Product Image')
                    ->image()
                    ->disk('public')
                    ->directory('product_images')
                    ->visibility('public')
                    ->columnSpan('full'),
                Forms\Components\RichEditor::make('description')
                    ->label('Description')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('indikasi')
                    ->label('Indikasi')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('komposisi')
                    ->label('Komposisi')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('dosis')
                    ->label('Dosis')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('aturan_pakai')
                    ->label('Aturan Pakai')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('perhatian')
                    ->label('Perhatian')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('kontra_indikasi')
                    ->label('Kontra Indikasi')

                    ->maxLength(5000),
                Forms\Components\RichEditor::make('efek_samping')
                    ->label('Efek Samping')

                    ->maxLength(5000),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),

                Tables\Columns\TextColumn::make('product.product_name')
                    ->label('Product Name'),
                // Tables\Columns\TextColumn::make('price')
                //     ->label('Price'),
                // Tables\Columns\TextColumn::make('kemasan')
                //     ->label('Kemasan'),
                Tables\Columns\TextColumn::make('nomer_registrasi')
                    ->label('Nomer Registrasi'),
                // Tables\Columns\TextColumn::make('url_website')
                //     ->label('URL Website'),
                Tables\Columns\TextColumn::make('manufaktur')
                    ->label('Manufaktur'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProductDetails::route('/'),
            'create' => Pages\CreateProductDetail::route('/create'),
            'edit' => Pages\EditProductDetail::route('/{record}/edit'),
        ];
    }
}
