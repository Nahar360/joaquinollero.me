<style>
	.dropdown-menu > li > a:hover {
    	background-color: #3c3c3c !important;
		color: white !important;
	}

	.navbar {
		background-color: #3c3c3c;
	}
</style>

<nav class="navbar navbar-fixed-top navbar-transparent navbar-color-on-scroll">
	<div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
        		<span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="../"><img src="resources/images/J_.png" width="30" height="30"></a>
    		<!--<a class="navbar-brand" href="../">Joaquin Ollero</a>-->
    	</div>

    	<div class="collapse navbar-collapse" id="navigation-example">
    		<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="?loc=aboutme">
						<i class="material-icons">person</i>About me
					</a>
				</li>
				<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        				<i class="material-icons">description</i>
        				CV
        				<b class="caret"></b>
        				<div class="ripple-container"></div>
        			</a>
        			<ul class="dropdown-menu">
						<li><a href="resources/docs/CV_Joaquin_Ollero_ENG.pdf">English</a></li>
						<li><a href="resources/docs/CV_Joaquin_Ollero_ESP.pdf">Spanish</a></li>
        			</ul>
				</li>
				<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        				<i class="material-icons">work</i>
        				Projects
        				<b class="caret"></b>
        				<div class="ripple-container"></div>
        			</a>
        			<ul class="dropdown-menu">
						<li><a href="?loc=majorprojects">Major projects</a></li>
						<li><a href="?loc=minorprojects">Minor projects</a></li>
						<li class="divider"></li>
						<li><a href="?loc=publications">Publications</a></li>
        			</ul>
				</li>
				<li>
					<a href="?loc=contact">
						<i class="material-icons">email</i>Contact
					</a>
				</li>
			</ul>
    		<ul class="nav navbar-nav navbar-right">
				<li>
	                <a href="https://www.linkedin.com/in/joaquin-ollero-garcia" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-linkedin"></i>
					</a>
	            </li>
	            <!--<li>
	                <a href="https://github.com/Nahar360" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-github"></i>
					</a>
	            </li>-->
	            <li>
	                <a href="https://twitter.com/Nahar360" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
	            </li>
				<li>
	                <a href="https://www.instagram.com/nahar360" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
	            </li>
    		</ul>
    	</div>
	</div>
</nav>