<!DOCTYPE html>
<html>
<head>
	<title>Fees</title>
</head>
<body>

	<form method="post" action="/fees/add" enctype="application/x-www-form-urlencoded" style="text-align: center;">
            {{csrf_field()}}
            <input type="hidden" name="id">           
            
            <input type="text" name="student_id" placeholder="Student ID"><br><br>

            <input type="Date" name="paymentdate" placeholder="Date of Payment" ><br><br>

            <input type="text"  name="amount" placeholder="Amount"><br><br>

            <button type="submit" name="Save"> Save</button> 
    </form>

</body>
</html>