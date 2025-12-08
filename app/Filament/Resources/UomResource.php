<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UomResource\Pages;
use App\Filament\Resources\UomResource\RelationManagers;
use App\Models\Uom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UomResource extends Resource
{
    protected static ?string $model = Uom::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('uom_name')
                    ->label('UOM Name')
                    ->required()
                    ->maxLength(255)
                    ->unique(Uom::class, 'uom_name', ignoreRecord: true)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('uom_code')
                    ->label('UOM Code')
                    ->required()
                    ->maxLength(50)
                    ->unique(Uom::class, 'uom_code', ignoreRecord: true)
                    ->columnSpanFull(),
                Forms\Components\Select::make('uom_type')
                    ->label('UOM Type')
                    ->options([
                        'unit' => 'Unit',
                        'volume' => 'Volume',
                        'weight' => 'Weight',
                        'packaging' => 'Packaging',
                    ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('uom_name')
                    ->label('UOM Name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('uom_code')
                    ->label('UOM Code')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('uom_type')
                    ->label('UOM Type')
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
            'index' => Pages\ListUoms::route('/'),
            'create' => Pages\CreateUom::route('/create'),
            'edit' => Pages\EditUom::route('/{record}/edit'),
        ];
    }
}
