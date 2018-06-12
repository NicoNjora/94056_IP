<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body>

	<form method="post" action="/students/save" enctype="application/x-www-form-urlencoded" style="text-align: center;">
            {{csrf_field()}}
            <!-- <input type="hidden" name="id"> -->           

            <input type="text"  name="name" placeholder="Name"><br><br>
            
            <input type="Date" name="dob" placeholder="Date of Birth" ><br><br>
            <input type="text" name="address" placeholder="address""><br><br>
            <button type="submit" name="Save"> Save</button> 
    </form>

</body>
</html>