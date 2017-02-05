<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChildRequest;
use App\Http\Requests\UpdateChildRequest;
use App\Repositories\ChildRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ChildController extends AppBaseController
{
    /** @var  ChildRepository */
    private $childRepository;

    public function __construct(ChildRepository $childRepo)
    {
        $this->childRepository = $childRepo;
    }

    /**
     * Display a listing of the Child.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->childRepository->pushCriteria(new RequestCriteria($request));
        $children = $this->childRepository->all();

        return view('children.index')
            ->with('children', $children);
    }

    /**
     * Show the form for creating a new Child.
     *
     * @return Response
     */
    public function create()
    {
        return view('children.create');
    }

    /**
     * Store a newly created Child in storage.
     *
     * @param CreateChildRequest $request
     *
     * @return Response
     */
    public function store(CreateChildRequest $request)
    {
        $input = $request->all();

        $child = $this->childRepository->create($input);

        Flash::success('Child saved successfully.');

        return redirect(route('children.index'));
    }

    /**
     * Display the specified Child.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $child = $this->childRepository->findWithoutFail($id);

        if (empty($child)) {
            Flash::error('Child not found');

            return redirect(route('children.index'));
        }

        return view('children.show')->with('child', $child);
    }

    /**
     * Show the form for editing the specified Child.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $child = $this->childRepository->findWithoutFail($id);

        if (empty($child)) {
            Flash::error('Child not found');

            return redirect(route('children.index'));
        }

        return view('children.edit')->with('child', $child);
    }

    /**
     * Update the specified Child in storage.
     *
     * @param  int              $id
     * @param UpdateChildRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChildRequest $request)
    {
        $child = $this->childRepository->findWithoutFail($id);

        if (empty($child)) {
            Flash::error('Child not found');

            return redirect(route('children.index'));
        }

        $child = $this->childRepository->update($request->all(), $id);

        Flash::success('Child updated successfully.');

        return redirect(route('children.index'));
    }

    /**
     * Remove the specified Child from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $child = $this->childRepository->findWithoutFail($id);

        if (empty($child)) {
            Flash::error('Child not found');

            return redirect(route('children.index'));
        }

        $this->childRepository->delete($id);

        Flash::success('Child deleted successfully.');

        return redirect(route('children.index'));
    }
}
