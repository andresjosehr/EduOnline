<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>window.url='{{Request::root()}}'</script>
    
    <title> Acceso | EduOnline</title>
    <style>
    html {
	    height: 100%;
	}
	html, body, .fullheight {
	    min-height: 100% !important;
	    height: 100%;
	}
	.wrapper {
	  background-image: linear-gradient(to right, #8CC73F, #42C0DF, #EED234);
	  background-size: 600%;
	  background-position: 0 0;
	  box-shadow: inset 0 0 5em rgba(0, 0, 0, 0.5);
	  display: flex;
	  font-family: 'Lato', Arial, sans-serif;
	  height: 100%;
	  justify-content: center;
	  /* Animation */
	  animation-duration: 40s;
	  animation-iteration-count: infinite;
	  animation-name: gradients;
	}

	h1 {
	  color: white;
	  font-size: 2.4em;
	  text-align: center;
	  text-transform: uppercase;
	}

	@media (max-width: 830px) {
	  h1 {
	    font-size: 2em;
	  }
	}
	@keyframes gradients {
	  0% {
	    background-position: 0 0;
	  }
	  25% {
	    background-position: 50% 0;
	  }
	  50% {
	    background-position: 90% 0;
	  }
	  60% {
	    background-position: 60%;
	  }
	  75% {
	    background-position: 40%;
	  }
	  100% {
	    background-position: 0 0;
	  }
	}
	.anfitrion_title span{
		position: relative;
	}

	.anfition_title_span1,.anfition_title_span2{

		font-size: 40px;
	}

	.anfition_title_span1{
		font-weight: 600;
	}
	.anfition_title_span2{
		font-weight: 800;
	}

	.anfition_title_span3{

		font-size: 25px;
		font-weight: 600;
		top: 0px;
	}
	.anfition_title_span4{

		font-size: 100px;
		font-weight: 800;
		top: -0px;
	}
	.row_pin:after{
		content: " ";
	    border-bottom: 0.1875rem solid rgba(0, 0, 0, 0.15);
	    width: 100%;
	    top: 27.4%;
	    position: absolute;
	    right: 0%;
	}

    </style>
</head>
<body>
	<main class="fullheight w-100 wrapper">
		<div class="container">
			<div class="row row_pin">
				<div class="col-12 mt-2 pt-4 px-5">
					<p class="anfitrion_title">
						<div class="bg-white py-0" style="padding: 12px;width: 93%;box-shadow: rgba(0, 0, 0, 0.15) 0px -3px inset;">
							<span class="anfition_title_span1 mr-n3 pr-3">Unete a</span>
							<span class=" anfition_title_span2">www.test.it </span>
							<span class="anfition_title_span1 mr-n3 pr-3">o con la aplicacion movil!</span><br>
							<span class="anfition_title_span3">con el PIN del juego:</span> <br>
						</div>
						<div class="bg-white mt-n3 py-0" style="width: 34%;height: 129px;padding: 12px;box-shadow: rgba(0, 0, 0, 0.15) 0px -3px inset;">
							<span class="anfition_title_span4">54645</span>
						</div>	
					</p>
				</div>
			</div>
		</div>
		
	</main>

</body>
</html>