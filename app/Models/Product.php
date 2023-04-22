<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = [''];
    protected $appends = ['PriceDiscount'];

    public function scopeFilter($query)
    {
        if (request()->has('filter')) {
            $filter = request('filter');
            switch ($filter) {
                case "new":
                    $query->latest();
                    break;
                case "old":
                    $query->oldest();
                    break;
                case "low":
                    $query->orderBy('price');
                    break;
                case "high":
                    $query->orderByDesc('price');
                    break;
            }
        }

        return $query;
    }

    public function scopeSearch($query)
    {
        $search = \request('search');
        if (request()->has('search') && trim($search)) {
            $query->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%");
        }

        return $query;
    }

    public function getPriceDiscountAttribute()
    {
        return number_format($this->price - ($this->price / 100) * $this->discount);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
