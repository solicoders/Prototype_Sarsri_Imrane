<?php

namespace App\Http\Controllers;

use App\Models\School_year;
use Illuminate\Http\Request;
use App\Repositories\GroupRepository;
use App\Http\Requests\FormGroupRequest;

// use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $GroupRepository;
    public function __construct(GroupRepository $GroupRepository)
    {
        $this->GroupRepository = $GroupRepository;
    }

    public function index()
    {
        $School_years_filter = School_year::all();
        $Groups = $this->GroupRepository->getData();
        return view('Groups.index', compact('Groups', 'School_years_filter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $School_years_filter = School_year::all();
        return view('Groups.create', compact('School_years_filter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormGroupRequest $request)
    {
        dd($request);
        // $this->GroupRepository->create($request->validated());
        // return redirect()->route('tasks.index')->with('success', 'Tâche créée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}