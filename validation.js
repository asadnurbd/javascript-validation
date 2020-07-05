var first_name =document.getElementById("first_name");
var last_name =document.getElementById("last_name");
var student_id =document.getElementById("student_id");
var email =document.getElementById("email");
var password =document.getElementById("password");




// form_submit
function form_submit(){
  if (first_name.value=='' ||last_name.value==''||student_id.value==''||email.value==''||password.value=='') {


   if (first_name.value==''){
     first_name.style.background ='red';
     document.getElementById('first_name_message').innerHTML="PLEASE FILL OUT THIS FIELD";

   }
   else {
     if (first_name.value!=''){
       first_name.style.background="green";
       document.getElementById('first_name_message').innerHTML="";

     }
   }

   if (last_name.value==''){
     last_name.style.background ='red';
     document.getElementById('last_name_message').innerHTML="PLEASE FILL OUT THIS FIELD";

   }
   else {
     if (last_name.value!=''){
       last_name.style.background="green";
       document.getElementById('last_name_message').innerHTML="";

     }
   }
   if (student_id.value==''){
     student_id.style.background ='red';
     document.getElementById('student_id_message').innerHTML="PLEASE FILL OUT THIS FIELD";

   }
   else {
     if (student_id.value!=''){
       student_id.style.background="green";
       document.getElementById('student_id_message').innerHTML="";

     }
   }
   if (email.value==''){
     email.style.background="red";
     document.getElementById('email_message').innerHTML="PLEASE FILL OUT THIS FIELD";

   }
   else {
     if (email.value!=''){
       email.style.background="green";
       document.getElementById('email_message').innerHTML="";

     }
   }
   if (password.value==''){
     password.style.background="red";
     document.getElementById('password_message').innerHTML="PLEASE FILL OUT THIS FIELD";

   }
   else {
     if (password.value!=''){
       password.style.background="green";
       document.getElementById('password_message').innerHTML="";

     }
   }

   return false;
    }



}
