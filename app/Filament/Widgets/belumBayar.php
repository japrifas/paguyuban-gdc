<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\Warga;
use Filament\Tables\Table;
use App\Models\Transaction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use TextColumn\TextColumnSize;

class belumBayar extends BaseWidget
{
    use InteractsWithPageFilters;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;

        return $table
            ->query(
                Warga::whereDoesntHave('transaction', function (Builder $query ) use($startDate, $endDate) {

                    $query->whereBetween('date_transaction', [$startDate, $endDate]);
                })

            )
            ->columns([
                Tables\Columns\TextColumn::make('blok')
                ->size(TextColumn\TextColumnSize::ExtraSmall),
                Tables\Columns\TextColumn::make('nama'),

            ]);
    }
}
