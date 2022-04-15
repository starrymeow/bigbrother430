<div class="infoform">
	<h1>
		Little Application
	</h1>
	<form method="POST">
    	<div id="page1">
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
    		<input type="radio" name="no_text_parent" id="no_text_parent" value="no">
    		<label for="no_textparent">No</label>
    		<label for="parent_cell_provider">Cell Provider: </label>
    		<input type="text" name="parent_cell_provider" id="parent_cell_provider">
    		
    		<label for="text_parent">Is it okay to text child?</label>
    		<input type="radio" name="text_child" id="text_child" value="yes">
    		<label for="yes_textchild">Yes</label>
    		<input type="radio" name="text_child" id="no_text_child" value="no">
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