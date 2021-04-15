<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Pages\Entities\Pages;
use Modules\Pages\Http\Requests\{EditPageRequest, CreatePageRequest};

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $page     = $request->get('page', 1);
        $per_page = $request->get('per_page', 15);

        $pages = Pages::latest()->paginate($per_page, ['*'], 'page', $page)->toArray();

        return view('pages::index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pages::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UpdatePageRequest $request)
    {
        try {
            Pages::create($request->all());

            return redirect()->route('pages.index')->withSuccess(__('Created New Page.'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(__('Page Not Found.'));
        }        
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('pages::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page = Pages::findOrFail($id);
        return view('pages::edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(EditPageRequest $request, $id)
    {
        try {
            $page = Pages::findOrFail($id);

            if(Pages::where('slug', $request->slug)->where('id', '!=', $id)->exists()) {
                return redirect()->back()->withErrors(__('Slug already exists.'));
            }

            $page->update($request->all());

            return redirect()->back()->withSuccess(__('Save Changed.'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(__($e->getMessage()));
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        try {
            Pages::where('id', $id)->delete();

            return toJson(200, 'Deleted item');
        } catch (\Exception $e) {
            return toJson(500, $e->getMessage());
        }
    }
}
