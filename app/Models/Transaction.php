<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'warga_id',
        'date_transaction',
        'amount',
        'note',
        'image'
    ];



    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function warga(): BelongsTo
    {
        return $this->belongsTO(Warga::class);
    }

    public function scopePengeluaran($query)
    {
       return $query->whereHas('category', function ($query) {
            $query->where('pemasukan', false);
        });

    }
    public function scopePemasukan($query)
    {
        return $query->whereHas('category', function ($query) {
            $query->where('pemasukan', true);
        });
    }

    public function scopeHutang()
    {
         $hutang = DB::table('wargas')
                ->select('*')
                ->whereNotIn('id',(function ($query) {
	                        $query->from('transactions')
		                    ->select('warga_id');
                            }))
                            ->get();

return $hutang;


    }
    }

