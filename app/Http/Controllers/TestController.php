<?php

namespace App\Http\Controllers;

use App\Services\Test\TestInterfaceService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $baseService; 
    public function __construct(TestInterfaceService $baseService)
    {
        $this->baseService = $baseService;
    }

    public function index()
    {
        // $test = Test::all();

        $test = $this->baseService->all();

        return view('test.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $test = new Test();
        // $test->fill($request->all());
        // $test->save();

        $this->baseService->store($request->all());

        return redirect(route('test.index'))->with(['message' => 'Create success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = $this->baseService->get($id);

        return view('test.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->baseService->delete($id);

        return redirect()->route('test.index')->with(['message' => 'Delete Success']);
    }
}
