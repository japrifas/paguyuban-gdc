<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
        Carbon::parse($this->filters['startDate']) :
        null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
        Carbon::parse($this->filters['endDate']) :
        now();

        $pemasukan = Transaction::pemasukan()->whereBetween('date_transaction',[$startDate,$endDate])->sum('amount');
        $pengeluaran = Transaction::pengeluaran()->whereBetween('date_transaction',[$startDate,$endDate])->sum('amount');

        // ->whereNotIn('transaction')->whereBetween('date_transaction',[$startDate,$endDate]);
        return [
            Stat::make('Total Pemasukan', 'Rp. '.number_format($pemasukan,2)),
            Stat::make('Total Pengeluaran',  'Rp. '.number_format($pengeluaran,2)),
            Stat::make('Selisih', 'Rp. '.number_format($pemasukan - $pengeluaran,2) ),

        ];
    }
}
