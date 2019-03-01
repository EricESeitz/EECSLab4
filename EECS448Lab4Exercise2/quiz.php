<?php

$userAnswer1 = $_POST["q1"];  //correct: September 17, 1991
$userAnswer2 = $_POST["q2"];  //correct: Tux the penguin
$userAnswer3 = $_POST["q3"];  //correct: Linus Torvalds
$userAnswer4 = $_POST["q4"];  //correct: Greg Kroah-Hartman
$userAnswer5 = $_POST["q5"];  //correct: Ministerrat der Deutschen Demokratischen Republik

$question1 = "Question 1: When was the Linux kernel first released?";
$question2 = "Question 2: Who is the Linux mascot?";
$question3 = "Question 3: Who on the original development team is the namesake of Linux?";
$question4 = "Question 4: Who is the current lead maintainer for the Lunix kernel?";
$question5 = "Question 5: What non-US government organization created it's own custom Linux kernel?";


$question1Correct = "September 17, 1991";
$question2Correct = "Tux the penguin";
$question3Correct = "Linus Torvalds";
$question4Correct = "Greg Kroah-Hartman";
$question5Correct = "Ministerrat der Deutschen Demokratischen Republik";

$numCorrect = 0;
for ($i = 1; $i <= 5; $i++)   //compare user answer to correct answer
{
  if (${'userAnswer'.$i} == ${'question'.$i.'Correct'} )     //how to change variable name in loop.
  {
    $numCorrect = $numCorrect + 1;
  }
}

//echo "<string>" . $<variable> . "<string>" form, need period for concatenaton
echo  $question1 . "<br>You answered: " . $userAnswer1 . "<br>Correct answer: " . $question1Correct;
echo "<br><br>";
echo  $question2 . "<br>You answered: " . $userAnswer2 . "<br>Correct answer: " . $question2Correct;
echo "<br><br>";
echo  $question3 . "<br>You answered: " . $userAnswer3 . "<br>Correct answer: " . $question3Correct;
echo "<br><br>";
echo  $question4 . "<br>You answered: " . $userAnswer4 . "<br>Correct answer: " . $question4Correct;
echo "<br><br>";
echo  $question5 . "<br>You answered: " . $userAnswer5 . "<br>Correct answer: " . $question5Correct;
echo "<br><br>";
echo "Total number correct: " . $numCorrect;
echo "<br>";
echo "Percentage: " . ($numCorrect / 5)*100 . "%";

?>
