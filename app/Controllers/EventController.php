<?php

namespace App\Controllers;

use App\Models\EventModel;

class EventController extends BaseController
{
  public function fetchEvents()
  {
    $eventModel = new EventModel();
    $events = $eventModel->findAll();

    return view('pages/calendar', ['events' => $events]);
  }

  public function addEvent()
  {

  }

  public function deleteEvent($id)
  {

  }
}