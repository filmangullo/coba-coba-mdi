<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporateGovernanceController extends Controller
{
    public function boardMembers()
    {
        return view('investor.corporate-governance.board-members');
    }

    public function auditComittee()
    {
        return view('investor.corporate-governance.audit-comittee');
    }
}
