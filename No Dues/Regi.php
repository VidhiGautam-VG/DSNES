<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Registration Form</title>

   <!---------CSS Links Only---------->
         <link rel="stylesheet" type="text/css" href="assets/css/regi.css">

         <style type="text/css">
           body{
            background: #73C8A9;  /* fallback for old browsers */
            background: linear-gradient(to right, #b6fbff, #83a4d4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           }
            .closebutn {
               margin-top: 10px;
               margin-right: 30px;
               color: black;
               font-weight: bolder;
               float: right;
               font-size: 70px;
               line-height: 40px;
               cursor: pointer;
               transition: 0.3s;
               border-radius: 30%;
               background: white;
            }
   
            .closebutn:hover {
               color: white;
               background: black;
               line-height: 40px;
               border-radius: 30%;
}
         </style>
     <!----------END------->
</head>
<body>
     <div class = "container">
      <div class="closebutn">
            <span  onclick="location.href='slideshow.php';">&times;</span>
      </div><br><br>
        <h1 class= "form-title"> Registration Form </h1>
        <form action="" method="post">
           <div class= "main-user-info">
              <div class= "user-input-box" >
                 <label for= "Name"> Full Name: </label>
                 <input type= "text" id= "Name" name= "Name" placeholder= "Enter Full Name" required />
               </div>
   
               <div class= "user-input-box">
                  <label for= "Father" > Father's Name: </label>
                  <input type= "text" id= "Father" name= "Father" placeholder= "Enter Father's name" required  />
               </div>

               <div class= "user-input-box">
                  <label for= "scholar" > Scholar No: </label>
                  <input type= "text" id= "scholar" name= "scholar" placeholder= "Enter Scholar No" required  />
               </div>

               <div class= "user-input-box">
                  <label for= "enrollment" > Enrollment No: </label>
                  <input type= "text" id= "enrollment" name= "enrollment" placeholder= "Enrollment No" required  />
               </div>

               <div class= "user-input-box">
                  <label for= "course" > Course: </label>
                     <select id= "course" name= "course" required  />
                     <option value="select" >Select Course</option><br>
                     <optgroup label="Graduation">
                        <option value="B.A. (Hons.) English">B.A. (Hons.) English</option>
                        <option value="B.A. (Hons.) Hindi">B.A. (Hons.) Hindi</option>
                        <option value="B.A. (Hons.) History">B.A. (Hons.) History</option>
                        <option value="B.A. Journalism and Mass Communication">B.A. Journalism and Mass Communication</option>
                        <option value="B.A. (Hons.) Music-Vocal">B.A. (Hons.) Music-Vocal</option>
                        <option value="B.A. (Hons.) Psychology">B.A. (Hons.) Psychology</option>
                        <option value="B.A. (Hons.) Sanskrit">B.A. (Hons.) Sanskrit</option>
                        <option value="B.B.A. Tourism & Travel Management">B.B.A. Tourism & Travel Management</option>
                        <option value="B.Sc. Information Technology">B.Sc. Information Technology</option>
                        <option value="B.Sc. Applied Mathematics (Honors)">B.Sc. Applied Mathematics (Honors)</option>
                        <option value="B.Sc. (Hons.) Yogic Science">B.Sc. (Hons.) Yogic Science</option>
                        <option value="B.Voc in 3D Animation & VFX">B.Voc in 3D Animation & VFX</option>
                        <option value="B.C.A. (Bachelor of Computer Application)">B.C.A (Bachelor of Computer Application) </option>
                        <option value="Bachelor of Rural Studies">Bachelor of Rural Studies</option>
                     </optgroup>
                     <optgroup label="Certificate & Diploma">
                        <option value="Certificate in Holistic Health Management">Certificate in Holistic Health Management</option>
                        <option value="Certificate In Yoga And Alternative Therapy">Certificate In Yoga And Alternative Therapy</option>
                        <option value="Certificate in Theology">Certificate in Theology</option>
                        <option value="Diploma in Media Graphics and Video Editing">Diploma in Media Graphics and Video Editing</option> 
                     </optgroup>
                     <optgroup label="Post-Graduation">
                        <option value="M.A. Education">M.A. Education</option>
                       <option value="M.A. / M.Sc. Clinical Psychology">M.A. / M.Sc. Clinical Psychology</option>
                        <option value="M.A. / M.Sc. Human Consciousness and Yogic Science">M.A. / M.Sc. Human Consciousness and Yogic Science</option>
                        <option value="M.A. Hindi">M.A. Hindi</option>
                        <option value="M.A. Hindu Studies">M.A. Hindu Studies</option>
                        <option value="M.A. History and Indian  Culture">M.A. History and Indian  Culture</option>
                        <option value="M.A. Journalism and Mass Communication">M.A. Journalism and Mass Communication</option>
                        <option value="M.A. Music (Tabla and Pakhawaj)">M.A. Music (Tabla and Pakhawaj)</option>
                        <option value="M.A. ~ Music (Vocal)">M.A. ~ Music (Vocal)</option>
                        <option value="M.A. Philosophy">M.A. Philosophy</option>
                        <option value="M.A. Sanskrit">M.A. Sanskrit</option>
                        <option value="M.A. / M.Sc. Yogic Science and Ayurveda ">M.A. / M.Sc. Yogic Science and Ayurveda </option>
                        <option value="M.A. /M.Sc. in Yogic Science and Alternative Therapy">M.A. /M.Sc. in Yogic Science and Alternative Therapy</option>
                        <option value="M.B.A. Tourism & Travel Management">M.B.A. Tourism & Travel Management</option>
                        <option value="MCA">MCA (Master of Computer Application)</option>
                        <option value="MCA (Data Science)">MCA (Data Science)</option>
                        <option value="M.Sc. Applied Medicinal and Aromatic Plant Sciences">M.Sc. Applied Medicinal and Aromatic Plant Sciences</option>
                        <option value="M.Sc. In Yoga Therapy">M.Sc. In Yoga Therapy</option>
                        </optgroup>
                        <optgroup label="PG Diploma">
                           <option value="P.G. Diploma ~ Theology & Psychological Counselling">P.G. Diploma ~ Theology & Psychological Counselling</option>
                           <option value="P.G. Diploma in Human Consciousness, Yoga & Alternative Therapy">P.G. Diploma in Human Consciousness, Yoga & Alternative Therapy</option>
                           <option value="P.G. Diploma in Guidance and Counseling">P.G. Diploma in Guidance and Counseling</option>
                        </optgroup>
                     </select>
               </div>

               <div class= "user-input-box">
                  <label for= "Department" > Department: </label>
                     <select id= "Department" name= "Department" required  />
                        <option value="select" >Select Department</option>
                        <option value="Animation">Department of Animation and Visual Effects</option>
                        <option value="Ayurveda_and_HHM">Department of Ayurveda and Holistic Health</option>
                        <option value="Computer_Science">Department of Computer Science</option><br>
                        <option value="Complementary_and_Alt_Medi">Department of Complementary and Alternative Medicine</option><option value="Education">Department of Education</option>
                        <option value="English">Department of English</option>
                        <option value="EVS">Department of Environmental Science</option>
                        <option value="Hindi">Department of Hindi</option>
                        <option value="History">Department of Indian History and Culture</option>
                        <option value="Music">Department of Indian Classical Music</option>
                        <option value="Journalism">Department of Journalism and Mass Communication</option>
                        <option value="Mathematics">Department of Mathematics</option>
                        <option value="Med_Plants">Department of Medicinal Plants</option>
                        <option value="Psychology">Department of Psychology</option>
                        <option value="Rural_Studies">Department of Rural Studies and Sustainability</option>
                        <option value="Scientific_Spirituality">Department of Scientific Spiritualit</option>
                        <option value="Theology">Department of Theology and Divinity</option>
                        <option value="Tourism_and_Management">Department of Tourism Management</option>
                        <option value="Sanskrit">Department of Vedic Studies and Sanskrit</option>
                        <option value="Yogic_Science">Department of Yogic Sciences and Human Consciousness</option><br>
                     </select>
               </div>

               <div class= "user-input-box">
               <label for="mobile">Mobile No: </label>
                  <input type="tel" name="mobile" id="mobile" placeholder="Enter Mobile No " required />
               </div>

               <div class= "user-input-box">
               <label for="mail">E-mail: </label>
                  <input type="email" name="mail" id="mail" placeholder="Enter E-mail Address " required />
               </div>

               <div class= "user-input-box">
               <label for="password">Password: </label>
                  <input type="password" name="password" id="password" minlength="8" placeholder="Enter Password" required />
               </div>

               <div class= "user-input-box">
               <label for="cpassword">Confirm Password: </label>
                  <input type="password" name="cpassword" id="password" minlength="8" placeholder="Confirm Password" required />
               </div>

               <div class= "user-input-box">      
               <label for="DOB">DOB: </label>
                  <input type="date" name="DOB" id="DOB" placeholder="Enter DOB" required />
               </div>

              <br><br>
               <div class= "form-submit-btn">
                  <input type= "submit" id="submit" name="submit" value= "Register">
               </div>
        </div>
        </form>
     </div>

  </body>
</html>

<?php
include "connection.php" ;
error_reporting(0);
if(isset($_POST["submit"])){
$Name =  $_POST['Name'];
$Father = $_POST['Father'];
$scholar = $_POST['scholar'];
$enrollment = $_POST['enrollment'];
$course = $_POST['course'];
$Department = $_POST['Department'];
$Department = str_replace(" ", "_", $Department);
$mobile = $_POST['mobile'];
$mail = $_POST['mail'];
$password = $_POST ['password'];
$encrypt_pwd = md5($password);
$cpassword = $_POST['cpassword'];
$encrypt_cpwd = md5($cpassword);
$DOB = $_POST['DOB'];

//To check the existing users
$existSql = "Select * from users where scholar = '$scholar' AND enrollment = '$enrollment' AND mail = '$mail' AND mobile = '$mobile'";
$result = mysqli_query($conn,$existSql);
$numExist = mysqli_num_rows($result);
if($numExist > 0){
   echo '<script>alert("You are already registered! Please Login.")</script>';
}
else{
   if(($password == $cpassword) ){
   $sql = "INSERT INTO users (Name, Father, scholar, enrollment, course, Department, mobile, mail, password, cpassword, DOB) VALUES('$Name','$Father','$scholar', '$enrollment', '$course', '$Department', '$mobile', '$mail', '$encrypt_pwd', '$encrypt_cpwd', '$DOB')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
   echo '<script>alert("You are registered. Thank You!.")</script>';
   }
   else{
      echo '<script>alert("Password Do Not Match.")</script>';
   }
}
}
}
?>