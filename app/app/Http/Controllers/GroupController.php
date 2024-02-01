<?php

namespace App\Http\Controllers;

use App\Models\School_year;
use Illuminate\Http\Request;
use App\Repositories\GroupRepository;
use App\Http\Requests\FormGroupRequest;
use App\Models\Group;

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

    public function store(FormGroupRequest $request)
    {
        $this->GroupRepository->create($request->validated());
        return redirect()->route('groupes.index')->with('success', 'Tâche créée avec succès !');

    }
    /**
     * Display the specified resource.
     */
    public function show(Group $groupe)
    {
        return view('Groups.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $groupe)
    {
        $School_years_filter = School_year::all();
        return view('Groups.edit', compact('School_years_filter', 'groupe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormGroupRequest $request, Group $groupe)
    {
        $this->GroupRepository->edit($request->validated(), $groupe);
        return redirect()->route('groupes.index')->with('success', 'Tâche mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $groupe)
    {
        $this->GroupRepository->destroy($groupe);
        return redirect()->route('groupes.index')->with('success', 'Tâche supprimée avec succès !');

    }
}