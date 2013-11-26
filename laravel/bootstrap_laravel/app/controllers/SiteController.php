<?php

class SiteController extends BaseController {

	protected $layout = 'layouts.front-end.main';
	
	public function index(){
		$queryResult = Post::all()->toArray();
		//$this->layout->html = print_r($queryResult);
		$this->layout->html = View::make('layouts.front-end.paginas.index', $queryResult)
			->with('postsCarrossel', $queryResult)
			->with('postsGridMaisVistos' , $queryResult);
	}

	
	public function listarTutoriais(){
		$this->layout->html = View::make('layouts.front-end.paginas.listaTutoriais');
	}

	public function sobre(){
		$this->layout->html = View::make('layouts.front-end.paginas.sobre');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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