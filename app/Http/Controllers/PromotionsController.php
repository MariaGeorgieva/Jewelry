<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Section;
use App\Group;
use View;

class PromotionsController extends Controller
{
    public function create()
    {

        return view('sections.master');
    }

    public function show()
    {
        $images = DB::table('images')
            ->orderBy('id')->get();

        $groups = DB::table('groups')
            ->get();
        
        $sections = DB::table('section')
            ->get();
        return view('sections.promo', compact('images', 'groups','sections'));
//        return view('sections.carousel', compact('images', 'groups','sections'));
    }

    public function sectionShow()
    {
        $sections = DB::table('section')
            ->orderBy('id')
            ->get();


        return view('sections.sectionsCreate', compact('sections'));
    }

    public function sectionCreate(Request $request, Section $section)
    {
        $section->create($request->all());

        return back();
    }

    public function editSection(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

    public function updateSection(Request $request, Section $section)
    {
        $section->update($request->all());

        return redirect('/sectionCreate');

    }

    public function deleteSection(Section $section)
    {

        return view('sections.delete', compact('section'));
    }

    public function destroySection(Request $request, Section $section)
    {


        $section->delete($request->all());

        return redirect('/sectionCreate');
    }
    
    public function SelectSectionAndGroups()
    {
        $result = Section::all();
        $resultGroup = Group::all();
        if ($result->isEmpty()) {
            flash('Before upload files, you must have Sections!!!', 'error');
            return redirect('/sectionCreate');
        }
        elseif ($resultGroup->isEmpty()) {
            flash('Before upload files, you must have Groups!!!', 'error');
            return redirect('/groupsCreate');
        } else {
            $sections = Section::all();
            $selectedSection = Section::first()->id;

            $groups = Group::all();
            $selectedGroup = Group::first()->id;
        }
        return view('sections.sectionsGroups', compact('sections', 'selectedSection', 'groups', 'selectedGroup'));
    }


}
