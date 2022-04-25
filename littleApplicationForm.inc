<form method="POST">
<div id="page1">
    <input type="hidden" name="_submit_check" value="true">
    <label for="adult_name">Parent/Guardian Name</label><br/>
    <input type="text" name="adult_name"/><br/>

    <label for="relation">Relationship to child</label><br/>
    <input type="text" name="relation"/><br/>

    <label>
    	Do you have legal custody of the child?</label><br/>
    	<label for="yes">
    		<input type="radio" name="legal_custody" value="true"/>
    		Yes
    	</label>
    	<label for="no">
    		<input type="radio" name="legal_custody" value='false'/>
    		No
		</label>
		<br/>
		<label>
			Is there a person who shares legal custody of this child? </label><br/>
			<label for="yes">
				<input type="radio" name="share_custody" value="true" onchange="show('otherStuff')"/>
				Yes
			</label>
			<label for="no">
				<input type="radio" name="share_custody" value="false" onchange="hide('otherStuff')"/>
				No
			</label>
		<br/>

		<div id="otherStuff">
    		<label>
			Are they aware and supportive of the child&apos;s enrollment in the BBBS program?: </label><br/>
			<label for="yes">
				<input type="radio" name="other_supports_enrollment" value="true"/>
				Yes
			</label>
			<label for="yes">
				<input type="radio" name="other_supports_enrollment" value="false"/>
				No
			</label>
		<br/>
    		<label for="other_name">Name</label><br/>
       		<input type="text" name="other_name"/><br/>

    		<label for="other_phone">Phone</label><br/>
    		<input type="tel" name="other_phone"><br/>

		</div>

		<label for="first_name">Child&apos;s First Name</label><br/>
		<input type="text" name="first_name"/><br/>

		<label for="middle_name">Middle Name</label><br/>
		<input type="text" name="middle_name"/><br/>

		<label for="last_name">Last Name</label><br/>
		<input type="text" name="last_name"/><br/>

		<label for="preferred_name">Preferred Name/Nickname</label><br/>
		<input type="text" name="preferred_name"/><br/>

		<label>
    		Child&apos;s Gender</label><br/>
    		<label for="gender1">
    			<input type="radio" name="gender" id="gender1" value="male" onchange="hide('otherGender')"/>
    			Male
    		</label>

    		<label for="gender2">
    			<input type="radio" name="gender" id="gender2" value="female" onchange="hide('otherGender')"/>
    			Female
    		</label>

    		<label for="gender3">
    			<input type="radio" name="gender" id="gender3" value="Other" onchange="show('otherGender')"/>
    			Other
    		</label><br/>
		<br/>
		<div id="otherGender">
			<label for="otherGender">Please Specify</label><br/>
			<input type="text" id="otherGender" name="gender"/>
		</div>

		<label for="birthday">Child Date of Birth</label><br/>
		<input type="date" name="birthday"/><br/>

		<label for="living_situation">What is the child&apos;s living situation?</label><br>
		<select name="living_situation">
			<option value="" disabled selected>Select</option>
			<option value="2ph">Two-parent household</option>
			<option value="1ph">One-parent household</option>
			<option value="sc">Shared Custody</option>
			<option value="or">Other relative of child (non-parent)</option>
			<option value="f">Foster Home</option>
			<option value="gh">Group Home</option>
			<option value="o">Other</option>
		</select><br/>

		<label for="home_phone">Home Phone #</label><br/>
		<input type="tel" name="home_phone"/><br/>

		<label for="cell_phone">Parent Phone #</label><br/>
		<input type="tel" name="cell_phone"/><br/>
		
		<label for="text_parent">Is it okay to text parent?</label><br/>
		
		<input type="radio" name="can_text_cell" id="yes_text_parent" value="true">
		<label for="yes_text_parent">Yes</label>
		<input type="radio" name="can_text_cell" id="no_text_parent" value="false">
		<label for="no_text_parent">No</label><br/>

		<label for="child_phone">Child Phone #</label><br/>
		<input type="tel" name="child_phone"/><br/>

		<label for="text_child">Is it okay to text child?</label><br/>
		
		<input type="radio" name="text_child" id="text_child" value="true">
		<label for="yes_textchild">Yes</label>
		<input type="radio" name="text_child" id="text_child" value="false">
		<label for="no_textchild">No</label><br/>
		

		<label for="home_address">Home Address:</label><br>
		<input type="text" name="address" id="home_address"><br>
		<label for="city">City</label><br>
		<input type="text" name="city" id="city"><br>
		<label for="state">State</label><br>
		<input type="text" name="state" id="state"><br>
		<label for="zip">Zip</label><br>
		<input type="text" name="zip" id="zip"><br>

		<label for="adult_email">Parent/Guardian E-mail:</label><br>
		<input type="text" name="adult_email" id="adult_email"><br>
		<label for="child_email">Child E-mail:</label><br>
		<input type="text" name="child_email" id="child_email"><br>

		<label for="school">Child&apos; School:</label><br>
		
		<input type="text" name="school" id="school"><br>
		
		<label for="grade">Grade Level:</label><br>
		
		<select name="grade">
			<option value="" disabled selected>Select</option>
			<option value="prek">Pre-K</option>
			<option value="kin">Kindergarten</option>
			<option value="1">1st Grade</option>
			<option value="2">2nd Grade</option>
			<option value="3">3rd Grade</option>
			<option value="4">4th Grade</option>
			<option value="5">5th Grade</option>
			<option value="6">6th Grade</option>
			<option value="7">7th Grade</option>
			<option value="8">8th Grade</option>
			<option value="9">9th Grade</option>
			<option value="10">10th Grade</option>
			<option value="11">11th Grade</option>
			<option value="12">12th Grade</option>
		</select><br/>
		
		<label for="student_id">Student ID Number:</label><br>
		<input type="text" name="student_id" id="student_id"><br>

		<label for="race">Child's Race/Ethnicity:</label><br>
		<select name="race">
			<option value="" disabled selected>Select</option>
			<option value="african">Black or African American</option>
			<option value="latin">Hispanic or latino</option>
			<option value="caucasian">Caucasian</option>
			<option value="asian">Asian</option>
			<option value="american">Native American or Alaskan</option>
			<option value="pacific">Native Hawaiian or Pacific Islander</option>
			<option value="other">Other</option>
		</select><br/>

		<label for="origin">Nationality/Country of Origin:</label>
		<input type="text" id="origin" name="origin"><br>
		
		<label for="place_employment">Parent Place of Employment:</label>
		<input type="text" id="place_employment" name="place_employment"><br>
		
		<label for="work_phone">Parent Work Phone #:</label>
		<input type="text" id="work_phone" name="work_phone"><br>
		
		<label for="contact_at_work">May we contact you(the parent/guardian) at the work number listed above?</label><br/>
		
		<input type="radio" name="contact_at_work" id="yes_contact_at_work">
		<label for="yes_textchild">Yes</label>
		<input type="radio" name="contact_at_work" id="no_contact_at_work">
		<label for="no_textchild">No</label><br/>

		<label for="best_contact">Please check the best number and time to contact you (the parent/guardian)?</label><br>
		<input type="button" name="best_place" id="best_place" value="home">
		<label for="best_home">Home</label>
		<input type="button" name="best_place" id="best_place" value="cell">
		<label for="best_cell">Cell</label>
		<input type="button" name="best_place" id="best_place" value="work">
		<label for="best_work">Work</label><br>
		<input type="button" name="best_time" id="best_time" value="morning">
		<label for="best_morning">Morning</label>
		<input type="button" name="best_time" id="best_time" value="afternoon">
		<label for="best_afternoon">Afternoon</label>
		<input type="button" name="best_time" id="best_time" value="evening">
		<label for="best_evening">Evening</label><br>

		<p>If we are unable to reach you, who is someone we could call who always knows how to reach you?</p><br>
		<label for="unable_name">Name: </label>
		<input type="text" name="unable_name" id="unable_name"><br>
		<label for="unable_phone">Phone Number: </label>
		<input type="text" name="unable_phone" id="unable_phone"><br>
		<br>

		<p>1. What is the primary reason for you wanting your child to have a Big Brother or Big Sister?</p><br>
		<input type="text" name="apply_reason" id="reason"><br>

		<p>2. Does your child know that you are applying for the program? Does your child want to participate?</p><br>
		<input type="text" name="participate" id="participate"><br>

		<p>3. Where did you hear about Big Brothers Big Sisters? Please check all that apply and provide details in space given.</p><br>
		<input type="checkbox" name="hear_school" id="hear_school" value="School"><br>
		<input type="checkbox" name="hear_relative" id="hear_relative" value="Relative"><br>
		<input type="checkbox" name="hear_faith" id="hear_faith" value="Faith Organization"><br>
		<input type="checkbox" name="hear_service" id="hear_service" value="Service Organization"><br>
   		<input type="checkbox" name="hear_website" id="hear_website" value="Website"><br>
   		<input type="checkbox" name="hear_tv" id="hear_tv" value="TV/Radio"><br>
   		<input type="checkbox" name="hear_event" id="event" value="Event"><br>
   		<input type="checkbox" name="hear_other" id="hear_other" value="Other"><br>

		<p>4. Does your child have siblings or relatives who are applying for the BBBS program at this time
		or who are currently in the program?<br>Yes No If yes, please explain:</p><br>
		<input type="text" name="siblings" id="siblings"><br>

		<p>5. Do you anticipate any significant life changes over the next year or have you had any in the past year, such as moving?<br>Yes No If yes, please explain:</p><br>
		<input type="text" name="life_changes" id="sig_changes">

		<p>6. Will your child be able to meet with their Big 2-4 timers per month for the next year</p>
		<input type="button" name="meet" id="meet" value="true">
		<label for="meet">Yes</label>
		<input type="button" name="meet" id="meet" value="false">
		<label for="meet">No</label><br>

		<p>7. Does your child have any medical conditions that might affect home or her participating in activities with a Big
		Brother/Big Sister?<br>Yes No If yes, please explain:</p><br>
		<input type="text" name="medical" id="medical"><br>

		<p>8. Number of people (adults and children) in household: </p>
		<input type="text" name="household" id="household">

		<p>9. Is the parent/guardian recieving income assistance at this time?</p><br>
		<input type="button" name="income_assist" id="income_assist" value="true">
		<label for="income_assist">Yes</label>
		<input type="button" name="income_assist" id="income_assist" value="false">
		<label for="income_assist">No</label><br>

		<p>10. Is parent/guardian receiving assistance with housing (e.g. Section 8, residence in public-housing, etc.)? Yes No If living in a housing development, please list the name: </p>
		<input type="text" name="housing_assist" id="housing_assist"><br>

		<p>11. Is child eligible for free or reduced lunch? Yes - Free Yes - Reduced No</p>
		<input type="text" name="lunch" id="lunch"><br>

		<p>12. Household Annual Income: (total income of the adults the child lives with)
		0-$10,000 $10,001-$15,000 $15,001-$20,000 $20,001-$30,000 $30,001-$50,000 $50,001+ </p><br>
		<select name="income" id="income">
		<option value="0-$10,000">0-$10-000</option>
		<option value="$10,001-$15,000">$10,001-$15-000</option>
		<option value="$15,001-$20,000">$15,001-$20,000</option>
		<option value="$20,001-$30,000">$20,001-$30,000</option>
		<option value=$30,001-$50,000">30,001-$50,000</option>
		<option value="$50,001+">$50,001+</option>
		</select>

		<p>13. Does your child have a parent/caregiver with current or past military experience? Yes No If yes, please list dates of service: </p>
		<input type="text" name="service_dates" id="service_dates">
		<label for="branch">Branch: </label>
		<input type="checkbox" name="air_force" id="air_force" value="Air Force">
		<input type="checkbox" name="army" id="army" value="Army">
		<input type="checkbox" name="marine" id="marine" value="Marine Corps">
		<input type="checkbox" name="navy" id="navy" value="Navy">
		<input type="checkbox" name="coast" id="coast" value="Coast Guard Component">

		<p>Is the parent currently deployed? If yes, please put the date of deployment</p><br>
		<input type="text" name="deploy_dates" id="deploy_dates"><br>
		<p>Is the parent retired from the military?</p>
		<input type="button" name="retired" id="retired" value="true">
		<label for="retired">Yes</label>
		<input type="button" name="retired" id="retired" value="false">
		<label for="retired">No</label><br>

		<p>Is the parent separated/discharged (other than retired)?</p>
		<input type="button" name="discharged" id="discharged" value="true">
		<label for="discharged">Yes</label>
		<input type="button" name="discharged" id="discharged" value="false">
		<label for="discharged">No</label><br>

		<p>Does your child have a parent/caregiver that is considered fallen, wounded or disabled</p>
		<input type="button" name="disabled" id="disabled" value="true">
		<label for="disabled">Yes</label>
		<input type="button" name="disabled" id="disabled" value="false">
		<label for="disabled">No</label><br>

		<p>14. Does your child have a parent/guardian who is currently incarcerated? Yes No
		If yes, please explain: </p>
		<input type="text" name="incarcerated" id="incarcerated">
		<p>15. Has your child ever been arrested or involved in the juvenile justice system?
		Yes. Please explain: No </p>
		<input type="text" name="juvenile" id="juvenile">

		<p>16. Within the last year, has your child been in any trouble at school?</p>
		<select name="trouble" id="trouble">

		</select>














		<input type="submit" name="littlesubmit" value="Submit App" class="GreenButton"/>
	</div>
</form>
<script type="text/javascript">
document.getElementById('otherStuff').style.display = 'none';
document.getElementById('otherGender').style.display = 'none';
document.getElementById('page2').style.display = 'none';
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