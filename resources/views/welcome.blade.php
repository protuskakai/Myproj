<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY CURRICULUM VITAE</title>
    <link href="./css/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

	<style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
       
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
		.modal
		{
		   width: 500px;
		   height: 500px;
		   position: relative;
		   left: 50%;
		   top: 50%; 
		   margin-left: -150px;
		   margin-top: -150px;
        }
		.peer{
			border: 1pxsolid #999;
		}
		
    </style>	

</head>

<body>
    <div  class="bg-white">
        <header>
            <div class="container px-6 py-3 mx-auto">
                <div class="flex items-center justify-between">
                    
                    
                    <div class="flex items-center justify-end w-full">
                        <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                            
                        </button>
                    </div>
                </div>
				 <img src="{{url('/images/mylogo.jpg')}}" alt="Image"/>
                <nav  class="p-2 mt-4 text-white bg-green-500 sm:flex sm:justify-center sm:items-center">
                    <div class="flex flex-col sm:flex-row ">
					    <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('aboutme')}}">About Me</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('personal')}}">Personal Details</a>
					    <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('education')}}">Education</a>
					    <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('profession')}}">Professional Background</a>
					    <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('employment')}}">Employment History</a>
					    <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('accomplishments')}}">Major Accomplishments</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('experience')}}">Areas of Experience</a>
						<a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('skills')}}">ICT Skills</a>
						<a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('awards')}}">Awards/Recognitions</a>
						<a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('hobbies')}}">Hobbies</a>
						<a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('referees')}}">Referees</a>	
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('contacts')}}">Contacts</a>
                    </div>
                </nav>
            </div>
        </header>
        
        <main class="my-8">
		  <div class="container px-16 mx-auto">
	 
        <h3 class="text-2xl font-medium text-gray-700 text-blue-700  border-b-8 border-x-4
  border-y-4 border-blue-200 rounded-md shadow-md">{{ $tittle }}</h3>
            @yield('content')
        </main>
    
	
    </div>
	<div class="container px-6 py-3 mx-auto">
		<footer  class="p-2 mt-2 text-white bg-green-500 sm:flex sm:justify-center sm:items-center">
                <div class="flex flex-col sm:flex-row ">
                <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="/"> &copy; 2023 Protus M. Kakai. All rights reserved.</a> 
        </footer>
	</div>
	
	
	
	
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function getid(btn)
{
	//alert(btn.id);
	 $("#"+btn).modal('show');
}
$(document).ready(function() {
    $('.img').click(function(e) {
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: 'update',
            data: { abc: 123 },
          cache: false,
          contentType: false,
          processData: false,
			dataType: 'text',
            success: function(response) {
				
                var jsonData = JSON.parse(response);
             //  console.log(response);
			 //  console.log(this.id);
                // user is logged in successfully in the back-end
                // let's redirect
			  
                if (jsonData.status == "success") {
			    /*		
					Swal.fire(
                'Updated!',
                'Employee Updated Successfully!',
                'success',
				'successddd'
				
              )  */
			     //  alert('success');
                      //    $("#myModal").modal('show');
				        // $("#myModal").modal('show');
                } else {
                    //alert('error');
                }
            },
            error: function(jqXhr, textStatus, errorMessage) {
                console.log("Error: ", errorMessage);
                console.log(this.url);
            }
        });
    });
});

/*
$(".img").click(function(){
	// $("#show_image_popup").fadeIn();
	//alert("eeeee");
	  alert ("sddddfd");
     // alert(event.toElement.id);
})
	//$("#popup-modal").show();
*/
/*
function getId(btn)
{	
   $.ajax
   	({
          url: '{{ route('update') }}',		  
          method: 'POST',
          data: { abc: 123 },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'JSON',
          success: function(response) 
		  {
            if (response.status == 200) 
					{
						console.log("done");
					}
          },
		  error: function(jqXhr, textStatus, errorMessage)
		  {
					console.log("Error: ", errorMessage);			
					console.log(this.url);
          }  
	}); 
	
	
}
*/
</script>
</body>

</html>