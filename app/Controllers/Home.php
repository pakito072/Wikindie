<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\CatsModel;
use App\Models\UserModel;
use App\Models\CatTypesModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data['view_name'] = 'Dashboard';

        $eventModel = new EventModel();
        $catModel = new CatsModel();
        $userModel = new UserModel();
        $catTypesModel = new CatTypesModel();
        $eventsData = $eventModel->where('DELETION_DATE', null)->findAll();

        $catCount = $catModel->countAllResults();
        $userCount = $userModel->countAllResults();
        $enabledUsersCount = $userModel->where('is_disabled', 0)->countAllResults();
        $disabledUsersCount = $userModel->where('is_disabled', 1)->countAllResults();

        // Obtener los tipos de gatos y sus conteos
        $catTypes = $catTypesModel->findAll();
        $catTypeCounts = [];
        foreach ($catTypes as $type) {
            $catTypeCounts[$type['name']] = $catModel->where('cat_type_id', $type['id'])->countAllResults();
        }

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

        return view('index', [
            'events' => $events,
            'catCount' => $catCount,
            'userCount' => $userCount,
            'enabledUsersCount' => $enabledUsersCount,
            'disabledUsersCount' => $disabledUsersCount,
            'catTypeCounts' => $catTypeCounts,
            'view_name' => $data['view_name'],
        ]);
    }
}