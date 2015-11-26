<?php
namespace Laraprego\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Auth;
use Laraprego\Task;
use Laraprego\Http\Requests;
use Laraprego\Http\Controllers\Controller;
 
class ProjectTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function postNewTask(Request $request, $id, Task $task)
    {
        $this->validate($request, [
          'task_name' => 'required|min:5',
        ]);
 
        $task->task_name = $request->input('task_name');
        $task->project_id = $id;
 
        $task->save();
 
        return redirect()->back()->with('info', 'Task created successfully');
    }

        /**
     *  Get just one task for a particular Project
     * @param  [type] $projectId [description]
     * @param  [type] $taskId    [description]
     * @return [type]            [description]
     */
    public function getOneProjectTask($projectId, $taskId)
    {
        $task = Task::where('project_id', $projectId)
                      ->where('id', $taskId)
                      ->first();
        return view('tasks.edit')->withTask($task)->with('projectId', $projectId);
    }
}