<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myvocab;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    //
    public function page(){
       
        $temp1 = myvocab::inRandomOrder()
        ->limit(1)
        ->get()[0];

        do{
            $temp2 = myvocab::inRandomOrder()
        ->limit(1)
        ->get()[0];
        }
        while($temp2->id === $temp1->id);

        do{
            $temp3 = myvocab::inRandomOrder()
        ->limit(1)
        ->get()[0];
        }
        while($temp3->id === $temp2->id || $temp3->id === $temp1->id);
        do{
            $temp4 = myvocab::inRandomOrder()
        ->limit(1)
        ->get()[0];
        }
        while($temp4->id === $temp3->id || $temp4->id === $temp1->id || $temp4->id === $temp2->id);

        do{
            $temp5 = myvocab::inRandomOrder()
        ->limit(1)
        ->get()[0];
        }
        while($temp5->id === $temp4->id || $temp5->id === $temp3->id || $temp5->id === $temp2->id || $temp5->id === $temp1->id);

        
        $sentence1 = $temp1->sentence;
        $vocab1 = $temp1->vocab;
        
        $sentence2 = $temp2->sentence;
        $vocab2 = $temp2->vocab;

        $sentence3 = $temp3->sentence;
        $vocab3 = $temp3->vocab;

        $sentence4 = $temp4->sentence;
        $vocab4 = $temp4->vocab;

        $sentence5 = $temp5->sentence;
        $vocab5 = $temp5->vocab;
        

        return view('randomVocab',compact('vocab1','vocab2','vocab3','vocab4','vocab5','sentence1','sentence2','sentence3','sentence4','sentence5'));
    }

    public function push(Request $request){
        myvocab::create([
            'vocab' => $request->vocab,
            'sentence' => $request->sentence,
        ]);
        return redirect('/');
    }

    public function delete(Request $request){
        $target = myvocab::where('vocab',$request->vocab);
        $target->delete();
        return redirect('/');
    }
}
