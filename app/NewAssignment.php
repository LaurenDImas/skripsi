<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\BlameableObserver;
use App\Blameable;

class NewAssignment extends Model
{
    use Blameable;
    // test
    protected $fillable = [
    'date', 'project_id', 'application_id','file','user_id','alarm'
    ];
    
    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id', 'id');
    }
    
}
