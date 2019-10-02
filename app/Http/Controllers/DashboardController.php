<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompaniesRepository;
use App\Repositories\EvidencesRepository;

class DashboardController extends Controller
{
    protected $usersRepository;
    protected $companiesRepository;
    protected $evidencesRepository;

    public function __construct( 
        CompaniesRepository $companiesRepository,
        EvidencesRepository $evidencesRepository
    )
    {
        $this->companiesRepository = $companiesRepository;
        $this->evidencesRepository = $evidencesRepository;
    }

    public function index()
    {
        $companies = $this->companiesRepository->index();
        $evidences = $this->evidencesRepository->index();

       return view('dashboard.index', compact('companies', 'evidences'));
    }
}
