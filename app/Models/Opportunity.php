<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Opportunity extends Model
{
    use HasFactory;

    protected $table = 'opportunity';

    protected $guarded = ['id'];

    /**
     * Get the opportunityCategoryId associated with the opportunitycategories.
     */
    public function getOpportunityCategoryId()
    {
        $o = OpportunityCategories::findOrFail($this->opportunityCategoryId);
		return !empty($o->id)?$o->name:'no definido';
    }
    public function getOpportunityCategories()
    {
        $o = OpportunityCategories::findOrFail($this->opportunityCategoryId);
		return !empty($o->id)?$o:NULL;
    }
    public function opportunityCategoryId()
    {
        return $this->hasOne(OpportunityCategories::class,'opportunityCategory_id');
    }

    /**
     * Get the applicants associated with the applicants.
     */
    public function category() {
        return $this->belongsTo(OpportunityCategories::class,'opportunityCategory_id');
    }

    public function applicants() {
        return $this->hasMany(Applicants::class);
    }

    public function public_statuses() {
        return $this->belongsTo(PublicStatus::class, 'publicStatus_id');
    }

}
