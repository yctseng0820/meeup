<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['issue_id', 'name', 'email', 'content'];

    public function issue(){
        return $this->belogsTo('App\Models\Issue');
    }
}
