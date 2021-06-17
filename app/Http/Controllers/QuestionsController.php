<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question; 
use App\Choice;
use App\Multiple;
use App\Answer;

class QuestionsController extends Controller
{
    public function index(){
            
            $questions = Question::paginate(10);
        
            return view('questions.index', ['questions' => $questions]);
    }
        
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:250',
        ]);
        $question = new Question;
        $question->user_id = \Auth::id();
        $question->title = $request->title;
        $question->content = $request->content;
        $question->save();
    
        return redirect()->route('chioces.create', [$question->id]);
    }
     public function show($id)
    {
        $user = User::findOrFail($id);
        $questions = $user->questions()->orderBy('created_at', 'desc')->paginate(10);
        return view('questions.index', [
            'user' => $user,
            'questions' => $questions,
        ]);
    }
     public function history()
     {  
        $data = [];
        if (\Auth::check()) { 
        $user = \Auth::user();
        
        $questions = $user->questions()->orderBy('created_at', 'desc')->paginate(20);
        $data = [
                'user' => $user,
                'questions' => $questions,
            ];
     }
     return view('users.show_history',[
            'questions' => $questions,
        ]);
}
    
    public function create(Request $request)
    {
       return view('questions.questions_create');
    }
    public function createpage(Request $request,$id)
    {
        return view('questions.questions_create2',[
            'id' => $id,
        ]);
    }
    public function showpage(){
        $question = Question::findOrFail($question_id);
        return view('answers', [
            'questions' => $questions,
        ]);
    }
    public function storechoices(Request $request, $id){
        $request->validate([
            'question_text' => 'required|max:255',
            'choice_text1' => 'required|max:50',
            'choice_text2' => 'required|max:50',
            'choice_text3' => 'required|max:50',
            'choice_text4' => 'required|max:50',
            'choice_text5' => 'required|max:50',
        ]);
        
        $choice = new Choice;
        $choice->question_text = $request->question_text;
        $choice->question_id=$id;
        $choice->save();
        
        $multiple = new Multiple;
        $multiple->choice_text = $request->choice_text1;
        $multiple->choice_id=$choice->id;
        $multiple->save();
        $multiple = new Multiple;
        $multiple->choice_text = $request->choice_text2;
        $multiple->choice_id=$choice->id;
        $multiple->save();
        $multiple = new Multiple;
        $multiple->choice_text = $request->choice_text3;
        $multiple->choice_id=$choice->id;
        $multiple->save();
        $multiple = new Multiple;
        $multiple->choice_text = $request->choice_text4;
        $multiple->choice_id=$choice->id;
        $multiple->save();
        $multiple = new Multiple;
        $multiple->choice_text = $request->choice_text5;
        $multiple->choice_id=$choice->id;
        $multiple->save();
         if($request->btn=='create'){
         return redirect()->route('chioces.create', ['id' => $id]);
}
         else{
          return redirect()->route('questions.index');
}
        
    }
     public function answer($id){
         $question = Question::findOrFail($id);
         
        
         return view('answers.answers', [
            'question' => $question,
        ]);
     }
     public function storeanswers(Request $request)
     { 
        foreach ($request->multiple_id as $multiple_id){
          $answer = new Answer;
          $multiple=Multiple::findOrFail($multiple_id);
          $answer->user_id = \Auth::id();
          $answer->multiple_id = $multiple_id;
          $answer->choice_id = $multiple->choice->id;
          $answer->question_id =$multiple->choice->question->id;
          $answer->save();
          }
           session()->flash('success', '回答しました。');
           return redirect()->route('questions.index');
     }
      public function showanswers($id)
      {
           $question = Question::findOrFail($id);
          return view ('users.result',[
            'question' => $question,
            'id'=>$id,
        ]);
      }
      
    
     
    
     
    
    
}
