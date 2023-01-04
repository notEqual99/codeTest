const datas = [];

for(var i = 1; i <= 100; i++){
    datas.push(i);
}

let data = datas.map(number => {
    if (number % 3 == 0) {
        return "Fizz";
    }else if(number % 5 == 0){
        return "Buzz";
    }else{
        return number;
    }
});

  let dataString = data.toString();

  console.log(dataString);