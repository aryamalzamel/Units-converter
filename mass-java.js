function convert() { 
  let inputValue = 
  document.getElementById("inputValue").value; 
  
  let fromUnit = 
  document.getElementById("fromUnit").value; 
  
  let toUnit = 
  document.getElementById("toUnit").value; 
  
  // Convert the length based on the selected units 
  let result; 
  
  
  if (fromUnit === "g" && toUnit === "kg") { 
      result = inputValue / 1000; 
    } else if (fromUnit === "g" && toUnit === "tonna") { 
      result = inputValue / 1000000; 
    } else if (fromUnit === "g" && toUnit === "lb") { 
      result = inputValue / 453.6; 
    } else if (fromUnit === "g" && toUnit === "oz") { 
      result = inputValue / 28.35; 
    } else if (fromUnit === "g" && toUnit === "g") { 
      result = 1 * inputValue ; 
    } 
    else if (fromUnit === "kg" && toUnit === "g") { 
      result = inputValue * 1000; 
    } else if (fromUnit === "kg" && toUnit === "tonna") { 
      result = inputValue /1000; 
    } else if (fromUnit === "kg" && toUnit === "lb") { 
      result = inputValue * 2.2046226218; 
    } else if (fromUnit === "kg" && toUnit === "oz") { 
      result = inputValue * 35.27396195; 
    } else if (fromUnit === "kg" && toUnit === "kg") { 
      result = 1 * inputValue ; 
    } 
     else if (fromUnit === "tonna" && toUnit === "g") { 
      result = inputValue *1000000; 
    } else if (fromUnit === "tonna" && toUnit === "kg") { 
      result = inputValue * 1000; 
    } else if (fromUnit === "tonna" && toUnit === "lb") { 
      result = inputValue * 2204.6226218488; 
    } else if (fromUnit === "tonna" && toUnit === "oz") { 
      result = inputValue *35273.96194958 ; 
    }  else if (fromUnit === "tonna" && toUnit === "tonna") { 
      result = 1 * inputValue ; 
    } 
    else if (fromUnit === "lb" && toUnit === "g") { 
      result = inputValue * 453.59237; 
    } else if (fromUnit === "lb" && toUnit === "kg") { 
      result = inputValue * 0.45359237; 
    } else if (fromUnit === "lb" && toUnit === "tonna") { 
      result = inputValue * 0.0004535924 ; 
    } else if (fromUnit === "lb" && toUnit === "oz") { 
      result = inputValue * 16; 
    } else if (fromUnit === "lb" && toUnit === "lb") { 
      result = 1 * inputValue ; 
    } 
     else if (fromUnit === "oz" && toUnit === "g") { 
      result = inputValue * 28.349523125; 
    } else if (fromUnit === "oz" && toUnit === "kg") { 
      result = inputValue * 0.0283495231; 
    } else if (fromUnit === "oz" && toUnit === "tonna") { 
      result = inputValue * 0.0000283495; 
    } else if (fromUnit === "oz" && toUnit === "lb") { 
      result = inputValue * 0.0625; 
    } else if (fromUnit === "oz" && toUnit === "oz") { 
      result = 1 * inputValue ; 
    } 
     else { 
      result = inputValue // No conversion needed 
    } 
  
  // Display the result 
  document.getElementById("result").innerHTML = 
  result.toFixed(6); 
  } 