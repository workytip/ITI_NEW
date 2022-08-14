function fun1() {  
    var fname= prompt ("please enter your first name");  
    var lname= prompt ("please enter your last name");  
    alert('your full name is: '+fname+' '+lname);
    var age=prompt("please Enter your birth year");
    var nage=2022-age;
    alert(`Welcome ${fname} ${lname} you are ${nage} years old`);

    }  

    function fun2()
    {
        alert('it’s the first release of a calculator that only has a summation feature.');
        var num1= parseInt(prompt ("please enter the first number")); 
        var num2= parseInt(prompt ("please enter the second number"));  
        var sum = parseInt(num1 + num2);
        alert(`${num1} + ${num2} = ${sum}`)
 


    }