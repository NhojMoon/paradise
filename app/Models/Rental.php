<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Rental extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'rental_type',
        'customer_id',
        'start_date',
        'end_date',
        'total_price'
    ];
}