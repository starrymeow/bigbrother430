<div class="infoform">
	<h1>
		Little Application
	</h1>
	<form method="POST">
		<label for="adult_name">Parent/Guardian</label>
		<input type="text" name="adult_name"/><br/>
		<label for="relation">Relationship to child</label>
		<input type="text" name="relation"/><br/>
		<label for="legal_custody">Do you have legal custody of the child?</label>
		<input type="checkbox" name="legal_custody"><br>
		<label for="share_custody">Is there a person who shares legal custody of this child?</label>
		<input type="checkbox" name="share_custody" onclick="show('otherStuff')"/><br/>
		<div id="otherStuff">
    		<label for="other_supports_enrollment">If yes, are they aware and supportive of the child&apos;s enrollment in the BBBS program?:</label>
    		<input type="checkbox" name="other_supports_enrollment"/><br/>
    		<label for="other_name">Name</label>
    		<input type="text" name="other_name"/><br/>
    		<label for="other_phone">Phone</label>
    		<input type="tel" name="other_phone"><br>
		</div>
		<label for="first_name">Child&apos;s First Name:</label>
		<input type="text" name="first_name"/>
		
	</form>
	<script type="text/javascript">
	document.getElementById('otherStuff').style.display = 'none';
	function show(id) {
		if (document.getElementById(id).style.display == 'none') {
			document.getElementById(id).style.display = 'block';
		} 
		else {
			document.getElementById(id).style.display = 'none';
		}
			
		
	}
	</script>
</div>