function convert() { 
  let inputValue = 
  document.getElementById("inputValue").value; 
  
  let fromUnit = 
  document.getElementById("fromUnit").value; 
  
  let toUnit = 
  document.getElementById("toUnit").value; 
  
  // Convert the length based on the selected units 
  let result; 
  
  
  if (fromUnit === "cd" && toUnit === "kcd") { 
      result = inputValue / 1000; 
    } else if (fromUnit === "cd" && toUnit === "mcd") { 
      result = inputValue * 1000 ; 
    } else if (fromUnit === "cd" && toUnit === "lm/sr") { 
      result = 1 * inputValue ; 
    } else if (fromUnit === "cd" && toUnit === "cd") { 
      result = 1 * inputValue ;  }


    else if (fromUnit === "kcd" && toUnit === "cd") { 
      result = inputValue * 1000; 
    } else if (fromUnit === "kcd" && toUnit === "mcd") { 
      result = inputValue * 1000000; 
    } else if (fromUnit === "kcd" && toUnit === "lm/sr") { 
      result = inputValue / 10000; 
    } else if (fromUnit === "kcd" && toUnit === "kcd") { 
      result = 1 * inputValue ; 
    } 
  
      else if (fromUnit === "mcd" && toUnit === "cd") { 
          result = inputValue /1000; 
        } else if (fromUnit === "mcd" && toUnit === "kcd") { 
          result = inputValue /1000000; 
        } else if (fromUnit === "mcd" && toUnit === "lm/sr") { 
          result = inputValue /1000; 
        } else if (fromUnit === "mcd" && toUnit === "mcd") { 
          result = 1 * inputValue ; 
        } 

       else if (fromUnit === "lm/sr" && toUnit === "cd") { 
            result = 1 * inputValue ;  
          } else if (fromUnit === "lm/sr" && toUnit === "kcd") { 
            result = inputValue /1000;
          } else if (fromUnit === "lm/sr" && toUnit === "mcd") { 
            result = inputValue/ 10000; 
          } else if (fromUnit === "lm/sr" && toUnit === "lm/sr") { 
            result = 1 * inputValue ; 
          } 

     else { 
      result = inputValue // No conversion needed 
    } 
  
  // Display the result 
  document.getElementById("result").innerHTML = 
  result.toFixed(6); 
  } 