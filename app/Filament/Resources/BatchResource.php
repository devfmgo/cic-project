<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Batch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BatchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BatchResource\RelationManagers;

class BatchResource extends Resource
{
    protected static ?string $model = Batch::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'product_name')
                    ->required(),
                Forms\Components\TextInput::make('batch_number')
                    ->label('Batch Number')
                    ->required()
                    ->maxLength(50),
                DatePicker::make('production_date')
                    ->label('Production Date')
                    ->required()
                    ->default(now()),
                DatePicker::make('expire_date')
                    ->label('Expire Date')

                    ->required()
                    ->default(now()->addMonths(12))
                    ->minDate(now()),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('batch_number')
                    ->label('Batch Number')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('product.product_name')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('production_date')
                    ->label('Production Date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('expire_date')
                    ->label('Expire Date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
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
            'index' => Pages\ListBatches::route('/'),
            'create' => Pages\CreateBatch::route('/create'),
            'edit' => Pages\EditBatch::route('/{record}/edit'),
        ];
    }
}
