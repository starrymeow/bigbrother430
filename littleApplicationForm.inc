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
    		<input type="checkbox" name="hear_school" id="hear_school" value="School">
    		<label for="hear_school">School</label><br>
    		<input type="checkbox" name="hear_relative" id="hear_relative" value="Relative">
    		<label for="hear_relative">Relative</label><br>
    		<input type="checkbox" name="hear_faith" id="hear_faith" value="Faith Organization">
    		<label for="hear_faith">Faith Organization</label><br>
    		<input type="checkbox" name="hear_service" id="hear_service" value="Service Organization">
    		<label for="hear_service">Service Organization</label><br>
       		<input type="checkbox" name="hear_website" id="hear_website" value="Website">
       		<label for="hear_website">Website</label><br>
       		<input type="checkbox" name="hear_tv" id="hear_tv" value="TV/Radio">
       		<label for="hear_tv">TV/Radio</label><br>
       		<input type="checkbox" name="hear_event" id="event" value="Event">
       		<label for="hear_event">Event</label><br>
       		<input type="checkbox" name="hear_other" id="hear_other" value="Other">
       		<label for="hear_other">Other</label><br>
    		
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
			 <label for="air_force">Air Force</label>
 			 <input type="checkbox" name="army" id="army" value="Army">
 			 <label for="army">Army</label>
			 <input type="checkbox" name="marine" id="marine" value="Marine Corps">
			 <label for="marine">Marine</label>
			 <input type="checkbox" name="navy" id="navy" value="Navy">
 			 <label for="navy">Navy</label>			 
			 <input type="checkbox" name="coast" id="coast" value="Coast Guard Component">
 			 <label for="coast">Coast Guard Component</label>			 
			 
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
			 <label for="poor_grades">Poor Grades</label>
			 <input type="checkbox" name="poor_grades" id="poor_grades" value="Poor Grades"><br>
			 <label for="skipping">Skipping school/classes</label>
			 <input type="checkbox" name="skipping" id="skipping" value="Skipping school/classes"><br>
			 <label for="truant">Truant</label>
			 <input type="checkbox" name="truant" id="truant" value="Truant"><br>
			 <label for="behavior">Behavior problems </label>
			 <input type="text" name="behavior" id="behavior" value="Describe:"><br>
			 <label for="suspended">Has been suspended </label>
			 <input type="text" name="suspended" id="suspended" value="Reason for suspension:"><br>
			 <label for="expelled">Has been expelled </label>
			 <input type="text" name="expelled" id="expelled" value="Reason for expulsion:"><br>
			 <label for="alt_school">Sent to an alternative school </label>
			 <input type="text" name="alt_school" id="alt_school" value="Reason for school change:"><br>
			 
			 <p>
			 By signing below, I give permission: 
