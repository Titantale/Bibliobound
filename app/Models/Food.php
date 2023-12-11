<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Category;
Use App\Models\Location;
Use App\Models\User;


class Food extends Model
{
    use HasFactory;

    protected $fillable = ['food_name','image','category_id','location_id','best_before','food_description'];
    protected $primaryKey = 'id';

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function user()
    {
    return $this->belongsTo('App\Models\User', 'user_email', 'email');
    }

}
//

