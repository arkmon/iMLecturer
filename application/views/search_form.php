<!DOCTYPE html>
<html>
<head>
    <title>Human Resources</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
     <style>
      body {
        padding-top: 60px; 
	  }
	  #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
	position: absolute;
	bottom: 0;
	margin-left: -20px;
	margin-right: -20px;
	padding-left: 20px;
	padding-right: 20px;
	width: 320px;
        }
      }
      
     </style>
     <link href="css/bootstrap-responsive.css" rel="stylesheet">
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>
  <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Human Resources</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="#help">Help</a></li>
              <li><a href="#Login">Login</a></li>
            </ul>

          </div><!--/.nav-collapse -->

        </div>
        
      </div>
  </div>
    
<div id="wrap">
    <div class="container">
	<div class="page-header">
      <h1>iMLecturer</h1>
      </div>
      <p class="lead"><form action="" method="GET">
                <div>
                    
                    <div>First name:        <br /> <input type=text id="fn" name='firstname'> </div>
                    <div>Last name:        <br />  <input type=text id="ln" name='lastname'> </div>
                    <div>Department Name:  <br />  <select type=text id="dt" name='dept'>
                        <option value="">Select Department</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Development">Development</option>
                        <option value="Finance">Finance</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Production">Production</option>
                        <option value="Quality Management">Quality Management</option>
                        <option value="Research">Research</option>
                        <option value="Sales">Sales</option>
                    </select>
                    </div>
                    <div>Current job Title: <br /> <input type=text id="jt" name='jobtitle'> </div>
                    <br /><div><input value="Search" type="submit" id="search">

            </form>
            <button id="reset">Reset</button>
            </br></br>
            <table><div id="result" class="row"></div></table>
</p>

    </div>
     <div id="push"></div>
     </div>
      </div>
    <div id="footer">
        <div class="container">
            <p class="muted credit">&copy; Arkadiusz Dowejko</p>
        </div>
     </div>
     <script language="javascript">
    $('#search').click(function() {
        $.get("index.php/find/findemp",{firstname : $('#fn').val(),lastname : $('#ln').val(),dept : $('#dt').val(),jobtitle : $('#jt').val() },function(data) {
            var names = "";
            $.each(data, function(index, element) {
                if (index > 0) {names;}
                names += "<tr><td>"+element.first_name +"</td> "+"<td>"+ element.last_name+ "</td> <td>"+ element.dept_name+"<td/> <td> "+ element.title+"</td><td>"+element.gender+"</td></tr>"+ "<br/>";
            });
            $('#result').html(names);
        },"json");
        return false;
    });
</script>
    
 
    
  </body>
</html>