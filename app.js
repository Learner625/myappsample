

       document.document.getElementsByClassName('indexlogin')[0].addEventListener('click',function(){
        // Selecting the input element and get its value 
        let inputVal = document.document.getElementsByClassName('netlify-identity-user')[0].value;
        // Displaying the value
        document.document.getElementsByClassName('username')[0].innerHTML=inputVal;     
       });