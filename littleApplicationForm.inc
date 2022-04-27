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
    		Child&apos;s Gender
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

		<label for="cell_phone">Guardian Phone #</label><br/>
		<input type="tel" name="cell_phone"/><br/>
		
		<label for="text_parent">Is it okay to text you (the guardian)?</label><br/>
		
		<input type="radio" name="can_text_cell" id="yes_text_parent" value="true">
		<label for="yes_text_parent">Yes</label>
		<input type="radio" name="can_text_cell" id="no_text_parent" value="false">
		<label for="no_text_parent">No</label><br/>

		<label for="child_phone">Child Phone #</label><br/>
		<input type="tel" name="child_phone"/><br/>

		<label for="text_child">Is it okay to text child?</label><br/>
		
		<input type="radio" name="text_child" value="yes_text_child">
		<label for="yes_textchild">Yes</label>
		<input type="radio" name="text_child" value="no_text_child">
		<label for="no_textchild">No</label><br/>
		

		<label for="home_address">Home Address:</label><br>
		<input type="text" name="address" id="home_address"><br>
		<label for="city">City</label><br>
		<input type="text" name="city" id="city"><br>
		<label for="state">State</label><br>
		<input type="text" name="state" id="state"><br>
		<label for="zip">Zip</label><br>
		<input type="text" name="zip" id="zip"><br>

		<label for="adult_email">Guardian E-mail:</label><br>
		<input type="text" name="adult_email" id="adult_email"><br>
		<label for="child_email">Child E-mail:</label><br>
		<input type="text" name="child_email" id="child_email"><br>

		<label for="school">Child&apos;s School:</label><br>
		
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
		
		<label for="place_employment">Guardian Place of Employment:</label>
		<input type="text" id="place_employment" name="place_employment"><br>
		
		<label for="work_phone">Guardian Work Phone #:</label>
		<input type="tel" id="work_phone" name="work_phone"><br>
		
		<label for="contact_at_work">May we contact you (the guardian) at the work number listed above?</label><br/>
		
		<input type="radio" name="contact_at_work" value="yes_contact_at_work">
		<label for="yes_textchild">Yes</label>
		<input type="radio" name="contact_at_work" value="no_contact_at_work">
		<label for="no_textchild">No</label><br/>

		<label for="best_contact">Please check the best number and time to contact you (the guardian)?</label><br/>
		
		<select name="best_place">
			<option value="" disabled selected>Select</option>
			<option value="home">Home</option>
			<option value="home">Cell</option>
			<option value="home">Work</option>
		</select>
		<select name="best_time">
			<option value="" disabled selected>Select</option>
			<option value="morning">Morning</option>
			<option value="afternoon">Afternoon</option>
			<option value="evening">Evening</option>
		</select><br/>

		<label>If we are unable to reach you, who is someone we could call who always knows how to reach you?</label><br>
		<label for="unable_name">Name</label><br/>
		<input type="text" name="unable_name" id="unable_name"><br/>
		<label for="unable_phone">Phone Number</label><br/>
		<input type="tel" name="unable_phone" id="unable_phone"><br>
		<br>

		<label for="apply_reason">What is the primary reason for you wanting your child to have a Big Brother or Big Sister?</label><br>
		<textarea name="apply_reason" rows="4" cols="30"></textarea><br>

		<label for="participate">Does your child know that you are applying for the program?</label><br/>		
		<input type="radio" name="participate" value="yes_participate">
		<label for="yes_textchild">Yes</label>
		<input type="radio" name="participate" value="no_participate">
		<label for="no_textchild">No</label><br/>

		<label>Where did you hear about Big Brothers Big Sisters? Please check all that apply.</label><br>
		<input type="checkbox" name="hear_school" value="School">
		<label for="hear_school">School</label><br/>
		<input type="checkbox" name="hear_relative" value="Relative">
		<label for="hear_relative">Friend or Family</label><br/>
		<input type="checkbox" name="hear_faith" value="Faith Organization">
		<label for="hear_faith">Religious Organization</label><br/>
		<input type="checkbox" name="hear_service" value="Service Organization">
		<label for="hear_service">Service Organization</label><br/>
   		<input type="checkbox" name="hear_website" value="Website">
   		<label for="hear_website">Online</label><br/>
   		<input type="checkbox" name="hear_tv" value="TV/Radio">
   		<label for="hear_tv">Television</label><br/>
   		<input type="checkbox" name="hear_event" value="Event">
   		<label for="hear_event">Event</label><br/>
   		<input type="checkbox" name="hear_other" value="Other">
   		<label for="hear_other">Other</label><br/>

		<label for="siblings">Does your child have siblings or relatives who are applying for the BBBS program at this time
		or who are currently in the program?</label><br/>
		<input type="radio" name="siblings" value="yes_siblings">
		<label for="yes_siblings">Yes</label>
		<input type="radio" name="siblings" value="no_siblings">
		<label for="no_siblings">No</label><br/>

		<label for="life_changes">Do you anticipate any significant life changes over the next year or have you had any in the past year, such as moving? If yes, please explain:</label><br>
		<textarea name="life_changes" rows="4" cols="30"></textarea><br/>

		<label>Will your child be able to meet with their Big 2-4 times per month for the next year</label><br/>
		<input type="radio" name="meet" value="yes_meet">
		<label for="yes_meet">Yes</label>
		<input type="radio" name="meet" value="no_meet">
		<label for="no_meet">No</label><br/>

		<label for="medical">Does your child have any medical conditions that might affect home or her participating in activities with a Big
		Brother/Big Sister? If yes, please explain:</label><br>
		<textarea name="medical" rows="4" cols="30"></textarea><br/>

		<label for="household">Number of people (adults and children) in household: </label><br/>
		<input type="number" name="household"/><br/>

		<label>Is the parent/guardian recieving income assistance at this time?</label><br/>
		<input type="radio" name="income_assist" value="yes_income_assist">
		<label for="yes_income_assist">Yes</label>
		<input type="radio" name="income_assist" value="no_income_assist">
		<label for="no_income_assist">No</label><br/>

		<label for="housing_assist">Is parent/guardian receiving assistance with housing (e.g. Section 8, residence in public-housing, etc.) If living in a housing development, please list the name: </label><br/>
		<input type="text" name="housing_assist" id="housing_assist"><br>

		<label>Is the child eligible for free or reduced lunch?</label><br/>
		<input type="radio" name="lunch" value="yes_lunch">
		<label for="yes_lunch">Yes</label>
		<input type="radio" name="lunch" value="no_lunch">
		<label for="no_lunch">No</label><br/>

		<label for="income">Household Annual Income: (total income of the adults the child lives with)</label><br>
		<select name="income">
    		<option value="0-$10,000">0-$10,000</option>
    		<option value="$10,001-$15,000">$10,001 - $15,000</option>
    		<option value="$15,001-$20,000">$15,001 - $20,000</option>
    		<option value="$20,001-$30,000">$20,001 - $30,000</option>
    		<option value="$30,001-$50,000">$30,001 - $50,000</option>
    		<option value="$50,001+">$50,001+</option>
		</select><br/>

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