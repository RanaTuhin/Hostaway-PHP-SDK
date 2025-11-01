<?php

namespace RanaTuhin\HostawayPhpSdk\Resources;

use RanaTuhin\HostawayPhpSdk\Helpers\RequestHelper;

class Users extends RequestHelper
{
     /**
      * Get all users.
      *
      * @param  array  $params
      * @return array
      */
     public function getAll(array $params = []): array
     {
          return $this->get('users', $params);
     }

     /**
      * Get a specific user by ID.
      *
      * @param  int|string  $userId
      * @return array
      */
     public function getById($userId): array
     {
          return $this->get("users/{$userId}");
     }

     /**
      * Create a new user.
      *
      * @param  array  $data
      * @return array
      */
     public function create(array $data): array
     {
          return $this->post('users', $data);
     }

     /**
      * Update an existing user.
      *
      * @param  int|string  $userId
      * @param  array  $data
      * @return array
      */
     public function update($userId, array $data): array
     {
          return $this->put("users/{$userId}", $data);
     }

     /**
      * Delete a user.
      *
      * @param  int|string  $userId
      * @return array
      */
     public function delete($userId): array
     {
          return $this->delete("users/{$userId}");
     }
}
