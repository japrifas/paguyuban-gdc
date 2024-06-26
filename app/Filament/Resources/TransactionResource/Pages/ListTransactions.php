<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Enums\MonthsOfYear;
use App\Filament\Resources\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

//     public function getTabs(): array
// {
//     return [

//         'January' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 01)),
//         'February' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 02)),
//         'March' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 03)),
//         'April' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 04)),
//         'May' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 05)),
//         'June' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 06)),
//         'July' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 07)),
//         'August' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 8)),
//         'September' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 9)),
//         'October' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 10)),
//         'November' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 11)),
//         'December' => Tab::make()
//             ->modifyQueryUsing(fn (Builder $query) => $query->whereMonth('date_transaction', 12)),

//     ];
// }

}