<br>1. For my child to participate in the Big Brothers Big Sisters Program;  
<br>2. For the volunteer matched with my child, who has been screened and approved by Big Brothers Big Sisters, to transport my child to  events and match activities; 
<br>3. For the school to provide social and academic information about my child to Big Brothers Big Sisters (e.g. report cards, behavior  reports);  
<br>4. To have my child participate in an in-take interview conducted by Big Brothers Big Sisters staff and complete questionnaires  throughout his/her time in the program containing questions about school, home life, and personal interests;  
<br>5. To have my child talk with a Big Brothers Big Sisters staff person about personal safety;  
<br>6. For BBBS staff to provide contact information for me and my child to the volunteer. 
<br>I understand that the program is not obligated to match my child with a volunteer and that as part of the enrollment process I will be asked  to provide additional information through an in-person interview. I understand that the information I provide in the enrollment process  will be kept confidential, unless disclosure is required by law and with exceptions noted. I understand that incidents of child abuse or  neglect, past or present, must be reported to proper authorities. I understand that certain relevant information about my child will be  discussed with the volunteer who is a prospective match (i.e. demographic information, information relevant to volunteer preferences, and  information relevant to child-safety and well-being). 
I certify that all of the information on this form is true and correct and that all income is reported. I understand this information is being  given for the receipt of federal funds, that the information on this application may be verified, and that deliberate misrepresentation of the  information may subject me to prosecution under applicable state and federal laws. I understand this information will not affect my  qualification for the program.  
I do hereby release the organization and its employees, agents, members, volunteers and all other persons on its behalf from any and all  liability for any damage or injury which such child might sustain while participating in said program and activities, including but not  limited to any liability to any right of action that may occur to such child directly, or to me as his/her guardian. I understand that this  information may be shared with the school or with partnership agencies when applicable. 
If my child is matched with a Big Brother or Big Sister I agree to support my child’s match by reviewing the program and safety  information given to me by Big Brothers Big Sisters, communicating with Big Brothers Big Sisters staff as outlined in expectations  (which includes communication at least once a month in the first year of the match), and immediately reporting any concerns I might have  to Big Brothers Big Sisters staff. 
			 </p><br>
			 <label for="permission_sig"><b>Parent/Guardian Signature: </b></label>
			 <input type="text" name="permission_sig" id="permission_sig"><br>
			 <label for="permission_sig_date"><b>Date: </b></label>
			 <input type="text" name="permission_sig_date" id="permission_sig_date"><br>
			 
			 <h2>ACCIDENT COVERAGE STATEMENT</h2>
			 <p>
			 Big Brothers Big Sisters of Central Carolinas provides limited automobile insurance coverage for program participants (Big volunteer/Little-youth). The following sets forth those limitations. 
In the event that a Little Brother/Little Sister is involved in an automobile accident while transported by an active Big  volunteer, BBBS has a comprehensive insurance program that provides coverage in the event the Big is at fault. If, however,  the Big is not at-fault, the person(s) designated at-fault, or his or her insurance company, would be liable for damages or  injuries as a result of said accident. Should the person(s) at-fault not have insurance or not have sufficient insurance to  compensate for the injury suffered as a result of the accident, BBBS’s insurance will not cover the accident and responsibility  for any expenses resulting from the accident may fall on the parent/child or their insurance company. 
  
My signature below acknowledges that I have read and understood the above information regarding insurance coverage and  that I hereby release BBBS from any liability for such incidents not covered by BBBS’s insurance.
			 </p><br>
			 
			 <label for="insurance_sig">Parent&apos;s Signature</label>
			 <input type="text" name="insurance_sig" id="insurance_sig"><br>
			 
			 <h1 style="text decoration: underline;"><b>PARENTAL/GUARDIAN PUBLICITY CONSENT FORM</b></h1>
			 
			 <p><b>I do hereby authorize Big Brothers Big Sisters of Central Carolinas</b> to use my or my child’s image and voice, including photos and  videos, for publicity purposes to promote the Big Brothers Big Sisters of Central Carolinas program. The images/voices may be used in  various promotional materials (such as our website), news media publicity, Facebook, and Twitter. 
