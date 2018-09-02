//$data = array();
//sc_lookup(data, "SELECT sign FROM Table_4 WHERE id='2222'");
//echo $data[0][0];
?>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>CMA | Timesheet System</title>
</head>

<body>
	<div id="signature-pad" class="signature-pad">
    	<div class="signature-pad--body">
      		<canvas id="canvas"></canvas>
    	</div>
    
    	<div class="signature-pad--footer">
    		<div class="description">Sign above</div>
      		<div class="signature-pad--actions">
        		<div>
         			<button type="button" class="button clear" data-action="clear">Clear</button>
	            	<button type="button" class="button" data-action="undo">Undo</button>
        		</div>
        		<div>
        			<button type="button" class="button save" data-action="attach-sig">Attach signature</button>
        		</div>
			</div>
		</div>
	</div>
	    
	<!--signature_pad.umd.js-->
	<script type="text/javascript" src="<?php echo sc_url_library('prj', 'php-boys', 'signature_pad.umd.js');?>"></script>
	
	<!--app.js-->
	
	<script type="text/javascript" src="<?php echo sc_url_library('prj', 'php-boys', 'app.js');?>"></script>
	
	<img id="img"/>

	<script>
	var blobz;
	attachSig.addEventListener("click", function (event) {
  		if (signaturePad.isEmpty()) {
    		alert("Please provide a signature first.");
  		} else {
		    
    		var dataURL = signaturePad.toDataURL();

			var data = new FormData();
			data.append('file', dataURL);
			
		    //console.log(data);
		
			
	
			$.ajax({
				url: "/scriptcase/app/project/blankapp2/blankapp2.php",
				type : "POST",
				cache : false,
				data : data,
				processData: false,
				contentType: false,
				success: function(data){
					alert(data);
		            console.log(typeof(data));
					$('#img').attr('src',data);
				},
  				error: console.log.bind(console, "failed post")
				});

		}
	});
		
	
	</script>
</body>
<?php