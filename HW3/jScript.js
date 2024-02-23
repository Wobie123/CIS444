
function Fibonacci(num){
    if(num == 0 || num == 1)
        return num;

    var num1 = 0;
    var num2 = 1;
    for(var i = 0; i <= num-1;i++){
        var num3 = num1;
        num1 +=num2;
        num2 = num3;
    }
    return num1;
}