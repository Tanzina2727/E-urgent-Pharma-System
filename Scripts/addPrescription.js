function validateform(){ }
    function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
      }
      else{
           document.getElementById("nameErr").innerHTML = "";
      //   document.getElementById("name").style.borderColor = "black";
       }
      }

        function checkAge(){
          if (document.getElementById("age").value == "") {
          document.getElementById("ageErr").innerHTML = "age can't be blank";
          document.getElementById("ageErr").style.color = "red";
          // document.getElementById("age").style.borderColor = "red";
        }else if(document.getElementById("age").value < 10){
          document.getElementById("ageErr").style.color = "red";
        document.getElementById("ageErr").innerHTML = "age is less";
        } 
        else{
           document.getElementById("ageErr").innerHTML = "";
      //   document.getElementById("name").style.borderColor = "black";
       }
     }

        function checkMedicine() {
        if (document.getElementById("medicine").value == "") {
          document.getElementById("medicineErr").innerHTML = "Medicine can't be blank";
          document.getElementById("medicineErr").style.color = "red";
          // document.getElementById("medicine").style.borderColor = "red";
      }
        else{
          document.getElementById("medicineErr").innerHTML = "";
      //   document.getElementById("medicine").style.borderColor = "black";
    }
  }