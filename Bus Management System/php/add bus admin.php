<?php
$websiteName="Travel A"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo "$websiteName";?></title>

	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" /> -->
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../css/book bus style.css" />
	<link rel="stylesheet" type="text/css" href="../styles/indexStyles.css">
</head>

<body>
	<?php

	session_start();
	?>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand addSpace setColor" href="#"><?php echo "$websiteName";?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link active" href="#">Add Buses<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view buses admin.php">View Buses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logOut.php">Log Out</a>
				</li>
			</ul>
		</div>
	</nav>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">

							<h1>Add Bus</h1>
						</div>
						<form action = "addBus.php" method = "POST">
							
							
							<div class="form-group">
								<span class="form-label">Departure City</span>
								<select name = "dptCity" id="departureCity" class="form-control" required>
									<option value="Islamabad" selected>Islamabad</option>
									<option value="" disabled>Punjab Cities</option>
									<option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
									<option value="Ahmadpur East">Ahmadpur East</option>
									<option value="Ali Khan Abad">Ali Khan Abad</option>
									<option value="Alipur">Alipur</option>
									<option value="Arifwala">Arifwala</option>
									<option value="Attock">Attock</option>
									<option value="Bhera">Bhera</option>
									<option value="Bhalwal">Bhalwal</option>
									<option value="Bahawalnagar">Bahawalnagar</option>
									<option value="Bahawalpur">Bahawalpur</option>
									<option value="Bhakkar">Bhakkar</option>
									<option value="Burewala">Burewala</option>
									<option value="Chillianwala">Chillianwala</option>
									<option value="Chakwal">Chakwal</option>
									<option value="Chichawatni">Chichawatni</option>
									<option value="Chiniot">Chiniot</option>
									<option value="Chishtian">Chishtian</option>
									<option value="Daska">Daska</option>
									<option value="Darya Khan">Darya Khan</option>
									<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
									<option value="Dhaular">Dhaular</option>
									<option value="Dina">Dina</option>
									<option value="Dinga">Dinga</option>
									<option value="Dipalpur">Dipalpur</option>
									<option value="Faisalabad">Faisalabad</option>
									<option value="Ferozewala">Ferozewala</option>
									<option value="Fateh Jhang">Fateh Jang</option>
									<option value="Ghakhar Mandi">Ghakhar Mandi</option>
									<option value="Gojra">Gojra</option>
									<option value="Gujranwala">Gujranwala</option>
									<option value="Gujrat">Gujrat</option>
									<option value="Gujar Khan">Gujar Khan</option>
									<option value="Hafizabad">Hafizabad</option>
									<option value="Haroonabad">Haroonabad</option>
									<option value="Hasilpur">Hasilpur</option>
									<option value="Haveli Lakha">Haveli Lakha</option>
									<option value="Jatoi">Jatoi</option>
									<option value="Jalalpur">Jalalpur</option>
									<option value="Jattan">Jattan</option>
									<option value="Jampur">Jampur</option>
									<option value="Jaranwala">Jaranwala</option>
									<option value="Jhang">Jhang</option>
									<option value="Jhelum">Jhelum</option>
									<option value="Kalabagh">Kalabagh</option>
									<option value="Karor Lal Esan">Karor Lal Esan</option>
									<option value="Kasur">Kasur</option>
									<option value="Kamalia">Kamalia</option>
									<option value="Kamoke">Kamoke</option>
									<option value="Khanewal">Khanewal</option>
									<option value="Khanpur">Khanpur</option>
									<option value="Kharian">Kharian</option>
									<option value="Khushab">Khushab</option>
									<option value="Kot Addu">Kot Addu</option>
									<option value="Jauharabad">Jauharabad</option>
									<option value="Lahore">Lahore</option>
									<option value="Lalamusa">Lalamusa</option>
									<option value="Layyah">Layyah</option>
									<option value="Liaquat Pur">Liaquat Pur</option>
									<option value="Lodhran">Lodhran</option>
									<option value="Malakwal">Malakwal</option>
									<option value="Mamoori">Mamoori</option>
									<option value="Mailsi">Mailsi</option>
									<option value="Mandi Bahauddin">Mandi Bahauddin</option>
									<option value="Mian Channu">Mian Channu</option>
									<option value="Mianwali">Mianwali</option>
									<option value="Multan">Multan</option>
									<option value="Murree">Murree</option>
									<option value="Muridke">Muridke</option>
									<option value="Mianwali Bangla">Mianwali Bangla</option>
									<option value="Muzaffargarh">Muzaffargarh</option>
									<option value="Narowal">Narowal</option>
									<option value="Nankana Sahib">Nankana Sahib</option>
									<option value="Okara">Okara</option>
									<option value="Renala Khurd">Renala Khurd</option>
									<option value="Pakpattan">Pakpattan</option>
									<option value="Pattoki">Pattoki</option>
									<option value="Pir Mahal">Pir Mahal</option>
									<option value="Qaimpur">Qaimpur</option>
									<option value="Qila Didar Singh">Qila Didar Singh</option>
									<option value="Rabwah">Rabwah</option>
									<option value="Raiwind">Raiwind</option>
									<option value="Rajanpur">Rajanpur</option>
									<option value="Rahim Yar Khan">Rahim Yar Khan</option>
									<option value="Rawalpindi">Rawalpindi</option>
									<option value="Sadiqabad">Sadiqabad</option>
									<option value="Safdarabad">Safdarabad</option>
									<option value="Sahiwal">Sahiwal</option>
									<option value="Sangla Hill">Sangla Hill</option>
									<option value="Sarai Alamgir">Sarai Alamgir</option>
									<option value="Sargodha">Sargodha</option>
									<option value="Shakargarh">Shakargarh</option>
									<option value="Sheikhupura">Sheikhupura</option>
									<option value="Sialkot">Sialkot</option>
									<option value="Sohawa">Sohawa</option>
									<option value="Soianwala">Soianwala</option>
									<option value="Siranwali">Siranwali</option>
									<option value="Talagang">Talagang</option>
									<option value="Taxila">Taxila</option>
									<option value="Toba Tek Singh">Toba Tek Singh</option>
									<option value="Vehari">Vehari</option>
									<option value="Wah Cantonment">Wah Cantonment</option>
									<option value="Wazirabad">Wazirabad</option>
									<option value="" disabled>Sindh Cities</option>
									<option value="Badin">Badin</option>
									<option value="Bhirkan">Bhirkan</option>
									<option value="Rajo Khanani">Rajo Khanani</option>
									<option value="Chak">Chak</option>
									<option value="Dadu">Dadu</option>
									<option value="Digri">Digri</option>
									<option value="Diplo">Diplo</option>
									<option value="Dokri">Dokri</option>
									<option value="Ghotki">Ghotki</option>
									<option value="Haala">Haala</option>
									<option value="Hyderabad">Hyderabad</option>
									<option value="Islamkot">Islamkot</option>
									<option value="Jacobabad">Jacobabad</option>
									<option value="Jamshoro">Jamshoro</option>
									<option value="Jungshahi">Jungshahi</option>
									<option value="Kandhkot">Kandhkot</option>
									<option value="Kandiaro">Kandiaro</option>
									<option value="Karachi">Karachi</option>
									<option value="Kashmore">Kashmore</option>
									<option value="Keti Bandar">Keti Bandar</option>
									<option value="Khairpur">Khairpur</option>
									<option value="Kotri">Kotri</option>
									<option value="Larkana">Larkana</option>
									<option value="Matiari">Matiari</option>
									<option value="Mehar">Mehar</option>
									<option value="Mirpur Khas">Mirpur Khas</option>
									<option value="Mithani">Mithani</option>
									<option value="Mithi">Mithi</option>
									<option value="Mehrabpur">Mehrabpur</option>
									<option value="Moro">Moro</option>
									<option value="Nagarparkar">Nagarparkar</option>
									<option value="Naudero">Naudero</option>
									<option value="Naushahro Feroze">Naushahro Feroze</option>
									<option value="Naushara">Naushara</option>
									<option value="Nawabshah">Nawabshah</option>
									<option value="Nazimabad">Nazimabad</option>
									<option value="Qambar">Qambar</option>
									<option value="Qasimabad">Qasimabad</option>
									<option value="Ranipur">Ranipur</option>
									<option value="Ratodero">Ratodero</option>
									<option value="Rohri">Rohri</option>
									<option value="Sakrand">Sakrand</option>
									<option value="Sanghar">Sanghar</option>
									<option value="Shahbandar">Shahbandar</option>
									<option value="Shahdadkot">Shahdadkot</option>
									<option value="Shahdadpur">Shahdadpur</option>
									<option value="Shahpur Chakar">Shahpur Chakar</option>
									<option value="Shikarpaur">Shikarpaur</option>
									<option value="Sukkur">Sukkur</option>
									<option value="Tangwani">Tangwani</option>
									<option value="Tando Adam Khan">Tando Adam Khan</option>
									<option value="Tando Allahyar">Tando Allahyar</option>
									<option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
									<option value="Thatta">Thatta</option>
									<option value="Umerkot">Umerkot</option>
									<option value="Warah">Warah</option>
									<option value="" disabled>Khyber Cities</option>
									<option value="Abbottabad">Abbottabad</option>
									<option value="Adezai">Adezai</option>
									<option value="Alpuri">Alpuri</option>
									<option value="Akora Khattak">Akora Khattak</option>
									<option value="Ayubia">Ayubia</option>
									<option value="Banda Daud Shah">Banda Daud Shah</option>
									<option value="Bannu">Bannu</option>
									<option value="Batkhela">Batkhela</option>
									<option value="Battagram">Battagram</option>
									<option value="Birote">Birote</option>
									<option value="Chakdara">Chakdara</option>
									<option value="Charsadda">Charsadda</option>
									<option value="Chitral">Chitral</option>
									<option value="Daggar">Daggar</option>
									<option value="Dargai">Dargai</option>
									<option value="Darya Khan">Darya Khan</option>
									<option value="Dera Ismail Khan">Dera Ismail Khan</option>
									<option value="Doaba">Doaba</option>
									<option value="Dir">Dir</option>
									<option value="Drosh">Drosh</option>
									<option value="Hangu">Hangu</option>
									<option value="Haripur">Haripur</option>
									<option value="Karak">Karak</option>
									<option value="Kohat">Kohat</option>
									<option value="Kulachi">Kulachi</option>
									<option value="Lakki Marwat">Lakki Marwat</option>
									<option value="Latamber">Latamber</option>
									<option value="Madyan">Madyan</option>
									<option value="Mansehra">Mansehra</option>
									<option value="Mardan">Mardan</option>
									<option value="Mastuj">Mastuj</option>
									<option value="Mingora">Mingora</option>
									<option value="Nowshera">Nowshera</option>
									<option value="Paharpur">Paharpur</option>
									<option value="Pabbi">Pabbi</option>
									<option value="Peshawar">Peshawar</option>
									<option value="Saidu Sharif">Saidu Sharif</option>
									<option value="Shorkot">Shorkot</option>
									<option value="Shewa Adda">Shewa Adda</option>
									<option value="Swabi">Swabi</option>
									<option value="Swat">Swat</option>
									<option value="Tangi">Tangi</option>
									<option value="Tank">Tank</option>
									<option value="Thall">Thall</option>
									<option value="Timergara">Timergara</option>
									<option value="Tordher">Tordher</option>
									<option value="" disabled>Balochistan Cities</option>
									<option value="Awaran">Awaran</option>
									<option value="Barkhan">Barkhan</option>
									<option value="Chagai">Chagai</option>
									<option value="Dera Bugti">Dera Bugti</option>
									<option value="Gwadar">Gwadar</option>
									<option value="Harnai">Harnai</option>
									<option value="Jafarabad">Jafarabad</option>
									<option value="Jhal Magsi">Jhal Magsi</option>
									<option value="Kacchi">Kacchi</option>
									<option value="Kalat">Kalat</option>
									<option value="Kech">Kech</option>
									<option value="Kharan">Kharan</option>
									<option value="Khuzdar">Khuzdar</option>
									<option value="Killa Abdullah">Killa Abdullah</option>
									<option value="Killa Saifullah">Killa Saifullah</option>
									<option value="Kohlu">Kohlu</option>
									<option value="Lasbela">Lasbela</option>
									<option value="Lehri">Lehri</option>
									<option value="Loralai">Loralai</option>
									<option value="Mastung">Mastung</option>
									<option value="Musakhel">Musakhel</option>
									<option value="Nasirabad">Nasirabad</option>
									<option value="Nushki">Nushki</option>
									<option value="Panjgur">Panjgur</option>
									<option value="Pishin Valley">Pishin Valley</option>
									<option value="Quetta">Quetta</option>
									<option value="Sherani">Sherani</option>
									<option value="Sibi">Sibi</option>
									<option value="Sohbatpur">Sohbatpur</option>
									<option value="Washuk">Washuk</option>
									<option value="Zhob">Zhob</option>
									<option value="Ziarat">Ziarat</option>
									<div class="invalid-feedback">No City selected</div>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-group">
								<span class="form-label">Destination City</span>
								<select name = "destCity" id="destinationCity"  class="form-control" required>
									<!-- <option value="" disabled selected>Select The City</option> -->
									<option value="Islamabad">Islamabad</option>
									<option value="" disabled>Punjab Cities</option>
									<option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
									<option value="Ahmadpur East">Ahmadpur East</option>
									<option value="Ali Khan Abad">Ali Khan Abad</option>
									<option value="Alipur">Alipur</option>
									<option value="Arifwala">Arifwala</option>
									<option value="Attock">Attock</option>
									<option value="Bhera">Bhera</option>
									<option value="Bhalwal">Bhalwal</option>
									<option value="Bahawalnagar">Bahawalnagar</option>
									<option value="Bahawalpur">Bahawalpur</option>
									<option value="Bhakkar">Bhakkar</option>
									<option value="Burewala">Burewala</option>
									<option value="Chillianwala">Chillianwala</option>
									<option value="Chakwal">Chakwal</option>
									<option value="Chichawatni">Chichawatni</option>
									<option value="Chiniot">Chiniot</option>
									<option value="Chishtian">Chishtian</option>
									<option value="Daska">Daska</option>
									<option value="Darya Khan">Darya Khan</option>
									<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
									<option value="Dhaular">Dhaular</option>
									<option value="Dina">Dina</option>
									<option value="Dinga">Dinga</option>
									<option value="Dipalpur">Dipalpur</option>
									<option value="Faisalabad">Faisalabad</option>
									<option value="Ferozewala">Ferozewala</option>
									<option value="Fateh Jhang">Fateh Jang</option>
									<option value="Ghakhar Mandi">Ghakhar Mandi</option>
									<option value="Gojra">Gojra</option>
									<option value="Gujranwala">Gujranwala</option>
									<option value="Gujrat">Gujrat</option>
									<option value="Gujar Khan">Gujar Khan</option>
									<option value="Hafizabad">Hafizabad</option>
									<option value="Haroonabad">Haroonabad</option>
									<option value="Hasilpur">Hasilpur</option>
									<option value="Haveli Lakha">Haveli Lakha</option>
									<option value="Jatoi">Jatoi</option>
									<option value="Jalalpur">Jalalpur</option>
									<option value="Jattan">Jattan</option>
									<option value="Jampur">Jampur</option>
									<option value="Jaranwala">Jaranwala</option>
									<option value="Jhang">Jhang</option>
									<option value="Jhelum">Jhelum</option>
									<option value="Kalabagh">Kalabagh</option>
									<option value="Karor Lal Esan">Karor Lal Esan</option>
									<option value="Kasur">Kasur</option>
									<option value="Kamalia">Kamalia</option>
									<option value="Kamoke">Kamoke</option>
									<option value="Khanewal">Khanewal</option>
									<option value="Khanpur">Khanpur</option>
									<option value="Kharian">Kharian</option>
									<option value="Khushab">Khushab</option>
									<option value="Kot Addu">Kot Addu</option>
									<option value="Jauharabad">Jauharabad</option>
									<option value="Lahore" selected>Lahore</option>
									<option value="Lalamusa">Lalamusa</option>
									<option value="Layyah">Layyah</option>
									<option value="Liaquat Pur">Liaquat Pur</option>
									<option value="Lodhran">Lodhran</option>
									<option value="Malakwal">Malakwal</option>
									<option value="Mamoori">Mamoori</option>
									<option value="Mailsi">Mailsi</option>
									<option value="Mandi Bahauddin">Mandi Bahauddin</option>
									<option value="Mian Channu">Mian Channu</option>
									<option value="Mianwali">Mianwali</option>
									<option value="Multan">Multan</option>
									<option value="Murree">Murree</option>
									<option value="Muridke">Muridke</option>
									<option value="Mianwali Bangla">Mianwali Bangla</option>
									<option value="Muzaffargarh">Muzaffargarh</option>
									<option value="Narowal">Narowal</option>
									<option value="Nankana Sahib">Nankana Sahib</option>
									<option value="Okara">Okara</option>
									<option value="Renala Khurd">Renala Khurd</option>
									<option value="Pakpattan">Pakpattan</option>
									<option value="Pattoki">Pattoki</option>
									<option value="Pir Mahal">Pir Mahal</option>
									<option value="Qaimpur">Qaimpur</option>
									<option value="Qila Didar Singh">Qila Didar Singh</option>
									<option value="Rabwah">Rabwah</option>
									<option value="Raiwind">Raiwind</option>
									<option value="Rajanpur">Rajanpur</option>
									<option value="Rahim Yar Khan">Rahim Yar Khan</option>
									<option value="Rawalpindi">Rawalpindi</option>
									<option value="Sadiqabad">Sadiqabad</option>
									<option value="Safdarabad">Safdarabad</option>
									<option value="Sahiwal">Sahiwal</option>
									<option value="Sangla Hill">Sangla Hill</option>
									<option value="Sarai Alamgir">Sarai Alamgir</option>
									<option value="Sargodha">Sargodha</option>
									<option value="Shakargarh">Shakargarh</option>
									<option value="Sheikhupura">Sheikhupura</option>
									<option value="Sialkot">Sialkot</option>
									<option value="Sohawa">Sohawa</option>
									<option value="Soianwala">Soianwala</option>
									<option value="Siranwali">Siranwali</option>
									<option value="Talagang">Talagang</option>
									<option value="Taxila">Taxila</option>
									<option value="Toba Tek Singh">Toba Tek Singh</option>
									<option value="Vehari">Vehari</option>
									<option value="Wah Cantonment">Wah Cantonment</option>
									<option value="Wazirabad">Wazirabad</option>
									<option value="" disabled>Sindh Cities</option>
									<option value="Badin">Badin</option>
									<option value="Bhirkan">Bhirkan</option>
									<option value="Rajo Khanani">Rajo Khanani</option>
									<option value="Chak">Chak</option>
									<option value="Dadu">Dadu</option>
									<option value="Digri">Digri</option>
									<option value="Diplo">Diplo</option>
									<option value="Dokri">Dokri</option>
									<option value="Ghotki">Ghotki</option>
									<option value="Haala">Haala</option>
									<option value="Hyderabad">Hyderabad</option>
									<option value="Islamkot">Islamkot</option>
									<option value="Jacobabad">Jacobabad</option>
									<option value="Jamshoro">Jamshoro</option>
									<option value="Jungshahi">Jungshahi</option>
									<option value="Kandhkot">Kandhkot</option>
									<option value="Kandiaro">Kandiaro</option>
									<option value="Karachi">Karachi</option>
									<option value="Kashmore">Kashmore</option>
									<option value="Keti Bandar">Keti Bandar</option>
									<option value="Khairpur">Khairpur</option>
									<option value="Kotri">Kotri</option>
									<option value="Larkana">Larkana</option>
									<option value="Matiari">Matiari</option>
									<option value="Mehar">Mehar</option>
									<option value="Mirpur Khas">Mirpur Khas</option>
									<option value="Mithani">Mithani</option>
									<option value="Mithi">Mithi</option>
									<option value="Mehrabpur">Mehrabpur</option>
									<option value="Moro">Moro</option>
									<option value="Nagarparkar">Nagarparkar</option>
									<option value="Naudero">Naudero</option>
									<option value="Naushahro Feroze">Naushahro Feroze</option>
									<option value="Naushara">Naushara</option>
									<option value="Nawabshah">Nawabshah</option>
									<option value="Nazimabad">Nazimabad</option>
									<option value="Qambar">Qambar</option>
									<option value="Qasimabad">Qasimabad</option>
									<option value="Ranipur">Ranipur</option>
									<option value="Ratodero">Ratodero</option>
									<option value="Rohri">Rohri</option>
									<option value="Sakrand">Sakrand</option>
									<option value="Sanghar">Sanghar</option>
									<option value="Shahbandar">Shahbandar</option>
									<option value="Shahdadkot">Shahdadkot</option>
									<option value="Shahdadpur">Shahdadpur</option>
									<option value="Shahpur Chakar">Shahpur Chakar</option>
									<option value="Shikarpaur">Shikarpaur</option>
									<option value="Sukkur">Sukkur</option>
									<option value="Tangwani">Tangwani</option>
									<option value="Tando Adam Khan">Tando Adam Khan</option>
									<option value="Tando Allahyar">Tando Allahyar</option>
									<option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
									<option value="Thatta">Thatta</option>
									<option value="Umerkot">Umerkot</option>
									<option value="Warah">Warah</option>
									<option value="" disabled>Khyber Cities</option>
									<option value="Abbottabad">Abbottabad</option>
									<option value="Adezai">Adezai</option>
									<option value="Alpuri">Alpuri</option>
									<option value="Akora Khattak">Akora Khattak</option>
									<option value="Ayubia">Ayubia</option>
									<option value="Banda Daud Shah">Banda Daud Shah</option>
									<option value="Bannu">Bannu</option>
									<option value="Batkhela">Batkhela</option>
									<option value="Battagram">Battagram</option>
									<option value="Birote">Birote</option>
									<option value="Chakdara">Chakdara</option>
									<option value="Charsadda">Charsadda</option>
									<option value="Chitral">Chitral</option>
									<option value="Daggar">Daggar</option>
									<option value="Dargai">Dargai</option>
									<option value="Darya Khan">Darya Khan</option>
									<option value="Dera Ismail Khan">Dera Ismail Khan</option>
									<option value="Doaba">Doaba</option>
									<option value="Dir">Dir</option>
									<option value="Drosh">Drosh</option>
									<option value="Hangu">Hangu</option>
									<option value="Haripur">Haripur</option>
									<option value="Karak">Karak</option>
									<option value="Kohat">Kohat</option>
									<option value="Kulachi">Kulachi</option>
									<option value="Lakki Marwat">Lakki Marwat</option>
									<option value="Latamber">Latamber</option>
									<option value="Madyan">Madyan</option>
									<option value="Mansehra">Mansehra</option>
									<option value="Mardan">Mardan</option>
									<option value="Mastuj">Mastuj</option>
									<option value="Mingora">Mingora</option>
									<option value="Nowshera">Nowshera</option>
									<option value="Paharpur">Paharpur</option>
									<option value="Pabbi">Pabbi</option>
									<option value="Peshawar">Peshawar</option>
									<option value="Saidu Sharif">Saidu Sharif</option>
									<option value="Shorkot">Shorkot</option>
									<option value="Shewa Adda">Shewa Adda</option>
									<option value="Swabi">Swabi</option>
									<option value="Swat">Swat</option>
									<option value="Tangi">Tangi</option>
									<option value="Tank">Tank</option>
									<option value="Thall">Thall</option>
									<option value="Timergara">Timergara</option>
									<option value="Tordher">Tordher</option>
									<option value="" disabled>Balochistan Cities</option>
									<option value="Awaran">Awaran</option>
									<option value="Barkhan">Barkhan</option>
									<option value="Chagai">Chagai</option>
									<option value="Dera Bugti">Dera Bugti</option>
									<option value="Gwadar">Gwadar</option>
									<option value="Harnai">Harnai</option>
									<option value="Jafarabad">Jafarabad</option>
									<option value="Jhal Magsi">Jhal Magsi</option>
									<option value="Kacchi">Kacchi</option>
									<option value="Kalat">Kalat</option>
									<option value="Kech">Kech</option>
									<option value="Kharan">Kharan</option>
									<option value="Khuzdar">Khuzdar</option>
									<option value="Killa Abdullah">Killa Abdullah</option>
									<option value="Killa Saifullah">Killa Saifullah</option>
									<option value="Kohlu">Kohlu</option>
									<option value="Lasbela">Lasbela</option>
									<option value="Lehri">Lehri</option>
									<option value="Loralai">Loralai</option>
									<option value="Mastung">Mastung</option>
									<option value="Musakhel">Musakhel</option>
									<option value="Nasirabad">Nasirabad</option>
									<option value="Nushki">Nushki</option>
									<option value="Panjgur">Panjgur</option>
									<option value="Pishin Valley">Pishin Valley</option>
									<option value="Quetta">Quetta</option>
									<option value="Sherani">Sherani</option>
									<option value="Sibi">Sibi</option>
									<option value="Sohbatpur">Sohbatpur</option>
									<option value="Washuk">Washuk</option>
									<option value="Zhob">Zhob</option>
									<option value="Ziarat">Ziarat</option>
									<div class="invalid-feedback">No City selected</div>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Departure Date</span>
										<input name = "dptDate" class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select name = "dptHour" class="form-control" required>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select name = "dptMin" class="form-control" required>
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select name = "dptMeridian" class="form-control">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">No Of Seats</span>
												<input name = "seatsAvailable" class="form-control" type="tel" placeholder="No Of Seats" maxlength="2" pattern="\d{1,2}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Add</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>