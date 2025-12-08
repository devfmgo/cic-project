<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class TopProductTable extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Top 5 Produk Berdasarkan Klik';

    // Pastikan signature ini sesuai: protected function getTableQuery(): Builder
    protected function getTableQuery(): Builder
    {
        return Product::query()
            ->withCount('clicks')
            ->orderByDesc('clicks_count')
            ->take(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('product_name')
                ->label('Nama Produk')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('clicks_count')
                ->label('Jumlah Klik')
                ->sortable()
                ->alignRight(),
        ];
    }
}
