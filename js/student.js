

/*	==================================	FUNCTIONS FOR student fee	=================================	*/

function stdfee(a){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tables").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","updatestdfee.php?a="+a,true);
        xmlhttp.send(null);
		}
		
		
		/*	==================================	FUNCTIONS FOR GROUP	=================================	*/
		function callfunctions1(a){
			window.a=a;
			first(a);
			second(a); 
		}
										/*---- SELECT DATA OF GROUP ----*/
			function first(a){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("data").innerHTML = xmlhttp.responseText;
				}
				
			}
				xmlhttp.open("GET","groupdata.php?a="+a,true);
				xmlhttp.send(null);
			} 
		
										/*---- CHANGE CONTENT OF CLASS ----*/
			function second(a){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("secondlist").innerHTML = xmlhttp.responseText;
				}
			} 
			
			xmlhttp.open("GET","secondScript.php?first="+a,true);
			xmlhttp.send(null);
			}
		
			/*	=============================	FUNCTIONS FOR CLASS	=================================	*/

		function callfunctions2(b){
			window.b=b;
			firstclass(b);
			secondclass(b); 
		}
		




/*	=================================	FUNCTIONS Of Income Report - Reports	================================	*/


 function incomereportfunction1(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pcash").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","incomereportquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}


	/*	=================================	FUNCTIONS Of Expense Report - Reports	================================	*/


 function expensereportfunction1(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pcash").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","expensereportquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}

	/*	=================================	FUNCTIONS Of Net Report - Reports	================================	*/


 function netreportfunction1(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pcash").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","netreportquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}

									/*----- SELECT DATA OF CLASS -----*/
		function firstclass(b){
		if(!isNaN(b)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("data").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","classdata.php?b="+b+"&a="+a,true);
        xmlhttp.send(null);
        }
		}
		
									/*----- CHANGE CONTENT OF SUBJECT ----*/
		function secondclass(b){
		if(!isNaN(b)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("thirdlist").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","thirdscript.php?b="+b+"&a="+a,true);
        xmlhttp.send(null);
        }
		}
		
		/*	=================================	FUNCTIONS FOR SUBJECT	================================	*/
		
		function callfunctions3(c){
			firstsubject(c);
		}
		
										/*----- SELECT DATA OF SUBJECT ----*/
		function firstsubject(c){
		if(!isNaN(c)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("data").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","subjectdata.php?b="+b+"&a="+a+"&c="+c,true);
        xmlhttp.send(null);
        }
		}
		
		
			/*	=================================	FUNCTIONS BY ALi Azmi	================================	*/





function ali(c,d){
		  var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("status").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","month.php?c="+c+"&d="+d,true);
        xmlhttp.send(null); 
		}
		
function ali_second(e,f){
		  var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("add_fee").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","month_second.php?e="+e+"&f="+f,true);
        xmlhttp.send(null); 
		}
		
		
		/*	=================================	FUNCTIONS FOR Student Fee	================================	*/


  function stdfee(a){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tables").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","updatestdfee.php?a="+a,true);
        xmlhttp.send(null);
		}



  function managestdfee(b){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tables").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","contupdatestdfee.php?b="+b,true);
        xmlhttp.send(null);
		}

				/*	=================================	FUNCTIONS FOR View Pettycash	================================	*/


  function viewpettycashfunction(e,f){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("viewpcsh").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","datesubmit.php?e="+e+"&f="+f,true);
        xmlhttp.send(null); 
		
		}
		

/*	=================================	FUNCTIONS FOR Manage Pettycash	================================	*/


  function managepettycashfunction(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("managepcsh").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","managepettycashquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}
		

			/*	=================================	FUNCTIONS BY monthlyexpenses	================================	*/



	function monthlyexpensefunction1(c){
		  var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("month").innerHTML = xmlhttp.responseText;
            }
        } 
 
        
	xmlhttp.open("GET","monthlyexpensefunction.php?c="+c,true);

        
        xmlhttp.send(null); 
		}

	/*	=================================	FUNCTIONS for view monthly expenses	================================	*/
 function viewmonthlyexpensesfunction(e,f){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("viewmonthlyexpenses").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","monthlyexpenses_moth.php?e="+e+"&f="+f,true);
        xmlhttp.send(null); 
		
		}
		
		/*	=================================	FUNCTIONS Of Add Teacher Salary - monthly expenses	================================	*/



 function addteachersalaryfunction(a){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tables").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","teacher_salary_ajaxcontent.php?a="+a,true);
        xmlhttp.send(null);
		}



function teachersalarymonthfunction(c,d){
		  var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("addsalary").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","teacher_salary_month.php?c="+c+"&d="+d,true);
        xmlhttp.send(null); 
		}



		/*	=================================	FUNCTIONS Of MANAGER Teacher Salary - monthly expenses	================================	*/


function manageteachersalary(b){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tables").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","teacher_salary_managefunction1.php?b="+b,true);
        xmlhttp.send(null);
		}


		
