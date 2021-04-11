

       document.querySelector(".indexlogin").addEventListener('click',function(){
        // Selecting the input element and get its value 
        let inputVal = document.querySelector(".netlify-identity-user").value;
        // Displaying the value
        document.querySelector(".username").innerHTML=inputVal;     
       });