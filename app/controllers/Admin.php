<?php

namespace App\Controllers;

use App\Core\Controller;

class Admin extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Admin();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('admin/index', $data);
	}

	public function input()
	{
		$this->dashboard('admin/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/admin');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('admin/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/admin');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/admin');
	}
}
