function convert() { 
  // Retrieve input values 
  let inputValue = 
    document.getElementById("inputValue").value; 

  let fromUnit = 
    document.getElementById("fromUnit").value; 

  let toUnit = 
    document.getElementById("toUnit").value; 

  // Convert the length based on the selected units 
  let result; 

  if (fromUnit === "s"&& toUnit === "m") { 
    result = inputValue / 60; 
  } 
  else if (fromUnit === "s" && toUnit === "s") { 
    result = inputValue *1; 
  }else if (fromUnit === "m" && toUnit === "m") { 
    result = inputValue *1; 
  } else if (fromUnit === "d" && toUnit === "d") { 
    result = inputValue *1; 
  } else if (fromUnit === "h" && toUnit === "h") { 
    result = inputValue *1; 
  }

  else if (fromUnit === "s" && toUnit === "h") { 
    result = inputValue /3600; 
  } else if (fromUnit === "s" && toUnit === "d") { 
    result = inputValue / 86400; 
  } else if (fromUnit === "m" && toUnit === "s") { 
    result = inputValue * 60; 
  } else if (fromUnit === "m" && toUnit === "h") { 
    result = inputValue / 60; 
  } else if (fromUnit === "m" && toUnit === "d") { 
    result = inputValue /1440; 
  } else if (fromUnit === "h" && toUnit === "s") { 
    result = inputValue *3600; 
  } else if (fromUnit === "h" && toUnit === "m") { 
    result = inputValue *60; 
  } else if (fromUnit === "h" && toUnit === "d") { 
    result = inputValue /24; 
  } else if (fromUnit === "d" && toUnit === "s") { 
    result = inputValue *86400; 
  } else if (fromUnit === "d" && toUnit === "m") { 
    result = inputValue * 1440; 
  } else if (fromUnit === "d" && toUnit === "h") { 
    result = inputValue * 24; 
  } else { 
    result = inputValue; // No conversion needed 
  } 

  // Display the result 
  document.getElementById("result").innerHTML = 
    result.toFixed(4); 
} 