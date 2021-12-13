<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\QuickDefinitionsConfiguration;

class GameController extends Controller
{
    public function IndexGame($prev=null){
        $quiz = $this->GenerateQuiz();
        if($quiz){
            $answers = null;
            $correctAnswer = null;
            if($quiz["type"] == "boolean"){
                $answers = array("True", "False");
                if($quiz["correct_answer"] == "True") $correctAnswer = 1;
                else $correctAnswer = 2;
            }
            else if($quiz["type"] == "multiple"){
                $answers = array();
                $cnt = count($quiz["incorrect_answers"]) + 1;
                $rand = rand(0, $cnt-1);
                $mover = 0;
                for($i=0; $i<$cnt; $i++){
                    if($rand == $i) {
                        array_push($answers, $quiz["correct_answer"]);
                        $correctAnswer = $i;
                    }
                    else{
                        array_push($answers, $quiz["incorrect_answers"][$mover]);
                        $mover++;
                    }
                }
            }
            return view('Pages/game', [
                "title"=>"Game!", 
                "isQuiz"=>true,
                "question"=>$quiz["question"],
                "answers"=>$answers,
                "correctAnswer"=>$correctAnswer,
                "prev"=>$prev
            ]);
        }
        return view('Pages/game', ["title"=>"Game!", "isQuiz"=>false]);
    }
    public function handleQuizAnswer(Request $request, $x){
        $ans = $request->all()["opt"];
        if($ans == $x){
            $user = User::find(Auth::user()->id);
            $user->max++;
            $user->credits += 3;
            $user->update();
            return redirect()->to("/game/1");
        }
        else{
            $user = User::find(Auth::user()->id);
            $user->min++;
            $user->credits += 1;
            $user->update();
            return redirect()->to("/game/0");
        }
        
    }
    public static function GenerateQuiz($difficulty = 4){
        try{
            // type either boolean or multiple
            $curl = curl_init();
            $base_url = "https://opentdb.com/api.php?amount=1&encode=base64&category=18";
            if($difficulty == 1) $base_url = $base_url."&difficulty=easy";
            else if($difficulty == 2) $base_url = $base_url."&difficulty=medium";
            else if($difficulty == 3) $base_url = $base_url."&difficulty=hard";
            curl_setopt($curl, CURLOPT_URL, $base_url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl);
            curl_close($curl);
            $output = json_decode($output, true);
            $output = $output["results"][0];
            $output["category"] = base64_decode($output["category"]);
            $output["type"] = base64_decode($output["type"]);
            $output["difficulty"] = base64_decode($output["difficulty"]);
            $output["question"] = base64_decode($output["question"]);
            $output["correct_answer"] = base64_decode($output["correct_answer"]);
            $cnt = count($output["incorrect_answers"]);
            for($i=0; $i<$cnt; $i++){
                $output["incorrect_answers"][$i] = base64_decode($output["incorrect_answers"][$i]);
            }
            return $output;
        }
        catch(Exception $e){
            return null;
        }
    }
    
}
