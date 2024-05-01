<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('group.index', [
            'groups' => $groups
        ]);
    }

    public function create()
    {

        return view('group.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'start_from' => 'string',
            'is_active' => 'boolean'
        ]);

        Group::create($data);

        return redirect()->route('groups.index');
    }

    public function show(Group $group)
    {
        return view('group.show', [
            'group' => $group
        ]);
    }

    public function edit(Group $group)
    {
        return view('group.edit', [
            'group' => $group
        ]);
    }

    public function update(Group $group)
    {
        $data = request()->validate([
            'title' => 'string',
            'start_from' => 'string',
            'is_active' => 'boolean'
        ]);
        $group->update($data);
        return redirect()->route('group.show', $group->id);
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index');
    }


}
