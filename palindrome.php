<?php  
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?>  
Output:

PHP Palindrome number 1
Palindrome Number using Form in PHP
Example:

ADVERTISEMENT

We'll show the logic to check whether a number is palindrome or not.

<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
        //get the value from form  
        $num = $_POST['num'];  
        //reversing the number  
        $reverse = strrev($num);  
          
        //checking if the number and reverse is equal  
        if($num == $reverse){  
            echo "The number $num is Palindrome";     
        }else{  
            echo "The number $num is not a Palindrome";   
        }  
}     
      ?>  
