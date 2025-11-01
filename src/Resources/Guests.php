<?php

namespace RanaTuhin\Hostaway\Resources;

use RanaTuhin\Hostaway\Helpers\RequestHelper;

class Guests extends RequestHelper
{
     /**
      * Retrieve all guests.
      *
      * @param  array  $params
      * @return array
      */
     public function getAll(array $params = [])
     {
          return $this->get('guests', $params);
     }

     /**
      * Retrieve a single guest by ID.
      *
      * @param  int  $guestId
      * @return array
      */
     public function getById(int $guestId)
     {
          return $this->get("guests/{$guestId}");
     }

     /**
      * Create a new guest (if allowed by API).
      *
      * @param  array  $data
      * @return array
      */
     public function create(array $data)
     {
          return $this->post('guests', $data);
     }

     /**
      * Update an existing guest.
      *
      * @param  int  $guestId
      * @param  array  $data
      * @return array
      */
     public function update(int $guestId, array $data)
     {
          return $this->put("guests/{$guestId}", $data);
     }

     /**
      * Retrieve all reservations associated with a guest.
      *
      * @param  int  $guestId
      * @param  array  $params
      * @return array
      */
     public function getReservations(int $guestId, array $params = [])
     {
          return $this->get("guests/{$guestId}/reservations", $params);
     }

     /**
      * Send a message to a guest.
      *
      * @param  int  $guestId
      * @param  string  $message
      * @return array
      */
     public function sendMessage(int $guestId, string $message)
     {
          return $this->post("guests/{$guestId}/messages", [
               'message' => $message,
          ]);
     }

     /**
      * Delete a guest (if supported by Hostaway API).
      *
      * @param  int  $guestId
      * @return array
      */
     public function delete(int $guestId)
     {
          return $this->deleteRequest("guests/{$guestId}");
     }
}
