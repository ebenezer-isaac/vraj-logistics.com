<html>
	<head>
		<?php include "parser.php"; ?>
		<link rel="stylesheet" type="text/css" href="../css/form.css">
		<title>Admin Page</title>
	</head>
	<body>
		<div style="margin: 30px 30px 30px 30px;">
			<form action="save_details.php" method="post" align='center'>
				<div style="margin: 30px 30px 30px 30px;">
					<fieldset>
						<legend>Main Information</legend>
						<div style="margin: 30px 30px 30px 30px;">
							<div>
								<label class="label-input100" for="title">Page Title&nbsp;&nbsp;<span>&nbsp;[&nbsp;title&nbsp;]&nbsp;</span></label>
								<div class="wrap-input100 ">
									<input id="title" class="input100" type="text" value="<?php echo $data["title"]; ?>" name="title" placeholder="Enter Text Here">
									<span class="focus-input100"></span>
								</div>
							</div>
							<br>
							<fieldset>
								<legend>Contact Information</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="phone1">Phone Number 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;phone1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="phone1" class="input100" type="text" value="<?php echo $data["phone1"]; ?>" name="phone1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="phone2">Phone Number 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;phone2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="phone2" class="input100" type="text" value="<?php echo $data["phone2"]; ?>" name="phone2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="phone3">Phone Number 3&nbsp;&nbsp;<span>&nbsp;[&nbsp;phone3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="phone3" class="input100" type="text" value="<?php echo $data["phone3"]; ?>" name="phone3" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="address">Address&nbsp;&nbsp;<span>&nbsp;[&nbsp;address&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="address" class="input100" name="address" placeholder="Enter Text Here"><?php echo $data["address"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</fieldset>
					<br>
							<fieldset>
								<legend>Page Information</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="index_heading1">Index Heading 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_heading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="index_heading1" class="input100" type="text" value="<?php echo $data["index_heading1"]; ?>" name="index_heading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_subheading1">Index Sub Heading 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_subheading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="index_subheading1" class="input100" type="text" value="<?php echo $data["index_subheading1"]; ?>" name="index_subheading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_heading2">Index Heading 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_heading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="index_heading2" class="input100" type="text" value="<?php echo $data["index_heading2"]; ?>" name="index_heading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_subheading2">Index Sub Heading 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_subheading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="index_subheading2" class="input100" type="text" value="<?php echo $data["index_subheading2"]; ?>" name="index_subheading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_heading">Summary Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="summary_heading" class="input100" name="summary_heading" placeholder="Enter Text Here"><?php echo $data["summary_heading"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_subheading">Summary Sub Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_subheading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="summary_subheading" class="input100" name="summary_subheading" placeholder="Enter Text Here"><?php echo $data["summary_subheading"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_pheading1">Summary Point 1 Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_pheading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											
											<input id="summary_pheading1" class="input100" type="text" value="<?php echo $data["summary_pheading1"]; ?>" name="summary_pheading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_psubheading1">Summary Point 1 SubHeading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_psubheading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											
											<input id="summary_psubheading1" class="input100" type="text" value="<?php echo $data["summary_psubheading1"]; ?>" name="summary_psubheading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_ptext1">Summary Point 1 text&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_ptext1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="summary_ptext1" class="input100" name="summary_ptext1" placeholder="Enter Text Here"><?php echo $data["summary_ptext1"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_pheading2">Summary Point 2 Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_pheading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
<input id="summary_pheading2" class="input100" type="text" value="<?php echo $data["summary_pheading2"]; ?>" name="summary_pheading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_psubheading2">Summary Point 2 SubHeading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_psubheading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											

<input id="summary_psubheading2" class="input100" type="text" value="<?php echo $data["summary_psubheading2"]; ?>" name="summary_psubheading2" placeholder="Enter Text Here">

											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_ptext2">Summary Point 2 text&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_ptext2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="summary_ptext2" class="input100" name="summary_ptext2" placeholder="Enter Text Here"><?php echo $data["summary_ptext2"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_pheading3">Summary Point 3 Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_pheading3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											
<input id="summary_pheading3" class="input100" type="text" value="<?php echo $data["summary_pheading3"]; ?>" name="summary_pheading3" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_psubheading3">Summary Point 3 SubHeading&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_psubheading3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
										
<input id="summary_psubheading3" class="input100" type="text" value="<?php echo $data["summary_psubheading3"]; ?>" name="summary_psubheading3" placeholder="Enter Text Here">

											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="summary_ptext3">Summary Point 3 text&nbsp;&nbsp;<span>&nbsp;[&nbsp;summary_ptext3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="summary_ptext3" class="input100" name="summary_ptext3" placeholder="Enter Text Here"><?php echo $data["summary_ptext3"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="features_heading">Features Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;features_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="features_heading" class="input100" type="text" value="<?php echo $data["features_heading"]; ?>" name="features_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>

									<div>
										<label class="label-input100" for="feature_heading1">Feature Heading 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_heading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="feature_heading1" class="input100" type="text" value="<?php echo $data["feature_heading1"]; ?>" name="feature_heading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="feature_text1">Feature Text 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_text1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
<textarea id="feature_text1" class="input100" name="feature_text1" placeholder="Enter Text Here"><?php echo $data["feature_text1"]; ?></textarea>

											
											<span class="focus-input100"></span>
										</div>
									</div>
									
									<div>
										<label class="label-input100" for="feature_heading2">Feature Heading 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_heading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="feature_heading2" class="input100" type="text" value="<?php echo $data["feature_heading2"]; ?>" name="feature_heading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="feature_text2">Feature Text 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_text2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<textarea id="feature_text2" class="input100" name="feature_text2" placeholder="Enter Text Here"><?php echo $data["feature_text2"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									
									<div>
										<label class="label-input100" for="feature_heading3">Feature Heading 3&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_heading3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="feature_heading3" class="input100" type="text" value="<?php echo $data["feature_heading3"]; ?>" name="feature_heading3" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="feature_text3">Feature Text 3&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_text3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<textarea id="feature_text3" class="input100" name="feature_text3" placeholder="Enter Text Here"><?php echo $data["feature_text3"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									
									<div>
										<label class="label-input100" for="feature_heading4">Feature Heading 4&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_heading4&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="feature_heading4" class="input100" type="text" value="<?php echo $data["feature_heading4"]; ?>" name="feature_heading4" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="feature_text4">Feature Text 4&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_text4&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<textarea id="feature_text4" class="input100" name="feature_text4" placeholder="Enter Text Here"><?php echo $data["feature_text4"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									
									<div>
										<label class="label-input100" for="feature_heading5">Feature Heading 5&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_heading5&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="feature_heading5" class="input100" type="text" value="<?php echo $data["feature_heading5"]; ?>" name="feature_heading5" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="feature_text5">Feature Text 5&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_text5&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<textarea id="feature_text5" class="input100" name="feature_text5" placeholder="Enter Text Here"><?php echo $data["feature_text5"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									
									<div>
										<label class="label-input100" for="feature_heading6">Feature Heading 6&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_heading6&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="feature_heading6" class="input100" type="text" value="<?php echo $data["feature_heading6"]; ?>" name="feature_heading6" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="feature_text6">Feature Text 6&nbsp;&nbsp;<span>&nbsp;[&nbsp;feature_text6&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<textarea id="feature_text6" class="input100" name="feature_text6" placeholder="Enter Text Here"><?php echo $data["feature_text6"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_map_placeID">Contact Map PlaceID&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_map_placeID&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="contact_map_placeID" class="input100" type="text" value="<?php echo $data["contact_map_placeID"]; ?>" name="contact_map_placeID" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="footer_heading">Footer Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;footer_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="footer_heading" class="input100" type="text" value="<?php echo $data["footer_heading"]; ?>" name="footer_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
						</div>	
				<br><br>
				<style>
					.save_button {
						  background-color: #4CAF50; /* Green */
						  border: none;
						  color: white;
						  padding: 15px 32px;
						  text-align: center;
						  text-decoration: none;
						  display: inline-block;
						  font-size: 16px;
						}
				</style>
				<input type="submit" class='save_button text-center' value="Save Details" align='center'>
			</form>
		</div>
	</body>
</html>