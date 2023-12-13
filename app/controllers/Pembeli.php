<?php

namespace App\Controllers;

use App\Core\Controller;

class Pembeli extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Pembeli();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('pembeli/index', $data);
	}

	public function input()
	{
		$this->dashboard('pembeli/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/pembeli');
	}

	public function edit($id_user)
	{
		$data['row'] = $this->model->edit($id_user);
		$this->dashboard('pembeli/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/pembeli');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/pembeli');
	}
}
