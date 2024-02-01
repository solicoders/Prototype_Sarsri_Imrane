<?php
namespace App\Repositories;

use App\Models\Group;

// use App\Http\Requests\FormGroupRequest;


class GroupRepository extends BaseRepository
{
    public function __construct(Group $Group)
    {
        parent::__construct($Group);
    }

    public function getData()
    {
        return parent::getData()->with('school_year')->paginate(5);
    }

}