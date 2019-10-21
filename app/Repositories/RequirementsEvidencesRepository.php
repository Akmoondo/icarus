<?php

namespace App\Repositories;

use App\Evidence;
use App\Requirement;
use App\RequirementEvidence;

class RequirementsEvidencesRepository {
    
    public function index( $requirement_uuid ){
        $search = RequirementEvidence::where('requirement_uuid', $requirement_uuid)->get();
        $search->load('evidence');
        return $search;
    }

    public function evidencesByRequirementId( $requirement_uuid )
    {
        return RequirementEvidence::where('requirement_uuid', $requirement_uuid)
                ->with('evidence')
                ->get();
    }
}