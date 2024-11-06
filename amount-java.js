function convert() { 
  let inputValue = document.getElementById("inputValue").value; 
    
  let fromUnit = document.getElementById("fromUnit").value; 
    
  let toUnit = document.getElementById("toUnit").value; 
    
  let result; 
    
   //mole 
  if (fromUnit === "mole" && toUnit === "kilomole") { 
    result = inputValue * 0.001; 
  } else if (fromUnit === "mole" && toUnit === "nanomole") { 
    result = inputValue *1000000000 ; 
  } else if (fromUnit === "mole" && toUnit === "millimole") { 
    result = inputValue *1000 ; 
  } else if (fromUnit === "mole" && toUnit === "picomole") { 
    result = inputValue *1000000000000; 
  } else if (fromUnit === "mole" && toUnit === "micromole") { 
    result = inputValue *1000000; 
  } else if (fromUnit === "mole" && toUnit === "mole") { 
    result = 1 * inputValue ; 
  } 
  //kilomole
  else if (fromUnit === "kilomole" && toUnit === "mole") { 
    result = inputValue * 1000; 
  } else if (fromUnit === "kilomole" && toUnit === "nanomole") { 
    result = inputValue *1000000000000; 
  } else if (fromUnit === "kilomole" && toUnit === "millimole") { 
    result = inputValue *1000000; 
  } else if (fromUnit === "kilomole" && toUnit === "picomole") { 
    result = inputValue * 1000000000000000; 
  } else if (fromUnit === "kilomole" && toUnit === "micromole") { 
    result = inputValue * 1000000000; 
  } else if (fromUnit === "kilomole" && toUnit === "kilomole") { 
    result = 1 * inputValue ; 
  } 
   //nanomole 
  else if (fromUnit === "nanomole" && toUnit === "mole") { 
    result = inputValue *0.000000001; 
  } else if (fromUnit === "nanomole" && toUnit === "kilomole") { 
    result = inputValue * 0.000000000001; 
  } else if (fromUnit === "nanomole" && toUnit === "millimole") { 
    result = inputValue *0.000001; 
  } else if (fromUnit === "nanomole" && toUnit === "picomole") { 
    result = inputValue * 1000; 
  } else if (fromUnit === "nanomole" && toUnit === "micromole") { 
    result = inputValue * 0.001; 
  } else if (fromUnit === "nanomole" && toUnit === "nanomole") { 
    result = 1 * inputValue ; 
  } 
  //millimole
  else if (fromUnit === "millimole" && toUnit === "mole") { 
    result = inputValue * 0.001; 
  } else if (fromUnit === "millimole" && toUnit === "kilomole") { 
    result = inputValue *0.000001;
  } else if (fromUnit === "millimole" && toUnit === "nanomole") { 
    result = inputValue* 1000000; 
  } else if (fromUnit === "millimole" && toUnit === "picomole") { 
    result = inputValue*1000000000; 
  } else if (fromUnit === "millimole" && toUnit === "micromole"){ 
    result = inputValue *1000; 
  } else if (fromUnit === "millimole" && toUnit === "millimole"){ 
    result = 1 * inputValue ; 
  } 
  //picomole
  else if (fromUnit === "picomole" && toUnit === "mole") { 
    result = inputValue * 0.000000000001; 
  } else if (fromUnit === "picomole" && toUnit === "kilomole") { 
    result = inputValue*0.000000000000001;  
  } else if (fromUnit === "picomole" && toUnit === "nanomole") { 
    result = inputValue * 0.001; 
  } else if (fromUnit === "picomole" && toUnit === "millimole") { 
    result = inputValue *0.000000001; 
  } else if (fromUnit === "picomole" && toUnit === " micromole"){ 
    result = inputValue *0.000001; 
  } else if (fromUnit === "picomole" && toUnit === "picomole") { 
    result = 1 * inputValue ; 
  } 
  //micromole
  else if (fromUnit === "micromole" && toUnit === "mole") { 
    result = inputValue *0.000001; 
  } else if (fromUnit === "micromole" && toUnit === "kilomole") { 
    result = inputValue *0.000000001; 
  } else if (fromUnit === "micromole" && toUnit === "nanomole") { 
    result = inputValue *1000; 
  } else if (fromUnit === "micromole" && toUnit === "millimole"){ 
    result = inputValue *0.001; 
  } else if (fromUnit === "micromole" && toUnit === "picomole") { 
    result = inputValue *1000000; 
  } else if (fromUnit === "micromole" && toUnit === "micromole"){ 
    result = 1 * inputValue ; 
  } 
      
  else { 
    result = inputValue 
  } 
    
  // Display the result 
  document.getElementById("result").innerHTML = result.toFixed(6); 
} 