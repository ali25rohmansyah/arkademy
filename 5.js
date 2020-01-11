let sum = (num) => {
    let numbers = Array.from({ length: num }, () => Math.floor(Math.random() * 40));
    let sum = numbers.reduce((a, b) => a + b, 0);
    return "array : " + numbers + "\n" + "sum : " + sum
}

console.log(sum(4))