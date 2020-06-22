<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    // protected $table = 'table_name';
    protected $fillable = [
        'user_id', 'content', 'live', 'post_on'
    ];

    protected $dates = ['post_on', 'deleted_at'];

    // protected $guarded = ['id'];

    public function setLiveAttribute($value)
    {
        $this->attributes['live'] = (boolean)($value);
    }

    public function getShortContentAttribute()
    {
        return substr($this->content, 0, random_int(50,150)).'...';
    }

    //datetime format if failed
    // public function setPostOnAttribute($value)
    // {
    //     $this->attributes['post_on'] = Carbon::parse($value);
    // }

}
