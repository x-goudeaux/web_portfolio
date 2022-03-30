<?php include 'header.php';?>
<form method="post" enctype="multipart/form-data" action="processPet.php">
      <h3>Add Pet Details</h3>
        <p>Name<br/>
        <!--pet_name will be the key in the $_POST
        super global array --> 
           <input type="text" name="pet_name" />
       </p>
       <p>Pet Type<br/>
      <!--pet_type will be the key in the $_POST
        super global array --> 

           <select name="pet_type" >
              <option>Choose type</option> 
              <option>Dog</option>
              <option>Cat</option>
              <option>Other</option>
           </select>
       </p>           
       <p>Upload Image<br/>
      <!--fileToUpload will be the key in the $_FILES
        super global array --> 
       <input type="file" name="fileToUpload">
       </p> 
          <input type="submit"> 
          <input type="reset" value="Clear Form">      
</form>
</body>
</html>
