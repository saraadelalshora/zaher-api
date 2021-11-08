<?php

namespace App\Http\Controllers;

use App\About;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\DataTables\AboutDataTable;
use App\Repositories\AboutRepository;
use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Prettus\Validator\Exceptions\ValidatorException;

class AboutController extends Controller
{
     /** @var  AboutRepository */
     private $AboutRepository;

    public function __construct(AboutRepository $adRepo)
    {
        parent::__construct();
        $this->AboutRepository = $adRepo;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('about.create',
            [
              'about'=> About::first()
            ]);
    }


    

    /**
     * Store a newly created About in storage.
     *
     * @param CreateAboutRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutRequest $request)
    {
        $input = $request->except('files');
     
        try {
            if(empty(About::first())){

                $About = $this->AboutRepository->create($input);
            }else{
                $About = $this->AboutRepository->update($input, $request->input('id'));     
            }
          
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.saved_successfully', ['operator' => __('lang.About')]));

        return redirect(route('about.index'));
    }

    /**
     * Display the specified About.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $About = $this->AboutRepository->findWithoutFail($id);

        if (empty($About)) {
            Flash::error('About not found');
            return redirect(route('about.index'));
        }

        return view('about.show')->with('About', $About);
    }

    /**
     * Show the form for editing the specified About.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified About in storage.
     *
     * @param  int              $id
     * @param UpdateAboutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutRequest $request)
    {
       
    }

    /**
     * Remove the specified About from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        
    }

}