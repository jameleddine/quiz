@extends('template')
@section('first')


<div style="margin-top:10%; margin-left:20%;">
<li>

    <h3>CSS est un standars de:</h3>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        A) section de style des ordinateurs
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        B) Cascading Style Sheets
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        C) Crazy Solid Shapes
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        D) None of the above
    </div>

</li>
</div>

@stop