<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Repository\MainRepository;
use http\Env\Request;

class MainController extends Controller
{
    public $mainRepository;

    public function __construct(MainRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function master()
    {
//        return $this->mainRepository->findByMasterName(1);
    }

    public function showById($id)
    {
        return $this->mainRepository->findMasterById($id);
    }

    public function showByName($name)
    {
        return $this->mainRepository->findMasterByName($name);
    }

    public function sortAsc($value)
    {
        return $this->mainRepository->sortByAsc($value);
    }

    public function sortDesc($value)
    {
        return $this->mainRepository->sortByDesc($value);
    }

}
