<?php

namespace App\Repository;

use App\Models\Master;
use App\Models\Service;

class MainRepository
{
    public function allMaster()
    {
        return Master::all();
    }

    public function allService()
    {
        return Service::all();
    }

    public function findMasterById($id)
    {
        return Master::where('id', $id)->get();
    }

    public function findMasterByName($name)
    {
        return Master::where('name', $name)->get();
    }

    public function sortByAsc($value)
    {
        return Master::orderBy($value, 'ASC')->get();
    }

    public function sortByDesc($value)
    {
        return Master::orderBy($value, 'DESC')->get();
    }

}
