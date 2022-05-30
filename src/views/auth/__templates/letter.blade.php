<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="color-scheme" content="light">
	<meta name="supported-color-schemes" content="light">
	<style>

		.email-wrapper {
			background-color: whitesmoke;;
			padding: 20px 10px;
		}	

		.email-table {
			margin: 0 auto;
			background-color: white;
    		box-shadow: 0 1px 5px rgba(0, 0, 0, .3);
		}

		.email-logo {
			max-width: 150px;
			margin: 0 auto;
			padding: 20px 5px 10px 5px;
		}

		.email-content {
			box-sizing: border-box;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
			position: relative;
			max-width: 550px;
			padding: 25px;
			text-align: center;
			margin: 0 auto;
		}	

		.email-button {
			box-sizing: border-box;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
			position: relative;
			-webkit-text-size-adjust: none;
			border-radius: 4px;
			color: #fff;
			display: inline-block;
			overflow: hidden;
			text-decoration: none;
			background-color: #2d3748;
			border-bottom: 8px solid #2d3748;
			border-left: 18px solid #2d3748;
			border-right: 18px solid #2d3748;
			border-top: 8px solid #2d3748;
			margin-bottom: 15px
		}

		.email-links {
			font-size: 14px;
		}

		.email-link {
			word-break: break-all
		}
			
	</style>
</head>

<body>
	<div class="email-wrapper">
		
		<table class="email-table">
			<tr>
				<td> 

					@yield('logo') 

				</td>
			</tr>

			<tr>
				<td class="email-content"> 

					@yield('content') 

				</td>
			</tr>
		</table>

	</div>
</body>

</html>