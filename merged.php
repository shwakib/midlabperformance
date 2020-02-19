 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form</title>
 </head>
 <body>
 	<form method="POST" action="test.php">
 		<fieldset>

 			<table border="1px" align="center" border-spacing='5px's>
 				<tr>
 					<td colspan="3" align="center"><h2>PERSON PROFILE</h2></td>
 				</tr>

 				<tr>
 					<td>
 						Name
 					</td>
 					<td>
 						<input type="text" name="name">
 					</td>
 					<td>
 						
 					</td>
 				</tr>
 				<tr>
					<td>
						Email
					</td>
					<td>
						<input type="Email" name="uemail">
					</td>
					<td>
						
					</td>
				</tr>

				<tr>
					<td>
					Gender
					</td>
					<td>
						<input type="radio" name="Gender" value="Male">Male
						<input type="radio" name="Gender" value="Female">Female
						<input type="radio" name="Gender" value="Others">Others

					</td>
					<td>
						
					</td>
				</tr>

				<tr>
					<td>
						Date Of Birth
					</td>
					<td>
						<input type="text" size="4" name="date">/
						<input type="text" size="4" name="mm">/
						<input type="text" size="4" name="year"> (dd/mm/yyyy)

					</td>
					<td>
						
					</td>

				</tr>

				<tr>
					<td>
						Blood Group
					</td>

					<td>
						<select>
							<option>A+</option>
							<option>AB+</option>
							<option>B+</option>
							<option>O+</option>
						</select>
					</td>
					<td>
						
					</td>
				</tr>

				<tr>
					
					<td>
						Degree
					</td>
					<td>
						<input type="checkbox" name="">SSC
						<input type="checkbox" name="">HSC
						<input type="checkbox" name="">BSc.
						<input type="checkbox" name="">MSc.
					</td>
					<td>
						
					</td>
				</tr>

				<tr>
					<td>
						Photo
					</td>
					<td colspan="2">
						<input type="file" name="photo" value="Browse...">
					</td>
					
				</tr>

				<tr width="50">
					<td colspan="3">
						
					</td>
				</tr>
				<tr>
					<td colspan="3" align="right">
						<input type="submit" name="submit" value="Submit">
						<input type="reset" name="reset" value="Reset">
					</td>

				</tr>






 				
 			</table>

 		</fieldset>

 	</form>
 </body>
 </html>