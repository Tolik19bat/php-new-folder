
debugger
function name(params) {
  let counter = 5;
let sum = 0;
  for (let i = 0; i < counter + 1; i++) {
    if (i % 2) {
      continue;
      sum = sum + 5;
    }
    sum += counter;
  }
  
}
console.log(sum);