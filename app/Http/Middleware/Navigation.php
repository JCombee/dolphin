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

            $menu->add(trans('dashboard.title'), array('route' => 'dashboard'))->data('icon', 'dashboard');
            
            $child = $menu->add(trans('task.title'))->data('icon', 'tasks');
                
                $child->add(trans('task.overview'), array('route' => 'task.index'));
                $child->add(trans('task.create'), array('route' => 'task.create'));
                
            $child = $menu->add(trans('employee.title'))->data('icon', 'group');
                
                $child->add(trans('employee.overview'), array('route' => 'employee.index'));
                $child->add(trans('employee.create'), array('route' => 'employee.create'));
            
        });
        
        return $next($request);
    }
}