function manageteachersalarymonth(c,d){
		  var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("addsalary").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","teacher_manage_salary_month.php?c="+c+"&d="+d,true);
        xmlhttp.send(null); 
		}

	/*	=================================	FUNCTIONS Of Income Report - Reports	================================	*/


 function incomereportfunction1(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pcash").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","incomereportquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}


	/*	=================================	FUNCTIONS Of Expense Report - Reports	================================	*/


 function expensereportfunction1(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pcash").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","expensereportquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}

	/*	=================================	FUNCTIONS Of Net Report - Reports	================================	*/


 function netreportfunction1(g,h){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pcash").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","netreportquery.php?g="+g+"&h="+h,true);
        xmlhttp.send(null); 
	
		}



		
		
		
		
		
		
		/*	==================================	FUNCTIONS FOR GROUP Teacher	=================================	*/
		function callfunctions1_teacher(a){
			window.a=a;
			first_teacher(a);
			second_teacher(a); 
		}
										/*---- SELECT DATA OF GROUP ----*/
			function first_teacher(a){
			if(!isNaN(a)){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("table").innerHTML = xmlhttp.responseText;
				}
				}
			}
				xmlhttp.open("GET","changecontent_teacher.php?a="+a,true);
			xmlhttp.send(null);
			} 
		
										/*---- CHANGE CONTENT OF CLASS ----*/
			function second_teacher(a){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("class").innerHTML = xmlhttp.responseText;
				}
			} 
			
			xmlhttp.open("GET","firstScriptteacher.php?a="+a,true);
			xmlhttp.send(null);
			}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			/*	=============================	FUNCTIONS FOR CLASS	TEACHER =================================	*/

		function callfunctions2_teacher(b){
			window.b=b;
			firstclass_teacher(b);
			secondclass_teacher(b); 
		}
		
									/*----- SELECT DATA OF CLASS -----*/
		function firstclass_teacher(b){
		if(!isNaN(b)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("table").innerHTML = xmlhttp.responseText;
            }	
        } 
		
        xmlhttp.open("GET","changecontent2_teacher.php?b="+b+"&a="+a,true);
        xmlhttp.send(null);
        }
		}
		
									/*----- CHANGE CONTENT OF SUBJECT TEACHER ----*/
		function secondclass_teacher(b){
		if(!isNaN(b)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("subject").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","secondscriptteacher.php?b="+b+"&a="+a,true);
        xmlhttp.send(null);
        }
		}
		
		/*	=================================	FUNCTIONS FOR SUBJECT TEACHER	================================	*/
		
		function callfunctions3_teacher(c){
			firstsubject_teacher(c);
		}
		
										/*----- SELECT DATA OF SUBJECT ----*/
		function firstsubject_teacher(c){
		if(!isNaN(c)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("table").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","changecontent3_teacher.php?b="+b+"&a="+a+"&c="+c,true);
        xmlhttp.send(null);
        }
		}
		
		
		
		
		/* ------------------------------------- MANAGE FUNCTIONS --------------------------------- */
		
		
		
		function manageteacher1(j){
			window.j=j;
			man_teacher(j);
			man_teacherchange(j); 
		}
										/*---- SELECT DATA OF GROUP ----*/
			function man_teacher(j){
			if(!isNaN(j)){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("table").innerHTML = xmlhttp.responseText;
				}
				}
			}
				xmlhttp.open("GET","changecontent_manageteacher.php?a="+j,true);
			xmlhttp.send(null);
			}
			
			function man_teacherchange(j){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("class").innerHTML = xmlhttp.responseText;
				}
			} 
			
			xmlhttp.open("GET","firstScriptteacher.php?a="+j,true);
			xmlhttp.send(null);
			}
			
			
			function manageteacher2(k){
			window.k=k;
			man_teacher2(k);
			man_teacherchange2(k); 
		}
		
									/*----- SELECT DATA OF CLASS -----*/
		function man_teacher2(k){
		if(!isNaN(k)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("table").innerHTML = xmlhttp.responseText;
            }	
        } 
		
        xmlhttp.open("GET","changecontent2_manageteacher.php?b="+k+"&a="+j,true);
        xmlhttp.send(null);
        }
		}
		
		function man_teacherchange2(k){
		if(!isNaN(k)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("subject").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","secondscriptteacher.php?b="+k+"&a="+j,true);
        xmlhttp.send(null);
        }
		}
		
		
		
		function manageteacher3(l){
			man_teacher3(l);
		}
		
										/*----- SELECT DATA OF SUBJECT ----*/
		function man_teacher3(l){
		if(!isNaN(l)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("table").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","changecontent3_manageteacher.php?b="+k+"&a="+j+"&c="+l,true);
        xmlhttp.send(null);
        }
		}

/*	=================================	FUNCTIONS FOR fee summary	================================	*/


 function teacherinfo(a){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tables").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","teacher_info.php?a="+a,true);
        xmlhttp.send(null);
		}


  function feesummaryfunction(tid){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("feedata").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","feesummary_data.php?tid="+tid,true);
        xmlhttp.send(null); 
		
		}
		
		
		
		

