<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class Navigation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('Navigation', function($menu){

            $menu->add('Dashboard', array('route' => 'dashboard'))->data('icon', 'dashboard');
            
            $child = $menu->add('Tasks')->data('icon', 'tasks');
                
                $child->add('Index', array('route' => 'task.index'));
                $child->add('Add', array('route' => 'task.create'));
                
            $child = $menu->add('Workers')->data('icon', 'group');
                
                $child->add('Index', array('route' => 'worker.index'));
                $child->add('Add', array('route' => 'worker.create'));
            
        });
        
        return $next($request);
    }
}
