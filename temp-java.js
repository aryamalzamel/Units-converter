function convert() { 
  let inputValue = 
  document.getElementById("inputValue").value; 
  
  let fromUnit = 
  document.getElementById("fromUnit").value; 
  
  let toUnit = 
  document.getElementById("toUnit").value; 
  
  // Convert the length based on the selected units 
  let result; 
  
  if (fromUnit === "kelvin" && toUnit === "c") { 
      result = (inputValue -273.15); 
    } else if (fromUnit === "kelvin" && toUnit === "f") { 
      result =( ((inputValue-273.15)*9/5)+32); 
    } else if (fromUnit === "kelvin" && toUnit === "kelvin") { 
      result = 1 * inputValue ; 
    } 
    else if (fromUnit === "c" && toUnit === "f") { 
      result = ((inputValue *(9/5))+32); 
    } 
    else if (fromUnit === "c" && toUnit === "kelvin") { 
      result = ((inputValue )-1)+274.15;
     } else if (fromUnit === "c" && toUnit === "c") { 
      result = 1 * inputValue ; 
    } 
   else if (fromUnit === "f" && toUnit === "kelvin") { 
      result = ((inputValue -32)/1.8)+273; 
    } else if (fromUnit === "f" && toUnit === "c") { 
      result = ((inputValue -32)/1.8); 
    } else if (fromUnit === "f" && toUnit === "f") { 
      result = 1 * inputValue ; 
    } 
  else { 
      result = inputValue // No conversion needed 
    } 
  
  // Display the result 
  document.getElementById("result").innerHTML = 
  result.toFixed(6); 
  } 