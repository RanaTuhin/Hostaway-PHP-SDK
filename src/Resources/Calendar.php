<?php

namespace RanaTuhin\Hostaway\Resources;

use RanaTuhin\Hostaway\Helpers\RequestHelper;

class Calendar extends RequestHelper
{
     /**
      * Get calendar data for a specific listing.
      *
      * @param  int  $listingId
      * @param  array  $params  (e.g. ['startDate' => '2025-01-01', 'endDate' => '2025-01-15'])
      * @return array
      */
     public function getListingCalendar(int $listingId, array $params = [])
     {
          return $this->get("calendar/listings/{$listingId}", $params);
     }

     /**
      * Update pricing or availability for specific dates.
      *
      * @param  int  $listingId
      * @param  array  $data  (e.g. ['date' => '2025-01-01', 'price' => 120])
      * @return array
      */
     public function updateDate(int $listingId, array $data)
     {
          return $this->post("calendar/listings/{$listingId}/dates", $data);
     }

     /**
      * Block specific dates for a listing (mark as unavailable).
      *
      * @param  int  $listingId
      * @param  array  $data  (e.g. ['startDate' => '2025-02-10', 'endDate' => '2025-02-15'])
      * @return array
      */
     public function blockDates(int $listingId, array $data)
     {
          return $this->post("calendar/listings/{$listingId}/block", $data);
     }

     /**
      * Unblock previously blocked dates for a listing.
      *
      * @param  int  $listingId
      * @param  array  $data  (e.g. ['startDate' => '2025-02-10', 'endDate' => '2025-02-15'])
      * @return array
      */
     public function unblockDates(int $listingId, array $data)
     {
          return $this->post("calendar/listings/{$listingId}/unblock", $data);
     }

     /**
      * Set multiple days’ pricing in bulk.
      *
      * @param  int  $listingId
      * @param  array  $data  (e.g. ['dates' => [...], 'price' => 150])
      * @return array
      */
     public function bulkUpdate(int $listingId, array $data)
     {
          return $this->post("calendar/listings/{$listingId}/bulk-update", $data);
     }

     /**
      * Sync calendar for a listing (forces refresh with external channels).
      *
      * @param  int  $listingId
      * @return array
      */
     public function sync(int $listingId)
     {
          return $this->post("calendar/listings/{$listingId}/sync");
     }
}
