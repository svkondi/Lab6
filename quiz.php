<?php 
//access the global array called $_POST to get the values from the text fields 
 



            
            $answer1 = $_POST['question-1-choice'];
            $answer2 = $_POST['question-2-choice'];
            $answer3 = $_POST['question-3-choice'];
            $answer4 = $_POST['question-4-choice'];
            $answer5 = $_POST['question-5-choice'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "1866") { $totalCorrect++; }
            if ($answer2 == "Lawrence") { $totalCorrect++; }
            if ($answer3 == "R.W. Oliver") { $totalCorrect++; }
            if ($answer4 == "1898") { $totalCorrect++; }
            if ($answer5 == "KU") { $totalCorrect++; }
            

            echo "Question 1:  Which year was KU officially opened?". "<br>";
            //echo "\t";    
            echo "Your answer: ". $answer1 . "<br>"; 
            echo "Correct answer: 1866". "<br>";

            echo "<br>";
            echo "Question 2: Which city is University of Kansas located in?". "<br>";
            echo "Your answer: ". $answer2 . "<br>"; 
            echo "Correct answer: Lawrence". "<br>";

            echo "<br>";
            echo "Question 3: Who was the first chancellor of University of Kansas?". "<br>";
            echo "Your answer: ". $answer3 . "<br>"; 
            echo "Correct answer: R.W. Oliver". "<br>";

            echo "<br>";
            echo "Question 4: When year lightning struck the engineering building at KU?". "<br>";
            echo "Your answer: ". $answer4 . "<br>"; 
            echo "Correct answer: 1898". "<br>";

            echo "<br>";
            echo "Question 5: What is the biggest university in Kansas?". "<br>";
            echo "Your answer: ". $answer5 . "<br>"; 
            echo "Correct answer: KU". "<br>";




            echo "<br>";
            $perc = $totalCorrect*20;
            echo "Correct answers: " . $totalCorrect. ", so your score is ". $perc. "%.";
    

 
?> 
