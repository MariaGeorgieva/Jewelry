<?php

namespace App\Http\Controllers;

use App\Image;
use App\Group;
use View;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;


class GroupController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function groupSelect()
//    {
//            $groups = Group::all();
//            $selectedGroup = Group::first()->id;
//
//        return view('groups.groups', compact('groups', 'selectedGroup'));
//    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function groupsShow()
    {
        $groups = DB::table('groups')
            ->orderBy('id')
            ->get();


        return view('groups.createGroups', compact('groups'));
    }

    /**
     * @param Request $request
     * @param Group $group
     * @return \Illuminate\Http\RedirectResponse
     */
    public function groupsCreate(Request $request, Group $group)
    {
        $group->create($request->all());

        return back();
    }

    public function editGroup(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function updateGroup(Request $request, Group $group)
    {
        $group->update($request->all());

        return redirect('/groupsCreate');

    }

    public function deleteGroup(Group $group)
    {

        return view('groups.delete', compact('group'));
    }

    public function destroyGroup(Request $request, Group $group)
    {


        $group->delete($request->all());

        return redirect('/groupsCreate');
    }
}
