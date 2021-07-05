<?php

namespace App\Policies;

use App\Models\Worker;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkerPolicy
{
    use HandlesAuthorization;

    public function before($worker)
    {
        if ($worker->hasRole('Administrador'))
        {
            return true;
        }
    }

    /**
     * Determine whether the worker can view any models.
     *
     * @param  \App\Models\Worker  $worker
     * @return mixed
     */
    /*public function viewAny(worker $worker)
    {
        //
    }*/

    /**
     * Determine whether the worker can view the model.
     *
     * @param  \App\Models\Worker  $worker
     * @param  \App\Models\Worker  $model
     * @return mixed
     */
    public function view(Worker $authworker, Worker $worker)
    {
        return $authworker->id = $worker->id || $authworker->hasPermissionTo('Ver Lista de Usuarios');
    }

    /**
     * Determine whether the worker can create models.
     *
     * @param  \App\Models\Worker  $worker
     * @return mixed
     */
    public function create(Worker $worker)
    {
        return $worker->hasPermissionTo('Registrar Usuarios');
    }

    /**
     * Determine whether the worker can update the model.
     *
     * @param  \App\Models\Worker  $worker
     * @param  \App\Models\Worker  $model
     * @return mixed
     */
    public function update(Worker $authworker, Worker $worker)
    {
        return $authworker->id = $worker->id || $authworker->hasPermissionTo('Modificar Usuarios');
    }

    /**
     * Determine whether the worker can delete the model.
     *
     * @param  \App\Models\Worker  $worker
     * @param  \App\Models\Worker  $model
     * @return mixed
     */
    public function delete(Worker $authworker, Worker $worker)
    {
        return $authworker->id = $worker->id || $authworker->hasPermissionTo('Eliminar Usuarios');
    }

    /**
     * Determine whether the worker can restore the model.
     *
     * @param  \App\Models\Worker  $worker
     * @param  \App\Models\Worker  $model
     * @return mixed
     */
    /*public function restore(Worker $worker, Worker $model)
    {
        //
    }*/

    /**
     * Determine whether the worker can permanently delete the model.
     *
     * @param  \App\Models\Worker  $worker
     * @param  \App\Models\Worker  $model
     * @return mixed
     */
    /*public function forceDelete(Worker $worker, Worker $model)
    {
        //
    }*/
}
