

    function nameValid() {



              let x = document.getElementsByName("username")[0].value

              let e=document.getElementById("userError")

              let text

              if(x=='')
              {
              text="Please fill the input field";
              }
              else if (!isNaN(x))
              {
              text="Username cannot be just a number";
              }
              else {
              text= '';
              }
              e.innerHTML = text;
}

    function passvalid(){



                let x = document.getElementsByName("password")[0].value

                let e= document.querySelector("#passError")
                let text

                if(x.length < 6)
                {
                text="Password too short";
                }
               
                else {
                text= '';
                }
                e.innerHTML = text;


                
    }

    
  