<!doctype html>
<html>
    <head>
        <title>Upload</title>
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <link rel="stylesheet" href="https://bootflat.github.io/bootflat/css/bootflat.css">
    </head>

    <body style="background-color:black">
 <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("searchresults").innerHTML="";
    document.getElementById("searchresults").style.border="0px";
	document.getElementById("searchresults").style.display="hidden";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("searchresults").innerHTML=this.responseText;
      document.getElementById("searchresults").style.border="1px solid #A5ACB2";
	  	document.getElementById("searchresults").style.display="block";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <!-- Bootflat's JS files.-->
        <script src="https://bootflat.github.io/bootflat/js/icheck.min.js"></script>
        <script src="https://bootflat.github.io/bootflat/js/jquery.fs.selecter.min.js"></script>
        <script src="https://bootflat.github.io/bootflat/js/jquery.fs.stepper.min.js"></script>

                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Bootflat</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                      <ul class="nav navbar-nav">
                        <!-- <li class="active"><a href="#">Link</a></li>
                             <li class="disabled"><a href="#">Link</a></li> 
 -->
                      </ul>
                      <form class="navbar-form navbar-right" role="search">
                        <div class="form-search search-only">
                          <i class="search-icon glyphicon glyphicon-search"></i>
                          <input size='17' placeholder="Search" onblur="this.size='17'" onfocus="this.size='32'" onkeyup="showResult(this.value)" type="text" class="form-control search-query">
                        </div>
						
                      </form>                        
                        <ul class="dropdown-menu navbar-right" style="margin-left: 78%;" id="searchresults" role="menu">
                             
                        </ul>   
                          
                         
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
              
        <h1 style="margin:25px" class="example-title">Upload </h2><hr style='border-top: 2px solid #434a54'>
        <div class="col-md-6" style="padding: 25px;/*! margin: 25px; */"> 
		<form method="post" submit="upload.php">
		<div class="row" style="margin-bottom: 25px;">
                <input id="title" type="text" class="form-control" placeholder="Title">
              </div><div class="row" style="/*! margin-top: 25; */margin-bottom: 25px;">
                <textarea id="des" class="form-control" placeholder="Description" rows="3"></textarea>
              </div><div class="row">
                <input id="code" type="text" placeholder="URL" class="form-control">
              </div></form></div>
      </body></html>