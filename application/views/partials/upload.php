
    <section class="container">
		<div class="row">
			<div class="col-sm-8  col-md-offset-2">
				<!-- Upload thingy script -->
				<script src="http://49video.resources.s3.amazonaws.com/uploadthingy.js" type="text/javascript" language="Javascript"></script>					<iframe id="uploadtarget" name="uploadtarget" src="" style="width:0px;height:0px;border:0"></iframe>
				<div id='dataarea'></div>
				<div id='uploadarea' style="min-height: 250px;"><p><img src=http://49video.resources.s3.amazonaws.com/loading.gif width=16 height=16>  One moment please .....<br><br>If your upload form doesn't display within a few seconds, please try again later or contact us at info@mailers.com. We'd love to help out!</p></div>

				<script type="text/javascript" language="Javascript">
					var accept_formats="We accept Digital Art in the following file format: .TIF, .TIFF, .EPS, .AI, .PSD, .JPG, .PNG & .PDF.<br>Mailing list should be in ASCII Delim, Excell or DBF format.<br />";
					var Terms="<hr /><span class='title4'>Terms and Conditions</span><br>I have verified that spelling and content are correct. I am satisfied with the document layout. I understand that my document will print EXACTLY as it appears here, that I cannot make any changes once my order is placed and that I assume all responsibility for typographical errors. <b>By clicking on the Upload Button I accept and agree to the terms and conditions of Full Service Mailers, Inc.</b><br><hr />";
					var files="Files - Click on browse button to select Digital Art and Mailing list file. <br>";
					var message_box="";
					var sitecode="bWFpbGVycy5jb20=";
				
					authupload();
					function getUploadForm(json) {
						showblinks=false;
						 var h="";
						 h+="<p style='color:black;'>Your name *<br><input type=text style='width:400px;' id='uploader_name' name='uploader_name'></p>";
						 h+="<p style='color:black;'>Your Email *<br><input type=text style='width:400px;' id='uploader_company' name='uploader_company'></p>";
						 h+="<p style='color:black;'>Enter Quantity *<br><input type=text style='width:70px;' id='uploader_contact' name='uploader_contact'></p>";
						 h+="<p style='color:black;'>Please Enter additional Instructions<br><textarea style='width:400px; height:75px;' id='uploader_description' name='uploader_description'>"+message_box+"</textarea></p>";
						 h+="<p style='color:black;'>"+files;
						 h+="<input type='file' size='40' id='uploadfile0' name='file0'><br>";
						 h+="<input type='file' size='40' id='uploadfile1' name='file1'><br>";
						 h+="<input type='file' size='40' id='uploadfile2' name='file2'><br>";
						 h+= accept_formats+Terms+"</p>";
						 h+="<input type='hidden' id='authcode' name='authcode' value='"+json.c+"'>";
						 h+="<input type='hidden' id='id' name='id' value='widget$"+json.d+"$"+json.c.substring(0,json.c.indexOf("_"))+"'>";
						 h+="<input type='hidden' id='callbackurl' name='callbackurl' value='"+baseserverurl+"'>";
						 h+="<input type='hidden' name='savemeta' value='yes'>";
						 h+="<p><input class='btn btn-primary btn-md' id='49widget_submitbutton' type='submit' name='suploadvideo' value='Upload'> <input class='btn btn-primary btn-md' id='49widget_submitbutton' type='button' name='suploadvideo' value='Cancel' onClick='Javascript: window.location.href =\"/index.php\"'></p>";
						 return h;
					}
					
					function checkform() { 
						var found=false;
						var cnt=0;
						while ($('uploadfile'+cnt)) {
							if ($('uploadfile'+cnt).value.length>0) {
								found=true;
								break;
							}
							cnt++;
						}
						
						if (!found) {
							alert('Please select at least one file to upload.');
							return false;
						}
						
						if ($('uploader_name').value.length==0) {
							alert('Please fill out the field \'Your name\'.');
							return false;
						}
						
						if ($('uploader_company').value.length==0) {
							alert('Please fill out the field \'Your Email\'.');
							return false;
						}
						
						if ($('uploader_contact').value.length==0) {
							alert('Please fill out the field \'Enter Quantity \'.');
							return false;
						}

						uploadmetadata=new Array();
						uploadmetadata['name']=$('uploader_name').value;
						uploadmetadata['company']=$('uploader_company').value;
						uploadmetadata['contact']=$('uploader_contact').value;
						uploadmetadata['description']=$('uploader_description').value;
						uploadmetadata['uploadfile0']=$('uploadfile0').value;
						uploadmetadata['uploadfile1']=$('uploadfile1').value;
						uploadmetadata['uploadfile2']=$('uploadfile2').value;
						return true;
					}
				</script>
				
            </div><!--/.col-sm-6-->
        </div><!--/.row-->	
    </section> <!-- End Upload -->
	