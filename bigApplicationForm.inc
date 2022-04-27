<form method="POST">
<div id="page1">
    <input type="hidden" name="_submit_check" value="true">
	<label for="first_name">First Name</label><br/>
	<input type="text" name="first_name"/><br/>

	<label for="middle_name">Middle Name</label><br/>
	<input type="text" name="middle_name"/><br/>

	<label for="last_name">Last Name</label><br/>
	<input type="text" name="last_name"/><br/>

	<label for="preferred_name">Preferred Name/Nickname</label><br/>
	<input type="text" name="preferred_name"/><br/>
	
	<label for="previous_names">Previous Name(s)</label><br/>
	<input type="text" name="previous_names"/><br/>
	
	<label for="address">Home Address:</label><br>
	<input type="text" name="address"><br>
	<label for="city">City</label><br>
	<input type="text" name="city" id="city"><br>
	<label for="state">State</label><br>
	<input type="text" name="state" id="state"><br>
	<label for="zip">Zip</label><br>
	<input type="text" name="zip" id="zip"><br>
	
	<label for="cell_phone">Cell Phone</label><br/>
	<input type="tel" name="cell_phone"/><br/>
	
	<label for="text_parent">Is it okay to text you?</label><br/>
	
	<input type="radio" name="can_text_cell" id="yes_text" value="true">
	<label for="yes_text">Yes</label>
	<input type="radio" name="can_text_cell" id="no_text" value="false">
	<label for="no_text">No</label><br/>
	
	<label for="home_phone">Home Phone</label><br/>
	<input type="tel" name="home_phone"/><br/>
	
	<label for="work_phone">Work Phone</label><br/>
	<input type="tel" name="work_phone"/><br/>
	
	<label for="email">Email</label><br>
	<input type="text" name="email"/><br/>
	
	<label for="secondary_email">Secondary Email</label><br>
	<input type="text" name="secondary_email"/><br/>
	
	<label for="birthday">Date of Birth</label><br/>
	<input type="date" name="birthday"/><br/>
	
	<label for="ssn">Social Security Number</label><br>
	<input type="text" name="ssn"/><br/>

	<label>
		Gender
	</label><br/>
	<input type="radio" name="gender" value="male" onchange="hide('otherGender')"/>
	<label for="gender">
		Male
	</label>
	<input type="radio" name="gender" value="female" onchange="hide('otherGender')"/>
	<label for="gender">
		Female
	</label>
	<input type="radio" name="gender" value="Other" onchange="show('otherGender')"/>
	<label for="gender">
		Other
	</label><br/>
	<br/>
	<div id="otherGender">
		<label for="otherGender">Please Specify</label><br/>
		<input type="text" id="otherGender" name="otherGender"/>
	</div>
	
	<label>
		Preferred Pronouns
	</label><br/>
	<input type="radio" name="pronouns" value="male" onchange="hide('otherPronouns')"/>
	<label for="pronouns">
		He/him/his
	</label>
	<input type="radio" name="pronouns" value="female" onchange="hide('otherPronouns')"/>
	<label for="pronouns">
		She/her/hers
	</label>
	<input type="radio" name="pronouns" value="nonbinary" onchange="hide('otherPronouns')"/>
	<label for="pronouns">
		They/them/theirs
	</label>
	<input type="radio" name="pronouns" value="Other" onchange="show('otherPronouns')"/>
	<label for="pronouns">
		Other
	</label><br/>
	<br/>
	<div id="otherPronouns">
		<label for="otherPronounds">Please Specify</label><br/>
		<input type="text" id="otherPronouns" name="otherPronouns"/>
	</div>
	
	<label for="relationship_status">What is your relationship status?</label><br>
	<select name="relationship_status">
		<option value="" disabled selected>Select</option>
		<option value="single">Single</option>
		<option value="married">Married</option>
		<option value="separated">Separated</option>
		<option value="divorced">Divorced</option>
		<option value="widowed">Widowed</option>
		<option value="livingwso">Living with Significant Other</option>
		<option value="domestic">Domestic Partner</option>
	</select><br/>
	
	<label for="orientation">What is your sexual orientation?</label><br>
	<select name="orientation">
		<option value="" disabled selected>Select</option>
		<option value="hetero">Heterosexual</option>
		<option value="homosexual">Homosexual</option>
		<option value="bisexual">Bisexual</option>
	</select><br/>
	
	<label for="ethnicity">Ethnicity/Nationality</label><br>
	<select name="ethnicity">
		<option value="" disabled selected>Select</option>
		<option value="indian">American Indian/Alaska Native</option>
		<option value="asian">Asian</option>
		<option value="african">African/African American</option>
		<option value="hispanic">Hispanic</option>
		<option value="pacific">Native Hawaiian/Pacific Islander</option>
		<option value="caucasian">Caucasian</option>
		<option value="blackAndAsian">Multiracial: Black & Asian</option>
		<option value="blackAndHispanic">Multiracial: Black & Hispanic</option>
		<option value="blackAndWhite">Multiracial: Black & White</option>
		<option value="hispanicAndAsian">Multiracial: Hispanic & Asian</option>
		<option value="hispanicAndWhite">Multiracial: Hispanic & White</option>
		<option value="multiracial">Multiracial</option>
		<option value="other">Other</option>
	</select><br/>
	
	<label for="faith">Faith Affiliation</label><br>
	<select name="faith">
		<option value="" disabled selected>Select</option>
		<option value="christian">Christian</option>
		<option value="agnostic">Agnostic</option>
		<option value="amish">Amish</option>
		<option value="atheist">Atheist</option>
		<option value="buddhist">Buddhist</option>
		<option value="hindu">Hindu</option>
		<option value="islamic">Islamic</option>
		<option value="jehovah">Jehovah's Witness</option>
		<option value="jewish">Jewish</option>
		<option value="mormon">Mormon/LDS</option>
		<option value="quaker">Quaker/Mennonite</option>
		<option value="salvation">Salvation Army</option>
		<option value="scient">Scientology</option>
		<option value="seventh">Seventh Day Adventist</option>
		<option value="shaman">Shamanism</option>
		<option value="native">Traditional Native American</option>
		<option value="wiccan">Wiccan/Pagan</option>
		<option value="nondenom">Non-Denominational</option>
		<option value="other">Other</option>
	</select><br/>
	
	<label>
		Do you have a driver's license?
	</label><br/>
	<input type="radio" name="dl" value="no" onchange="hide('yes')"/>
	<label for="dl">
		No
	</label>
	<input type="radio" name="dl" value="yes" onchange="show('yes')"/>
	<label for="dl">
		Yes
	</label><br/>
	<br/>
	<div id="yes">
		<label for="DL_number">Driver's License Number</label><br/>
		<input type="text" id="DL_number" name="DL_number"/>
		
		<label for="DL_state">State of Issue</label><br>
		<select name="DL_state">
    		<option value="" disabled selected>Select</option>
    		<option value="al">Alabama</option>
    		<option value="ak">Alaska</option>
    		<option value="az">Arizona</option>
    		<option value="ar">Arkansas</option>
    		<option value="ca">California</option>
    		<option value="co">Colorado</option>
    		<option value="ct">Connecticut</option>
    		<option value="de">Delaware</option>
    		<option value="dc">District of Columbia</option>
    		<option value="fl">Florida</option>
    		<option value="ga">Georgia</option>
    		<option value="hi">Hawaii</option>
    		<option value="id">Idaho</option>
    		<option value="il">Illinois</option>
    		<option value="in">Indiana</option>
    		<option value="ia">Iowa</option>
    		<option value="ks">Kansas</option>
    		<option value="ky">Kentucky</option>
    		<option value="la">Louisiana</option>
    		<option value="me">Maine</option>
    		<option value="md">Maryland</option>
    		<option value="ma">Massachusetts</option>
    		<option value="mi">Michigan</option>
    		<option value="mn">Minnesota</option>
    		<option value="ms">Mississippi</option>
    		<option value="mo">Missouri</option>
    		<option value="mt">Montana</option>
    		<option value="ne">Nebraska</option>
    		<option value="nv">Nevada</option>
    		<option value="nh">New Hampshire</option>
    		<option value="nj">New Jersey</option>
    		<option value="nm">New Mexico</option>
    		<option value="ny">New York</option>
    		<option value="nc">North Carolina</option>
    		<option value="nd">North Dakota</option>
    		<option value="oh">Ohio</option>
    		<option value="ok">Oklahoma</option>
    		<option value="or">Oregon</option>
    		<option value="pa">Pennsylvania</option>
    		<option value="ri">Rhode Island</option>
    		<option value="sc">South Carolina</option>
    		<option value="sd">South Dakota</option>
    		<option value="tn">Tennessee</option>
    		<option value="tx">Texas</option>
    		<option value="ut">Utah</option>
    		<option value="vt">Vermont</option>
    		<option value="va">Virginia</option>
    		<option value="wa">Washington</option>
    		<option value="wv">West Virginia</option>
    		<option value="wi">Wisconsin</option>
    		<option value="wy">Wyoming</option>
		</select><br/>
		
		<label for="DL_expiration">Expiration Date</label><br/>
		<input type="text" id="DL_expiration" name="DL_expiration"/>
	</div>
	
	<label>Emergency Contact</label><br>
	<label for="emergency_contact">Name</label><br/>
	<input type="text" name="emergency_contact" id="emergency_contact"><br/>
	<label for="EC_number">Phone Number</label><br/>
	<input type="tel" name="EC_number" id="EC_number"><br>
	<label for="EC_relation">Relationship</label><br/>
	<input type="text" name="EC_relation" id="EC_relation"><br/>
	<br>
	
	<label>Employment & Education</label><br>
	<label for="employer">Current Employer</label><br/>
	<input type="text" name="employer" id="employer"><br/>
	<label for="job_title">Job Title</label><br/>
	<input type="text" name="job_title" id="job_title"><br/>
	<label for="employer_address">Employer Address</label><br>
	<input type="text" name="employer_address" id="employer_address"><br>
	<label for="employer_city">City</label><br>
	<input type="text" name="employer_city" id="employer_city"><br>
	<label for="employer_state">State</label><br>
	<input type="text" name="employer_state" id="employer_state"><br>
	<label for="employer_zip">Zip Code</label><br>
	<input type="text" name="employer_zip" id="employer_zip"><br>
	<label for="can_contact_work">May we contact you at work?</label><br/>
	
	<input type="radio" name="can_contact_work" id="yes_call" value="true">
	<label for="yes_can_contact_work">Yes</label>
	<input type="radio" name="can_contact_work" id="can_contact_work" value="false">
	<label for="no_can_contact_work">No</label><br/>
	
	<label for="work_length">Length of Employment</label><br/>
	<input type="text" name="work_length" id="work_length"><br>
	<label for="work_hours">Work Hours</label><br/>
	<input type="text" name="work_hours" id="work_hours"><br>
	<label for="highest_education">Highest Level of Education</label><br>
	<select name="highest_education">
		<option value="" disabled selected>Select</option>
		<option value="nohs">No High School</option>
		<option value="somehs">Some High School</option>
		<option value="hsdipl">High School Diploma</option>
		<option value="somecoll">Some College</option>
		<option value="assoc">Associates Degree</option>
		<option value="bachel">Bachelors Degree</option>
		<option value="masters">Masters Degree</option>
		<option value="doctor">Doctoral Degree (PhD)</option>
		<option value="juris">Juris Doctorate (JD)</option>
		<option value="med">Doctor of Medicine (MD)</option>
	</select><br/>
	<label for="years_completed">Years Completed</label><br/>
	<input type="text" name="years_completed" id="years_completed"><br>
	<label for="graduation_year">Year Graduated</label><br/>
	<input type="text" name="graduation_year" id="graduation_year"><br/>
	<br>
	
	<label>
		Have you lived in Virginia for the last 3 years?
	</label><br/>
	<input type="radio" name="ohio" value="yes" onchange="hide('no_ohio')"/>
	<label for="ohio">
		Yes
	</label>
	<input type="radio" name="ohio" value="no" onchange="show('no_ohio')"/>
	<label for="ohio">
		No
	</label><br/>
	<br/>
	<div id="no_ohio">
		<label for="prev_add_1_date">Dates</label><br/>
		<input type="text" id="prev_add_1_date" name="prev_add_1_date"/><br/>
		<label for="prev_add_1_add">Address</label><br/>
		<input type="text" id="prev_add_1_add" name="prev_add_1_add"/><br/>
		<label for="prev_add_2_date">Dates</label><br/>
		<input type="text" id="prev_add_2_date" name="prev_add_2_date"/><br/>
		<label for="prev_add_2_add">Address</label><br/>
		<input type="text" id="prev_add_2_add" name="prev_add_2_add"/><br/>
		<label for="prev_add_3_date">Dates</label><br/>
		<input type="text" id="prev_add_3_date" name="prev_add_3_date"/><br/>
		<label for="prev_add_3_add">Address</label><br/>
		<input type="text" id="prev_add_3_add" name="prev_add_3_add"/><br/>
	</div>
	
	<label>
		Do you have current or past military experience?
	</label><br/>
	<input type="radio" name="military_experience" value="yes" onchange="show('yes_milit')"/>
	<label for="military_experience">
		Yes
	</label>
	<input type="radio" name="military_experience" value="no" onchange="hide('yes_milit')"/>
	<label for="military_experience">
		No
	</label><br/>
	<br/>
	<div id="yes_milit">
		<label for="date_of_service">Dates of Service</label><br/>
		<input type="text" id="date_of_service" name="date_of_service"/><br/>
		<label for="military_branch">Branch</label><br>
    	<select name="military_branch">
    		<option value="" disabled selected>Select</option>
    		<option value="af">Air Force</option>
    		<option value="army">Army</option>
    		<option value="mc">Marine Corps</option>
    		<option value="navy">Navy</option>
    		<option value="cg">Coast Guard</option>
    		<option value="rotc">ROTC</option>
    	</select><br/>
    	<label for="military_status">Status</label><br>
    	<select name="military_status">
    		<option value="" disabled selected>Select</option>
    		<option value="active">Active</option>
    		<option value="national">National Guard</option>
    		<option value="reserve">Reserve</option>
    		<option value="retired">Retired</option>
    		<option value="discharged">Separated/Discharged</option>
    	</select><br/>
    	<label for="military_discharge">Character of Separation/Discharge</label><br>
    	<select name="military_discharge">
    		<option value="" disabled selected>Select</option>
    		<option value="honor">Honorable</option>
    		<option value="gen">General (under honorable conditons)</option>
    		<option value="other">Other than Honorable Conditions</option>
    		<option value="bad">Bad Conduct</option>
    		<option value="dis">Dishonorable</option>
    	</select><br/>
	</div>

	<input type="submit" name="bigsubmit" value="Submit App" class="GreenButton"/>
	</div>
</form>
<script>
document.getElementById('yes').style.display = 'none';
document.getElementById('otherPronouns').style.display = 'none';
document.getElementById('otherGender').style.display = 'none';
document.getElementById('yes_milit').style.display = 'none';
document.getElementById('no_ohio').style.display = 'none';
function show(id) {
	if (document.getElementById(id).style.display == 'none') {
		document.getElementById(id).style.display = 'block';
	}
	else {
		document.getElementById(id).style.display = 'none';
	}
}

function hide(id) {
	document.getElementById(id).style.display = 'none';
}
</script>