<?php

namespace App\Http\Controllers;

use App\Transformers\UploadTransformer;
use App\Upload;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UploadsController extends ApiController
{
    protected $records;

    public function __construct(Upload $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, UploadTransformer $uploadTransformer)
    {
        // show all
        $records = Upload::all();
        $collection = new Collection($records, $uploadTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Upload was deleted');
    }

    public function show($id, Manager $fractal, UploadTransformer $uploadTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $uploadTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Upload::create(Input::all());
        return $this->respondCreated('Upload was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Upload::create(Input::all());
            return $this->respondCreated('Upload was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Upload was created');
    }
}