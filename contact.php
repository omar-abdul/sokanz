<<<<<<< HEAD
=======
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$okMessage='';

		$data =[
	
			'name'=>$_POST['company-name'],
			'service' => $_POST['service'],
			'sector' => $_POST['sector'],
			'email'=>$_POST['email'],
			'remark' => $_POST['remark']
		];


		$errorMessage =[
			'name_error' => '',
			'service_error' => '',
			'sector_error' =>'',
			'email_error' => ''
		];

		if(empty($data['name'])){
			$errorMessage['name_error'] = 'Please provide a name for your organization or company';
		}
		if(empty($data['service'])){
			$errorMessage['service_error'] ='Please select a service';
		}
		if(empty($data['sector'])){
			$errorMessage['sector_error'] = 'Please select a business sector';
		}

		if(empty($data['email'])){
			$errorMessage['email_error'] = 'Please provide an email';
		}

		if(empty($errorMessage['email_error']) && empty($errorMessage['name_error'])
			&& empty($errorMessage['service_error']) && empty($errorMessage['sector_error'])) {

				$to = 'ilbuuromar@gmail.com';
				$subject = 'Quote request';
				$message = 'Company : <h1>'.$data['name'].'</h1> \n'
				.'Service : <h2>'.$data['service'].'</h2>'
				.'Sector : <h2>'.$data['sector'].'</h2>'
				.'Addtional Remarks : <p>'.$data['remark'].'</p>';

				$headers = 'From: '.$data['name'].'<'.$data['email'].'>';

				mail($to, $subject, $message, $headers);

				$okMessage = "Thank you, we will get back to you as soon as possible with the appropriate quote or further inquiries";
		}



	}

	else {
		$okMessage='';
		$errorMessage =[
			'name_error' => '',
			'service_error' => '',
			'sector_error' =>'',
			'email_error' => ''
		];	
		$data =[
	
			'name'=>'',
			'service' => '',
			'sector' => '',
			'email'=>'',
			'remark' =>''
		];			
	}



?>


>>>>>>> f904214058d16dc051b06ab4d15cab79657a1def
<html>
<head>
	<title>Sokanz : Get started</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta name="description" content="Web and mobile solutions">
	<meta name="keywords" content="web design, web development, mobile first ,software installation ">
	<meta name="author" content="Omar AbdulRazak , www.omar-abdul.github.io">
	<title>Sokanz</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<<<<<<< HEAD
	 <link rel="stylesheet" type="text/css" href="./assets/css/contact-style.css">
=======
>>>>>>> f904214058d16dc051b06ab4d15cab79657a1def
	 <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	 <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
</head>
<body>
<<<<<<< HEAD
<header id="header-contact">
	<div class="header-container">
		<div class="brand center">
			<a href="index.html">
			<h1 ><span>So</span>Kanz</h1>
			</a>
		</div>
	</div>
</header>
<section class="main-content">
	<div class="container">
		<form>
			<div class="form-group">
				<label for="companyName">Company or Organization Name</label>
				<input type="text" id="companyName" name="company-name">

			</div>
			<div class="form-group">
				<label for="sector">Sector</label>
				<select id="sector">
					<option value="" hidden selected disabled> Choose a sector</option>
					<option value="education"> Education</option>
					<option value="ngo"> Non-Government Organization</option>
					<option value="media"> Media and Entertainment</option>
					<option value="food">Catering</option>
					<option value="tech">Technology</option>
					<option value="other">Other</option>
				</select>
				
			</div>		
			<div class="form-group">
				<label for="sector">Service</label>
				<select id="sector">
					<option value="" hidden selected disabled>Service you want</option>
					<option value="education">Static landing webpage</option>
					<option value="ngo"> Blog</option>
					<option value="media">Customized web application</option>
					<option value="food">Mobile or Hybrid application</option>
					<option value="tech">Quickbook installation</option>
					
				</select>
				
			</div>					
		</form>
	</div>
</div>
=======
	<header>
		<div class="header-container contact">
			<div class="brand text-center">
				<a href="index.html">
				<h1 ><span>So</span>Kanz</h1>
				</a>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-50">
			<section class="main-content">
				<div class="container">
					<div class="<?php echo (!empty ($okMessage))? "success":""?>">
						<?php echo $okMessage?>
					</div>
					<form action="contact.php " method="POST">
						<div class="form-group">
							<label for="companyName">Company or Organization Name</label>
							<input type="text" id="companyName" name="company-name" value="<?php echo $data['name']?>">
							<span class="invalid"><?php echo $errorMessage['name_error']?></span>

						</div>

						<div class="form-group">
							<label for="sectorInput">Sector</label>
							<select id="sectorInput" name="sector">
								<option value="<?php echo (!empty($data['sector'])?$data['sector']:'')?>" hidden selected><?php echo (!empty($data['sector'])?$data['sector']:'Choose a sector')?></option>
								<option value="education"> Education</option>
								<option value="ngo"> Non-Government Organization</option>
								<option value="media"> Media and Entertainment</option>
								<option value="food">Catering</option>
								<option value="tech">Technology</option>
								<option value="other">Other</option>
							</select>
							<span class="invalid"><?php echo $errorMessage['sector_error']?></span>	
						</div>

						<div class="form-group">
							<label for="serviceInput">Service</label>
							<select id="serviceInput" name="service">
								<option value="<?php echo (!empty($data['service'])?$data['service']:'')?>" hidden selected><?php echo (!empty($data['service'])?$data['sector']:'Choose a service')?></option>
								<option value="education">Static landing webpage</option>
								<option value="ngo"> Blog</option>
								<option value="media">Customized web application</option>
								<option value="food">Mobile or Hybrid application</option>
								<option value="tech">Quickbook installation</option>
							</select>
							<span class="invalid"><?php echo $errorMessage['service_error']?></span>						
							
						</div>
						<div class="form-group">
							<label for="emailInput">Email</label>
							<input type="text" id="emailInput" name="email" value="<?php echo $data['email']?>">
							<span class="invalid"><?php echo $errorMessage['email_error']?></span>
						</div>	
						<div class="form-group">
							<label for="remark">Additional Remarks  <span class="optional"> optional</span></label>
							<textarea id="remark" name="remark"><?php echo $data['remark']?></textarea>

						</div>				
						<button class="button"> Send </button>							
					</form>
				</div>
			</section>
		</div>
		<div class="col-50">
			<div class="sidebanner">
				<h3></h3>
			</div>
		</div>
	</div>
>>>>>>> f904214058d16dc051b06ab4d15cab79657a1def

</body>
</html>