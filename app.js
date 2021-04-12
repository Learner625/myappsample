
function n1(){
       document.querySelector('.indexlogin').addEventListener('click',function(){
        // Selecting the input element and get its value 
        const inputVal = document.querySelector('.netlify-identity-user').value;
        // Displaying the value
        window.location.assign("login.html");

        document.querySelector('.username').innerHTML=inputVal;     
       });
}