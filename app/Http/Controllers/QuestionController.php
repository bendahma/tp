<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

use App\Models\Traveau ;

class QuestionController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
       //
    }

    
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    
    public function show(Question $question)
    {
        //
    }

    
    public function edit(Question $question)
    {
        //
    }

   
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    
    public function destroy(Question $question)
    {
        //
    }

    public function addQuestion(Traveau $tp){

      return view('admin.question.create',compact('tp')) ;

    }
}
