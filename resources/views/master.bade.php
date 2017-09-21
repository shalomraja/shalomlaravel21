<html ng-app="myApp">
<head>
	<title>Programme Dash Board</title>
	<link rel="stylesheet" type="text/css" href="{{ assset(bower_components/bootstrap/dist/css/bootstrap.min.css) }}">
</head>

<body>
	<div class="container">
		<div ng-view></div>
	</div>
	<script type='text/javascript' src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/app.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/controllers.js') }}"></script>
<div class="container">

</div>

<table class="gridtable">
<tr>
	<th>Project Type</th><th>Teams Filter</th> <th>Results</th> 
</tr>
<tr>
	<td>
		 Project Type
	</td>

	<td>
		 Teams Filter
	</td>
 
 <td><input type="submit" name="MS-Word" value="SHOW RESULTS" class="input-button" /></td>
</tr>
<tr>
	<td colspan="5" >
		<span class="itemDueDate"> "Note": The validity period on this report will show unti</span> <br /><br />
   		 
	</td>
</tr>
</table>



 

</form>
</body></html> 

<style type="text/css">
    .itemBody {
       
    }

    .itemHead {
       
    }
	
	.itemPtojectTitle {
		font-family:"Calibri";
        color: black;
        text-decoration: bold;
        font-size: 16px;
    }
	
	.itemDueDate {
		font-family:"Calibri";
        color: black;
        text-decoration: bold;
        font-size: 16px;
    }
	
	.itemLastComments {
		font-family:"Calibri";
        color: black;
		font-size: 16px;
    }

    .Active {
    	background-image: ragStatusColor/green.jpg;
	}

	.styled-select {
   background: #DBEAF9;
   width: 208px;
   padding: 5px;
   font-size: 16px;
   color: #14146D;
   line-height: 1;
   border: 1px solid #000;
   border-radius: 5;
   height: 34px;
   -webkit-appearance: normal;
   }

   .styled-text {
   background: #DBEAF9;
   width: 208px;
   font-size: 16px;
   color: #14146D;
   border: 1px solid #000;
   border-radius: 5;
   height: 34px;
   }

   table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

    </style>