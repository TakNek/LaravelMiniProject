<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected  $guarded=[];

    public function complete($status = true)
    {
       return $this->update(['completed' => $status]);
    }

    public function incomplete()
    {
        return $this->complete(false);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
