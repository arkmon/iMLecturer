

<div id="wrap">
    <div class="container">
	<div class="page-header">
      <h1>iMLecturerr</h1>
      </div>
      <p class="lead"><form action="" method="GET">
                <div>
                    
                    <div>First name:        <br /> <input type=text id="fn" name='firstname'> </div>
                    <div>Last name:        <br />  <input type=text id="ln" name='lastname'> </div>
                    <div>Module name:      <br /><input type=text id="mod" name="modname"> </div>
                  
                    <div>School:  <br />  <select  id="sch" name='school'>
                        <option value="">Select school</option>
                        <option value="Life Science">Life Science</option>
                        <option value="Computer Science">Computer Science</option>
                    </select>
                    </div>
                    
                    <br /><div><input value="Search" type="submit" id="search"></div>
				</div>
            </form>
            <button id="reset">Reset</button>
            <br /><br />
            <table><div id="result" class="row"></div></table></p>

    </div>
     <div id="push"></div>
     
     
  </div>
<script language="javascript">
    $('#search').click(function() {
        $.get("index.php/find/findemp",{firstname : $('#fn').val(),lastname : $('#ln').val(),modname : $('#mod').val(),school : $('#sch').val() },function(data) {
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