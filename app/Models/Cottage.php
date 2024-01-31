<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Cottage extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'name',
        'description',
        'cottage_or_lodge',
        'status',
        'price_for_rent'
    ];
}