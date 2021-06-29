<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

use App\Http\Resources\DocumentsResource;
use App\Http\Requests\DocumentsRequest;


class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DocumentsResource::collection(Document::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentsRequest $request)
    {
        $faker = \Faker\Factory::create(1);

        $document = Document::create([
            'title' => $request->input('title'),
            'path' => $faker->url,
            'description' => $request->input('description'),
            'views' => (integer)$request->input('views'),
            'download' => (integer)$request->input('download')
        ]);

        return new DocumentsResource($document);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return new DocumentsResource($document);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentsRequest $request, Document $document)
    {
        $faker = \Faker\Factory::create(1);

        $document->update([
            'title' => $request->input('title'),
            'path' => $faker->url,
            'description' => $request->input('description'),
            'views' => (integer)$request->input('views'),
            'download' => (integer)$request->input('download')
        ]);

        return new DocumentsResource($document);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return response(null, 204);
    }
}
