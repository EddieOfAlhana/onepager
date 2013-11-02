<?php

use \dflydev\markdown\MarkdownParser;

class OnepagerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $markdownParser = new MarkdownParser();
        $sirTrevorJson = file_get_contents(storage_path() . '/sirtrevor.json');
        $markdownData = json_decode($sirTrevorJson);
        foreach($markdownData->data as $node) {
            echo $markdownParser->transformMarkdown($node->data->text);
        }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $sirTrevorJson = file_get_contents(storage_path() . '/sirtrevor.json');
		return View::make('onepager/create', ['sirTrevorJson' => $sirTrevorJson]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        file_put_contents(storage_path() . '/sirtrevor.json', Input::get('sirtrevor'));
        return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}