It is my understanding that first names, images/voices may be used by BBBSGC corporate partners. 
I agree that there will be no compensation whatsoever for this participation or for the use of resulting materials by Big Brothers Big  Sisters. 
Big Brothers Big Sisters of Central Carolinas unconditionally releases me from all liabilities or claims that may result from the existence  and use of any such materials.  
			 </p><br>
			 
			 <label for="consent_child_name">Child&apos;s name </label>
			 <input type="text" name="consent_child_name" id="consent_child_name"><br>
			 <label for="consent_parent_name">Parent/Guardian printed name </label>
			 <input type="text" name="consent_parent_name" id="consent_parent_name"><br>
			 <label for="consent_parent_sig">Signed (Parent of Guardian) </label>
			 <input type="text" name="consent_parent_sig" id="consent_parent_sig"><br>
			 <label for="consent_date">Date </label>
			 <input type="text" name="consent_date" id="consent_date"><br>
			 <p>First and last names may be used (please check if consent given)</p>
			 <br><br>
			 
			 <p><b>I do not consent to the use of my or my child&apos;s name, image or voice</b></p><br>
			 <label for="no_consent_child_name">Child&apos;s name </label>
			 <input type="text" name="no_consent_child_name" id="no_consent_child_name"><br>
			 <label for="no_consent_parent_name">Parent/Guardian printed name </label>
			 <input type="text" name="no_consent_parent_name" id="no_consent_parent_name"><br>
			 <label for="no_consent_parent_sig">Signed (Parent of Guardian) </label>
			 <input type="text" name="no_consent_parent_sig" id="no_consent_parent_sig"><br>
			 <label for="no_consent_date">Date </label>
			 <input type="text" name="no_consent_date" id="no_consent_date"><br>
			 
			 <h2>MEDICAL RELEASE FORM</h2><br>
			 <h2>AUTHORIZATION FOR MEDICAL TREATMENT OF A MINOR</h2><br>
			 <p>I/we do hereby state that I am (we are) parent/legal guardian of:</p><br>
			 <label for="medical_child_name">Name of child: </label>
			 <input type="text" name="medical_child_name" id="medical_child_name">
			 <label for="medical_dob">Date of Birth: </label>
			 <input type="text" name="medical_dob" id="medical_dob"><br>
			 <label for="allergies">Allergies: </label>
			 <input type="text" name="allergies" id="allergies"><br>
			 <label for="medications">Current Medications: </label>
			 <input type="text" name="medications" id="medications"><br>	
			 <label for="authorize">I do hereby authorize: </label>
			 <input type="text" name="authorize" id="authorize"><br>
			 <label for="medical_address">Address: </label>
			 <input type="text" name="medical_address" id="medical_address"><br>
			 <label for="medical_number">Number: </label>
			 <input type="text" name="medical_number" id="medical_number"><br>
			 
			 <h3><b>Parent, please read in full before signing!</b></h3><br>
			 <p>I grant the above mentioned adult to have temporary custody and responsibility for the care of the above-name minor,
			  to  consent to any X-rays, physical examination, medication, anesthetic, medical or surgical diagnosis or treatment, 
			  and hospital  care to be rendered to the minor under the general or special supervision and on the advice of any licensed physician
			   or  surgeon when the need for such treatment is immediate and only after efforts have been made to contact me/us are unsuccessful. 
			   I/We will not hold the temporary custodian, physician, or hospital providing care responsible for action taken  in good faith in presenting 
			   the above named child for care or providing examination. This authorization shall be valid when  my child is in the temporary custody and care of 
			   the Big Brother or Big Sister or any BBBS agency representative or in  attendant at any Big Brothers Big Sisters Group activity.
			 </p><br>
			 <input type="text" name="medical_sig" id="medical_sig">
			 <label for="medical_parent_name">Parent/Guardian Printed Name: </label>
			 <input type="text" name="medical_parent_name" id="medical_parent_name"><br>
			 <label for="medical_parent_address">Address: </label>
			 <input type="text" name="medical_parent_address" id="medical_parent_address"><br>
			 <label for="medical_emergency_contact">Emergency Contact: </label>
			 <input type="text" name="medical_emergency_contact" id="medical_emergency_contact"><br>
			 <label for="medical_emergency_number">Emergency Contact Phone: </label>
			 <input type="text" name="medical_emergency_number" id="medical_emergency_number"><br>
			 <label for="medical_physician">Child&apos;s Physician: </label>
			 <input type="text" name="medical_physician" id="medical_physician"><br>
			 <label for="medical_insurance">Insurance Company: </label>
			 <input type="text" name="medical_insurance" id="medical_insurance"><br>
			 <label for="medical_id">ID/Contract Number: </label>
			 <input type="text" name="medical_id" id="medical_id">    	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
    		 
    		
			 
			
			 
			 
			
    		
    		
    		
    		
    		
    		
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