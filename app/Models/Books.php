<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
###################
# in appServiceProvider
# Model::Ungard 
# replace fillable statment
#########################
    protected $fillable = [
        'id',
        'book_title',
        'book_description', 
        'book_auther',
        'book_image'
    ];



    public function scopeFilter($query, array $filters){
        //sql query filter by tag
//         if($filters['tag'] ?? false){
// $query->where('tags','like','%'.request('tag').'%');
//         }

//sql query filter by search
        if($filters['search'] ?? false){
            $query->where('book_title','like','%'.request('search').'%')
            ->orWhere('book_description','like','%'.request('search').'%')
            ->orWhere('book_author','like','%'.request('search').'%');
                    }
    }




}
