<div class="infoform">
	<h1>
		Little Application
	</h1>
	<form method="POST">
    	<div id="page1">
    		<input type="hidden" name="_submit_check" value="true">
    		<label for="adult_name">Parent/Guardian</label><br/>
    		<input type="text" name="adult_name"/><br/>

    		<label for="relation">Relationship to child</label><br/>
    		<input type="text" name="relation"/><br/>

    		<label>
    			Do you have legal custody of the child?</label><br/>
    			<label for="yes">
    				<input type="radio" name="legal_custody" value="yes"/>
    				Yes
    			</label>
    			<label for="yes">
    				<input type="radio" name="legal_custody" value="no"/>
    				No
    			</label>
    		<br/>
    		<label>
    			Is there a person who shares legal custody of this child? </label><br/>
    			<label for="yes">
    				<input type="radio" name="share_custody" value="yes" onchange="show('otherStuff')"/>
    				Yes
    			</label>
    			<label for="yes">
    				<input type="radio" name="share_custody" value="no" onchange="hide('otherStuff')"/>
    				No
    			</label>
    		<br/>
    		
    		<div id="otherStuff">    		
        		<label>
    			Are they aware and supportive of the child&apos;s enrollment in the BBBS program?: </label><br/>
    			<label for="yes">
    				<input type="radio" name="other_supports_enrollment" value="yes"/>
    				Yes
    			</label>
    			<label for="yes">
    				<input type="radio" name="other_supports_enrollment" value="no"/>
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

    		<label for="preffered_name">Preffered Name/Nickname</label><br/>
    		<input type="text" name="preffered_name"/><br/>

    		<label>
        		Child&apos;s Gender</label><br/>
        		<label for="gender1">
        			<input type="radio" name="child_gender" id="gender1" value="male" onchange="hide('otherGender')"/>
        			Male
        		</label>

        		<label for="gender2">
        			<input type="radio" name="child_gender" id="gender2" value="female" onchange="hide('otherGender')"/>
        			Female
        		</label>

        		<label for="gender3">
        			<input type="radio" name="child_gender" id="gender3" value="Other" onchange="show('otherGender')"/>
        			Other
        		</label><br/>
    		<br/>
    		<div id="otherGender">
    			<label for="otherGender">Please Specify</label><br/>
    			<input type="text" name="otherGender"/>
    		</div>

    		<label for="child_dob">Child Date of Birth</label><br/>
    		<input type="date" name="child_dob"/><br/>

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

    		<label for="parent_phone">Parent Phone #</label><br/>
    		<input type="tel" name="parent_phone"/><br/>

    		<label for="child_phone">Child Phone #</label><br/>
    		<input type="tel" name="child_phone"/><br/>
    		
    		<label for="text_parent">Is it okay to text parent?</label>
    		<input type="radio" name="text_parent" id="text_parent" value="yes">
    		<label for="yes_textparent">Yes</label>
    		<input type="radio" name="text_parent" id="text_parent" value="no">
    		<label for="no_textparent">No</label>
    		<label for="parent_cell_provider">Cell Provider: </label>
    		<input type="text" name="parent_cell_provider" id="parent_cell_provider">
    		
    		<label for="text_parent">Is it okay to text child?</label>
    		<input type="radio" name="text_child" id="text_child" value="yes">
    		<label for="yes_textchild">Yes</label>
    		<input type="radio" name="text_child" id="text_child" value="no">
    		<label for="no_textparent">No</label>
    		<label for="child_cell_provider">Cell Provider: </label>
    		<input type="text" name="child_cell_provider" id="child_cell_provider"><br>
    		
    		<label for="home_address">Home Address:</label><br>
    		<input type="text" name="home_address" id="home_address"><br>
    		<label for="city">City:</label><br>
    		<input type="text" name="city" id="city"><br>
    		<label for="county">County:</label><br>
    		<input type="text" name="county" id="county"><br>
    		<label for="state">State:</label><br>
    		<input type="text" name="state" id="state"><br>
    		<label for="zip">Zip:</label><br>
    		<input type="text" name="zip" id="zip"><br>
    		
    		<label for="adult_email">Parent/Guardian E-mail:</label><br>
    		<input type="text" name="adult_email" id="adult_email"><br>
    		<label for="child_email">Child E-mail:</label><br>
    		<input type="text" name="child_email" id="child_email"><br>
    		
    		<label for="school">Child&apos; School:</label><br>
    		<input type="text" name="school" id="school"><br>
    		<label for="grade">Grade:</label><br>
    		<input type="text" name="grade" id="grade"><br>
    		<label for="student_id">Student ID Number:</label><br>
    		<input type="text" name="student_id" id="student_id"><br>
    		
    		<label for="race">Child's Race/Ethnicity:</label><br>
    		<input type="button" name="child_race" id="american">
    		<label for="american">American Indian or Alaska</label><br>
    		<input type="button" name="child_race" id="asian">
    		<label for="asian">Native Asian</label><br>
    		<input type="button" name="child_race" id="african">
    		<label for="african">Black or African American</label><br>
    		<input type="button" name="child_race" id="latin">
    		<label for="latin">Hispanic or latino</label><br>
    		<input type="button" name="child_race" id="pacific">
    		<label for="pacific">Native Hawaiian or Pacific</label><br>
    		<input type="button" name="child_race" id="white">
    		<label for="white">Islander White</label><br>
    		<input type="button" name="child_race" id="other">
    		<label for="other">Other</label><br>
    		
    		<label for="multi">Multi-race (check all that apply)</label><br>
    		<input type="checkbox" id="american1" name="american1" value="American">
    		<label for="american1">American Indian or Alaska Native</label><br>
    		<input type="checkbox" id="asian1" name="asian1" value="Asian">
    		<label for="asian1">Native Asian</label><br>
    		<input type="checkbox" id="african1" name="african1" value="African">
    		<label for="african1">Black or African American</label><br>
    		<input type="checkbox" id="latin1" name="latin1" value="Latin">
    		<label for="latin1">Hispanic or Latino</label><br>
    		<input type="checkbox" id="pacific1" name="pacific1" value="Pacific">
    		<label for="pacific1">Native Hawaiian or Pacific</label><br>
    		<input type="checkbox" id="white1" name="white1" value="White">
    		<label for="white1">Islander White</label><br>
    		
    		<label for="origin">Nationality/Country of Origin:</label>
    		<input type="text" id="origin" name="origin"><br>
    		<label for="place_employment">Parent Place of Employment:</label>
    		<input type="text" id="place_employment" name="place_employment"><br>
    		<label for="work_phone">Parent Work Phone #:</label>
    		<input type="text" id="work_phone" name="work_phone"><br>
    		<label for="contact_at_work">May we contact you(the parent/guardian) at the work number listed above?</label>
    		<input type="button" name="contact_at_work" id="yes_contact_at_work">
    		<label for="contact_at_work">Yes</label>
    		<input type="button" name="contact_at_work" id="no_contact_at_work">
    		<label for="contact_at_work">No</label><br>
    		
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
    		<input type="text" name="reason" id="reason"><br>
    		
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
    		<input type="text" name="sig_changes" id="sig_changes">
    		
    		<p>6. Will your child be able to meet with their Big 2-4 timers per month for the next year</p>
    		<input type="button" name="meet" id="meet" value="yes">
    		<label for="meet">Yes</label>
    		<input type="button" name="meet" id="meet" value="no">
    		<label for="meet">No</label><br>
    		
    		<p>7. Does your child have any medical conditions that might affect home or her participating in activities with a Big
    		Brother/Big Sister?<br>Yes No If yes, please explain:</p><br>
    		<input type="text" name="medical" id="medical"><br>
    		
    		<p>8. Number of people (adults and children) in household: </p>
    		<input type="text" name="household" id="household">
    		
    		<p>9. Is the parent/guardian recieving income assistance at this time?</p><br>
    		<input type="button" name="income_assist" id="income_assist" value="yes">
    		<label for="income_assist">Yes</label>
    		<input type="button" name="income_assist" id="income_assist" value="no">
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
			 <input type="button" name="retired" id="retired" value="yes">
    		 <label for="retired">Yes</label>
    		 <input type="button" name="retired" id="retired" value="no">
    		 <label for="retired">No</label><br>
    		 
    		 <p>Is the parent separated/discharged (other than retired)?</p>
			 <input type="button" name="discharged" id="discharged" value="yes">
    		 <label for="discharged">Yes</label>
    		 <input type="button" name="discharged" id="discharged" value="no">
    		 <label for="discharged">No</label><br>
    		 
    		 <p>Does your child have a parent/caregiver that is considered fallen, wounded or disabled</p>
			 <input type="button" name="disabled" id="disabled" value="yes">
    		 <label for="disabled">Yes</label>
    		 <input type="button" name="disabled" id="disabled" value="no">
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
</div>