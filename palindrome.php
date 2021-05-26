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
Output:

On entering the number 23432, we get the following output.

PHP Palindrome number 2
On entering the number 12345, we get the following output.

PHP Palindrome number 3
Next TopicFibonacci Series


? PrevNext ?











Youtube For Videos Join Our Youtube Channel: Join Now
Help Others, Please Share
facebook twitter pinterest

 
Learn Latest Tutorials
SoapUI tutorial
SoapUI

RPA tutorial
RPA

manual testing tutorial
Manual T.

cucumber tutorial
Cucumber

Appium tutorial
Appium

postgresql tutorial
PostgreSQL

Apache Solr Tutorial
Solr

MongoDB tutorial
MongoDB

Gimp Tutorial
Gimp

Verilog Tutorial
Verilog

Teradata Tutorial
Teradata

PhoneGap Tutorial
PhoneGap

Preparation
Aptitude
Aptitude

Logical Reasoning
Reasoning

Verbal Ability
Verbal A.

Interview Questions
Interview

Company Interview Questions
Company

Trending Technologies
Artificial Intelligence Tutorial
AI

AWS Tutorial
AWS

Selenium tutorial
Selenium

Cloud tutorial
Cloud

Hadoop tutorial
Hadoop

ReactJS Tutorial
ReactJS

Data Science Tutorial
D. Science

Angular 7 Tutorial
Angular 7

Blockchain Tutorial
Blockchain

Git Tutorial
Git

Machine Learning Tutorial
ML

DevOps Tutorial
DevOps

B.Tech / MCA
DBMS tutorial
DBMS

Data Structures tutorial
DS

DAA tutorial
DAA

Operating System tutorial
OS

Computer Network tutorial
C. Network

Compiler Design tutorial
Compiler D.

Computer Organization and Architecture
COA

Discrete Mathematics Tutorial
D. Math.

Ethical Hacking Tutorial
E. Hacking

Computer Graphics Tutorial
C. Graphics

Software Engineering Tutorial
Software E.

html tutorial
Web Tech.

Cyber Security tutorial
Cyber Sec.

Automata Tutorial
Automata

C Language tutorial
C

C++ tutorial
C++

Java tutorial
Java

.Net Framework tutorial
.Net

Python tutorial
Python

List of Programs
Programs

Control Systems tutorial
Control S.

Data Mining Tutorial
Data Mining




Advertisement report
ADVERTISEMENT


ADVERTISEMENT




Javatpoint Services
JavaTpoint offers too many high quality services. Mail us on hr@javatpoint.com, to get more information about given services.

Website Designing
Website Development
Java Development
PHP Development
WordPress
Graphic Designing
Logo
Digital Marketing
On Page and Off Page SEO
PPC
Content Development
Corporate Training
Classroom and Online Training
Data Entry
Training For College Campus
JavaTpoint offers college campus training on Core Java, Advance Java, .Net, Android, Hadoop, PHP, Web Technology and Python. Please mail your requirement at hr@javatpoint.com.
Duration: 1 week to 2 week

Like/Subscribe us for latest updates or newsletter RSS Feed Subscribe to Get Email Alerts Facebook Page Twitter Page YouTube Blog Page
LEARN TUTORIALS
Learn Java
Learn Data Structures
Learn C Programming
Learn C++ Tutorial
Learn C# Tutorial
Learn PHP Tutorial
Learn HTML Tutorial
Learn JavaScript Tutorial
Learn jQuery Tutorial
Learn Spring Tutorial
OUR WEBSITES
Javatpoint.com
Hindi100.com
Lyricsia.com
Quoteperson.com
Jobandplacement.com
OUR SERVICES
Website Development

Android Development

Website Designing

Digital Marketing

Summer Training

Industrial Training

College Campus Training

CONTACT
Address: G-13, 2nd Floor, Sec-3

Noida, UP, 201301, India

Contact No: 0120-4256464, 9990449935

Contact Us
Subscribe Us
Privacy Policy
Sitemap

About Me
© Copyright 2011-2018 www.javatpoint.com. All rights reserved. Developed by JavaTpoint.

