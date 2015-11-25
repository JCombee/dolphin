<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.index', [
            'title' => trans('task.title'),
            'name' => 'task',
            'collumns' => trans('task.collumns'),
            'rows' => Task::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = [];
        foreach (User::all() as $user) {
            array_push($users, (object) array('value' => $user->id, 'name' => $user->name));
        }
        $collumns = [
            (object) [
                'element' => 'input',
                'label' => trans('task.collumns.name'),
                'attr' => (object) [
                    'name' => 'name',
                    'type' => 'text'
                ]
            ],
            (object) [
                'element' => 'select',
                'label' => trans('task.collumns.user_id'),
                'attr' => (object) [
                    'name' => 'user_id'
                ],
                'options' => $users
            ]
        ];

        return view('crud.create', [
            'title' => trans('task.title'),
            'name' => 'task',
            'collumns' => $collumns
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->user_id = $request->user_id;
        $task->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
