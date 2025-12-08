<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductStatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        $totalProducts = Product::count();
        $totalClicks = \App\Models\ProductClick::count();
        $mostClicked = Product::withCount('clicks')->orderBy('clicks_count', 'desc')->first();

        return [
            Stat::make('Total Produk', $totalProducts)
                ->description('Semua produk aktif'),
            Stat::make('Total Klik', $totalClicks)
                ->description('Total semua klik produk'),
            Stat::make('Produk Terpopuler', $mostClicked?->product_name ?? '-')
                ->description(($mostClicked?->clicks_count ?? 0) . ' klik'),
        ];
    }
}
