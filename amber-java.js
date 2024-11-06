function convert() { 
  let inputValue = 
  document.getElementById("inputValue").value; 
  
  let fromUnit = 
  document.getElementById("fromUnit").value; 
  
  let toUnit = 
  document.getElementById("toUnit").value; 
  
  // Convert the length based on the selected units 
  let result; 
  
  
  if (fromUnit === "Ampere" && toUnit === "kiloampere") { 
      result = inputValue / 1000; 
    } else if (fromUnit === "Ampere" && toUnit === "nanoampere") { 
      result = inputValue *1000000000 ; 
    } else if (fromUnit === "Ampere" && toUnit === "milliampere") { 
      result = inputValue *1000 ; 
    } else if (fromUnit === "Ampere" && toUnit === "gigaampere") { 
      result = inputValue /1000000000; 
    } else if (fromUnit === "Ampere" && toUnit === "megaampere") { 
      result = inputValue /1000000; 
    } else if (fromUnit === "Ampere" && toUnit === "Ampere") { 
      result = 1 * inputValue ; 
    } 

    else if (fromUnit === "kiloampere" && toUnit === "Ampere") { 
      result = inputValue * 1000; 
    } else if (fromUnit === "kiloampere" && toUnit === "nanoampere") { 
      result = inputValue *1000000000000 ; 
    } else if (fromUnit === "kiloampere" && toUnit === "milliampere") { 
      result = inputValue *10000000 ; 
    } else if (fromUnit === "kiloampere" && toUnit === "gigaampere") { 
      result = inputValue /1000000; 
    } else if (fromUnit === "kiloampere" && toUnit === "megaampere") { 
      result = inputValue /1000; 
    } else if (fromUnit === "kiloampere" && toUnit === "kiloampere") { 
      result = 1 * inputValue ; 
    } 
  
      else if (fromUnit === "nanoampere" && toUnit === "Ampere") { 
          result = inputValue /1000000000; 
        } else if (fromUnit === "nanoampere" && toUnit === "milliampere") { 
          result = inputValue /1000000; 
        } else if (fromUnit === "nanoampere" && toUnit === "gigaampere") { 
          result = inputValue /10000000000000000; 
        } else if (fromUnit === "nanoampere" && toUnit === "megaampere") { 
          result = inputValue /10000000000000; 
        } else if (fromUnit === "nanoampere" && toUnit === "kiloampere") { 
          result = inputValue /1000000000000; 
        } else if (fromUnit === "nanoampere" && toUnit === "nanoampere") { 
          result = 1 * inputValue ; 
        } 

       else if (fromUnit === "milliampere" && toUnit === "Ampere") { 
            result = inputValue / 1000; 
          } else if (fromUnit === "milliampere" && toUnit === "nanoampere") { 
            result = inputValue *1000000;
          } else if (fromUnit === "milliampere" && toUnit === "gigaampere") { 
            result = inputValue/ 1000000000000; 
          } else if (fromUnit === "milliampere" && toUnit === "megaampere") { 
            result = inputValue/1000000000; 
          } else if (fromUnit === "milliampere" && toUnit === "kiloampere") { 
            result = inputValue /1000000; 
          } else if (fromUnit === "milliampere" && toUnit === "milliampere") { 
            result = 1 * inputValue ; 
          } 

         else if (fromUnit === "gigaampere" && toUnit === "Ampere") { 
              result = inputValue * 1000000000; 
            } else if (fromUnit === "gigaampere" && toUnit === "kiloampere") { 
              result = inputValue*1000000;  
            } else if (fromUnit === "gigaampere" && toUnit === "megaampere") { 
              result = inputValue / 10000; 
            } else if (fromUnit === "gigaampere" && toUnit === "nanoampere") { 
              result = inputValue *1000000000000000000; 
            } else if (fromUnit === "gigaampere" && toUnit === " milliampere") { 
              result = inputValue *1000000000000; 
            } else if (fromUnit === "gigaampere" && toUnit === "gigaampere") { 
              result = 1 * inputValue ; 
            } 

          else if (fromUnit === "megaampere" && toUnit === "Ampere") { 
                result = inputValue *1000000; 
              } else if (fromUnit === "megaampere" && toUnit === "kiloampere") { 
                result = inputValue /10000; 
              } else if (fromUnit === "megaampere" && toUnit === "nanoampere") { 
                result = inputValue *1000000000000000; 
              } else if (fromUnit === "megaampere" && toUnit === "milliampere") { 
                result = inputValue *1000000000; 
              } else if (fromUnit === "megaampere" && toUnit === "gigaampere") { 
                result = inputValue /1000; 
              } else if (fromUnit === "megaampere" && toUnit === "megaampere") { 
                result = 1 * inputValue ; 
              } 
    
     else { 
      result = inputValue // No conversion needed 
    } 
  
  // Display the result 
  document.getElementById("result").innerHTML = 
  result.toFixed(6); 
  } 