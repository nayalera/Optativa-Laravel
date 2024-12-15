<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityCategories extends Model
{
    use HasFactory;

    protected $table = 'opportunitycategories';

    protected $guarded = ['id'];
}
