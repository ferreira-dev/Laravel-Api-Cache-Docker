<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Module;

class ModuleObserver
{
    /**
     * Handle the Course "creating" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    
    public function creating(Module $module)
    {
        $module->uuid = (string) Str::uuid();
    }
}
