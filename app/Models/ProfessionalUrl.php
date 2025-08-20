<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfessionalUrl extends Model
{
    use HasFactory;

    protected $table = 'professional_urls';

    protected $fillable = [
        'user_id',
        'url',
    ];

    protected $casts = [
        'url' => 'string',
    ];

    // Relación inversa con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
