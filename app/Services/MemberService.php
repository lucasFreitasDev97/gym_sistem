<?php

namespace App\Services;

use App\Models\Member;

class MemberService
{
    public function getAllMembers()
    {
        return Member::all();
    }
}
