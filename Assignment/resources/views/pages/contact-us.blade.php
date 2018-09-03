<!DOCTYPE html>
	<html>
		<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Contact Us</title>
		</head>
<style>
	body{
		background-image:url(homepage.jpg);
		background-size: 100%;
		}

	h1 {
		background-color: #629E07;
		text-align: center;
		color: white;
		font-family: Bookman;
		}

	p {
		background-color: #FCF477;
		font-family: Verdana;
		font-size: 19.5px;
		opacity: 0.9;

		}

input[type=text], select, textarea {
    width: 98%;
    padding: 12px;
    border: 1px solid #000000;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 8px;
}

input[type=submit] {
    background-color: #534A49 ;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #645E5D;
}

.container {
    border-radius: 20px;
    background-color: #F9C5C5;
    padding: 19px;
	font-family: Trebuchet MS;
}


</style>
				<body>
			<h1>Contact Us</h1>
<p>Your comments and questions are important to us. Please take a minute to fill in the form below so that we can help answer your questions about studying at Australia Institute of Business & Technology. You will receive a response to your enquiry the next business day.</p>
<div class="container">
  <form  id="myForm" method='post'>
    @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." font="Comic Sans MS" required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.. required ">

    <label for="email">Email</label>
     <input type="text" id="email" name="email" placeholder="Your email address.." required >

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." required style="height:95px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        // wait for the DOM to be loaded
        $(function() {
          // bind 'myForm' and provide a simple callback function
          $('#myForm').ajaxForm(function() {
            swal("Good job!", "Form is submitted!", "success");
          });

        });

        var options = {
        target:  '#myform',
        url:     "{{ route('contact.store') }}",
        success: function() {
            swal('Thanks for your comment!');
        }
        };
        // pass options to ajaxForm
        $('#myForm').ajaxForm(options);


      </script>

	</html>
