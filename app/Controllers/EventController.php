<?php

namespace App\Controllers;

use App\Models\EventModel;

class EventController extends BaseController
{
  public function fetchEvents()
  {
    $eventModel = new EventModel();
    $eventsData = $eventModel->where('DELETION_DATE', null)->findAll();

    $events = [];

    foreach ($eventsData as $event) {
      $events[] = [
        'id' => $event['PK_ID_EVENT'],
        'title' => $event['TITLE'],
        'start' => $event['START_DATE'],
        'end' => $event['END_DATE'],
        'descriptionEs' => $event['DESCRIPTION_ES'],
        'descriptionEn' => $event['DESCRIPTION_ENG'],
      ];
    }

    return view('pages/calendar', ['events' => $events]);
  }

  public function addEvent()
  {
    $eventModel = new EventModel();

    $id = $this->request->getPost('PK_ID_EVENT');

    $data = [
      'TITLE' => $this->request->getPost('TITLE'),
      'DESCRIPTION_ES' => $this->request->getPost('DESCRIPTION_ES'),
      'DESCRIPTION_ENG' => $this->request->getPost('DESCRIPTION_ENG'),
      'START_DATE' => $this->request->getPost('START_DATE'),
      'END_DATE' => $this->request->getPost('END_DATE')
    ];

    if ($id) {

      $eventModel->update($id, $data);
      $insertedID = $id;
    } else {

      $insertedID = $eventModel->insert($data);
    }

    return $this->response->setJSON(['id' => $insertedID]);
  }

  public function deleteEvent($id)
  {

    $eventModel = new EventModel();
    $eventModel->update($id, ['DELETION_DATE' => date('Y-m-d H:i:s')]);

    return $this->response->setJSON(['status' => 'Event deleted successfully.']);
  }
}