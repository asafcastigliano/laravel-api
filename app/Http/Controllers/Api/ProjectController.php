<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $types = Type::all();
        $technologies = Technology::all();

        return response()->json([
            'projects' => $projects,
            'types' => $types,
            'technologies' => $technologies,
        ]);
    }
}