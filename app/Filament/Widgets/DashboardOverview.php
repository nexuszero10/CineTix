<?php

namespace App\Filament\Widgets;

use App\Models\Schedule;
use App\Models\Order;
use App\Models\Promotion;
use App\Models\News;
use App\Models\Snack;
use App\Models\User;
use App\Models\Review;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Film yang Tayang', Schedule::where('status', 'showing')->distinct('movie_id')->count('movie_id'))
                ->description('Berdasarkan jadwal yang aktif')
                ->color('success'),

            Stat::make('Jumlah Pembelian', Order::count())
                ->description('Total order yang tercatat')
                ->color('primary'),

            Stat::make('Jumlah Promo', Promotion::count())
                ->description('Total promosi yang tersedia')
                ->color('info'),

            Stat::make('Jumlah Artikel', News::count())
                ->description('Total berita film')
                ->color('warning'),

            Stat::make('Jumlah Snack', Snack::count())
                ->description('Jumlah snack tersedia')
                ->color('danger'),

            Stat::make('Jumlah User', User::count())
                ->description('Total pengguna terdaftar')
                ->color('gray'),

            Stat::make('Jumlah Review', Review::count())
                ->description('Total ulasan pengguna')
                ->color('teal'),
        ];
    }
}
