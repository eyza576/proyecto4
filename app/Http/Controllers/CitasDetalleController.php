<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitasDetalleRequest;
use App\Http\Requests\UpdateCitasDetalleRequest;
use App\Repositories\CitasDetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CitasDetalleController extends AppBaseController
{
    /** @var  CitasDetalleRepository */
    private $citasDetalleRepository;

    public function __construct(CitasDetalleRepository $citasDetalleRepo)
    {
        $this->citasDetalleRepository = $citasDetalleRepo;
    }

    /**
     * Display a listing of the CitasDetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citasDetalles = $this->citasDetalleRepository->all();

        return view('citas_detalles.index')
            ->with('citasDetalles', $citasDetalles);
    }

    /**
     * Show the form for creating a new CitasDetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('citas_detalles.create');
    }

    /**
     * Store a newly created CitasDetalle in storage.
     *
     * @param CreateCitasDetalleRequest $request
     *
     * @return Response
     */
    public function store(CreateCitasDetalleRequest $request)
    {
        $input = $request->all();

        $citasDetalle = $this->citasDetalleRepository->create($input);

        Flash::success('Citas Detalle saved successfully.');

        return redirect(route('citasDetalles.index'));
    }

    /**
     * Display the specified CitasDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citasDetalle = $this->citasDetalleRepository->find($id);

        if (empty($citasDetalle)) {
            Flash::error('Citas Detalle not found');

            return redirect(route('citasDetalles.index'));
        }

        return view('citas_detalles.show')->with('citasDetalle', $citasDetalle);
    }

    /**
     * Show the form for editing the specified CitasDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citasDetalle = $this->citasDetalleRepository->find($id);

        if (empty($citasDetalle)) {
            Flash::error('Citas Detalle not found');

            return redirect(route('citasDetalles.index'));
        }

        return view('citas_detalles.edit')->with('citasDetalle', $citasDetalle);
    }

    /**
     * Update the specified CitasDetalle in storage.
     *
     * @param int $id
     * @param UpdateCitasDetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitasDetalleRequest $request)
    {
        $citasDetalle = $this->citasDetalleRepository->find($id);

        if (empty($citasDetalle)) {
            Flash::error('Citas Detalle not found');

            return redirect(route('citasDetalles.index'));
        }

        $citasDetalle = $this->citasDetalleRepository->update($request->all(), $id);

        Flash::success('Citas Detalle updated successfully.');

        return redirect(route('citasDetalles.index'));
    }

    /**
     * Remove the specified CitasDetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citasDetalle = $this->citasDetalleRepository->find($id);

        if (empty($citasDetalle)) {
            Flash::error('Citas Detalle not found');

            return redirect(route('citasDetalles.index'));
        }

        $this->citasDetalleRepository->delete($id);

        Flash::success('Citas Detalle deleted successfully.');

        return redirect(route('citasDetalles.index'));
    }
}
