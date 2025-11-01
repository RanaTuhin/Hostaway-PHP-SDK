<?php

namespace RanaTuhin\Hostaway\Resources;

use RanaTuhin\Hostaway\Helpers\RequestHelper;

class Tasks extends RequestHelper
{
     /**
      * Retrieve all tasks.
      *
      * @param  array  $params
      * @return array
      */
     public function getAll(array $params = [])
     {
          return $this->get('tasks', $params);
     }

     /**
      * Retrieve a single task by ID.
      *
      * @param  int  $taskId
      * @return array
      */
     public function getById(int $taskId)
     {
          return $this->get("tasks/{$taskId}");
     }

     /**
      * Create a new task.
      *
      * @param  array  $data
      * @return array
      */
     public function create(array $data)
     {
          return $this->post('tasks', $data);
     }

     /**
      * Update an existing task.
      *
      * @param  int  $taskId
      * @param  array  $data
      * @return array
      */
     public function update(int $taskId, array $data)
     {
          return $this->put("tasks/{$taskId}", $data);
     }

     /**
      * Mark a task as completed.
      *
      * @param  int  $taskId
      * @return array
      */
     public function markAsCompleted(int $taskId)
     {
          return $this->post("tasks/{$taskId}/complete");
     }

     /**
      * Assign a task to a user or staff member.
      *
      * @param  int  $taskId
      * @param  int  $userId
      * @return array
      */
     public function assignToUser(int $taskId, int $userId)
     {
          return $this->post("tasks/{$taskId}/assign", [
               'userId' => $userId,
          ]);
     }

     /**
      * Delete a task.
      *
      * @param  int  $taskId
      * @return array
      */
     public function delete(int $taskId)
     {
          return $this->deleteRequest("tasks/{$taskId}");
     }
}
