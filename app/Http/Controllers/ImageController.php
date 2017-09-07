<?php

namespace App\Http\Controllers;

use View;
use DB;
use App\Image;
use App\Group;
use App\Section;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Storage;

class ImageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('files.upload');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function upload(Request $request)
    {

            request()->file('image')->store('images');
            $filename = $request->file('image')->hashName();
            Image::create(array(
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'group_id' => $request->get('group_id'),
                'section_id' => $request->get('section_id'),
                'price' => $request->get('price'),
                'image' => $filename,
            ));


        return redirect('/show');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {

        $images = DB::table('images')
            ->orderBy('id', 'desc')
            ->paginate(4);
        $groups = Group::all();
        $sections=Section::all();

        return view('files.show', compact('images', 'groups','sections'));
    }

    /**
     * @param Image $image
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Image $image)
    {
//        $groups = Group::all();

//        return view('files.edit', compact('image', 'groups'));
        return view('files.edit', compact('image'));
    }

    /**
     * @param Request $request
     * @param Image $image
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Image $image)
    {
        $image->update($request->all());

        return redirect('/show');

    }

    /**
     * @param Image $image
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(Image $image)
    {

        return view('files.delete', compact('image'));
    }

    /**
     * @param Request $request
     * @param Image $image
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request, Image $image)
    {
        if (\File::exists(storage_path('app/images/' . $image->image))) {

            \File::delete(storage_path('app/images/' . $image->image));
            $image->delete($request->all());

        } else {
            dd('File does not exists.');
        }
        return redirect('/show');
    }

}
