<script>$(document.body).addClass('profile-page');</script>

<script>
	function score(full, empty) {
		for (var i = 0; i < full; i++) {
			document.write('<span class="fa fa-square"></span> ');
		}
		for (var i = 0; i < empty; i++) {
			document.write('<span class="fa fa-square-o"></span> ');
		}
	}
</script>

<style>
	.fa-square {
	    color: #3c3c3c;
	}

    .nav-pills > li.active > a, .nav-pills > li.active > a:focus {
        color: white;
        background-color: #3c3c3c;
    }

	.nav-pills > li.active > a:hover {
		color: white;
		background-color: #7a7a7a;
	}

	.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
		-webkit-box-shadow: 0px 5px 10px grey;
		-moz-box-shadow: 0px 5px 10px grey;
		box-shadow: 0px 5px 10px grey;
	}

    a.mine {
        color: #3c3c3c;
        border-bottom: 1px solid Black;
    }

    a.mine:hover {
        color: #7a7a7a;
        border-bottom: 1px solid Black;
    }
</style>

<div class="wrapper">
	<div class="header header-filter" style="height:0px; background-image: url('resources/images/print10.png');">
		<div class="text-center">
            <br><br><br><br><h1 class="text-center" style="color: white;">About me</h1>
        </div>
	</div>
	<div class="main main-raised">
		<div class="profile-content">
            <div class="container">

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="profile-tabs">
		                    <div class="nav-align-center">

								<ul class="nav nav-pills" role="tablist">
									<li class="active">
										<a href="#skills" role="tab" data-toggle="tab">
											<i class="material-icons">build</i>
											Skills
										</a>
									</li>
			                        <li>
			                            <a href="#videogames" role="tab" data-toggle="tab">
											<i class="material-icons">videogame_asset</i>
											Videogames
			                            </a>
			                        </li>
			                        <li>
			                            <a href="#music" role="tab" data-toggle="tab">
											<i class="material-icons">headset</i>
											Music
			                            </a>
			                        </li>
			                        <li>
			                            <a href="#books" role="tab" data-toggle="tab">
											<i class="material-icons">local_library</i>
											Books
			                            </a>
			                        </li>
			                    </ul>

			                    <div class="tab-content gallery">
									<div class="tab-pane active" id="skills">
			                            <div class="row">
											<div class="col-md-6">
												<h4><b>Technical skills</b></h4>
												<ul class="list-group">
													<li class="list-group-item">
														<span class="label label-success">C++</span>
														<span class="label label-success">Open GL 4.X</span>
														<span class="label label-success">GLSL</span>
														<span class="label label-info">Bullet</span>
														<span class="label label-info">FMOD</span>
														<span class="label label-info">SFML</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">C#</span>
														<span class="label label-success">XNA</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">Unity 3D</span>
														<span class="label label-info">Unity Machine Learning Agents</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">Python</span>
														<span class="label label-success">Flask</span>
														<span class="label label-success">Numpy</span>
														<span class="label label-success">Matplotlib.pyplot</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">TensorFlow</span>
														<span class="label label-info">Keras</span>
													</li>
													<li class="list-group-item">
														<span class="label label-info">Java</span>
														<span class="label label-success">Android</span>
														<span class="label label-success">Android Wear 2.0+</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">HTML 5</span>
														<span class="label label-info">PHP</span>
														<span class="label label-success">CSS</span>
														<span class="label label-success">Bootstrap</span>
														<span class="label label-info">JavaScript</span>
														<span class="label label-success">p5.js</span>
														<span class="label label-info">nvd3.js</span>
														<span class="label label-success">chart.js</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">MongoDB</span>
														<span class="label label-info">MySQL</span>
													</li>
													<li class="list-group-item">
														<span class="label label-info">MatLab</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">LaTeX</span>
													</li>
													<li class="list-group-item">
														<span class="label label-success">Microsoft Visual Studio</span>
														<span class="label label-success">PyCharm</span>
														<span class="label label-success">Android Studio</span>
													</li>
												</ul>
												<span class="label label-success">High experience</span>
												<span class="label label-info">Medium experience</span>
											</div>
											<div class="col-md-6">
												<h4><b>Soft skills</b></h4>
												<ul class="list-group">
													<li class="list-group-item">Ability of learning and adapting to new technologies and programming languages</li>
													<li class="list-group-item">Self-motivation and enthusiast of challenges</li>
													<li class="list-group-item">Team-working and ability to work independently</li>
													<li class="list-group-item">Creative when solving problems and facing unseen situations</li>
													<li class="list-group-item">Communication and leadership skills: Staff-Student Liaison Committee student representative of MSc in Computer Games Technology (City, University of London)</li>
													<li class="list-group-item">Organizational skills, tasks planning and time management</li>
												</ul>
											</div>
			                            </div>
			                            <h4><b>Languages</b></h4>
			                            <div class="row">
											<div class="col-md-4">
					                            <!--<img alt="English" src="resources/material_kit/img/flags/GB.png" style="width: 23px; height: 17px;">-->
					                            <h5>English</h5>
					                            <p>Proficient speaker</p>
					                            <script>score(4,1);</script>
					                            <p></p>
					                            <a class="mine" href="resources/docs/IELTS_Joaquin_Ollero.pdf" target="_blank">
					                            	<p>IELTS</p>
					                        	</a>
					                            <p>Overall Band Score - 7.0</p>
					                            <p>CEFR Level - C1</p>
					                        </div>

											<div class="col-md-4">
					                        	<!--<img alt="Spanish" src="resources/material_kit/img/flags/ES.png" style="width: 23px; height: 17px;">-->
					                        	<h5>Spanish</h5>
					                        	<p>Native speaker</p>
					                        	<script>score(5,0);</script>
					                        </div>

					                        <div class="col-md-4">
					                        	<!--<img alt="French" src="resources/material_kit/img/flags/FR.png" style="width: 23px; height: 17px;">-->
					                        	<h5>French</h5>
					                        	<p>Basic speaker</p>
					                        	<script>score(3,2);</script>
					                        </div>
					                    </div>
			                        </div>

			                        <div class="tab-pane text-center" id="videogames">
			                        	<div class="row">
											<div class="col-md-6">
												<h5><b>The Witness</b></h5>
												<h6>Thekla</h6>
												<img src="resources/images/the_witness.jpg" class="img-rounded" />
												<h5><b>Halo</b> franchise</h5>
												<h6>Bungie & 343 Industries</h6>
												<img src="resources/images/halo.jpg" class="img-rounded" />
											</div>
											<div class="col-md-6">
												<h5><b>Portal</b></h5>
												<h6>Valve</h6>
												<img src="resources/images/portal.jpg" class="img-rounded" />
												<h5><b>Metroid Prime</b></h5>
												<h6>Retro Studios & Nintendo</h6>
												<img src="resources/images/metroid_prime.jpg" class="img-rounded" />
											</div>
										</div>
			                        </div>
			                        <div class="tab-pane text-center" id="music">
			                        	<div class="row">
											<div class="col-md-6">
												<h4><b>Bon Iver</b> - <i>"Bon Iver"</i> (2011)</h4>
												<a href="https://www.youtube.com/watch?v=0KrmxavLIRM" target="_blank">
													<img src="resources/images/bon_iver.jpg" class="img-rounded" />
												</a>
												<blockquote>
													<p>
														"Sold, I'm ever <br>
														Open ears and open eyes <br>
														Wake up to your starboard bride <br>
														Who goes in and then stays inside <br>
														Oh the demons come, they can subside"
													</p>
													<a href="https://www.youtube.com/watch?v=0KrmxavLIRM" target="_blank">
														<small>"Calgary"</small>
													</a>
												</blockquote>
												<h4><b>Destroyer</b> - <i>"Kaputt"</i> (2011)</h4>
												<a href="https://www.youtube.com/watch?v=udsJP_QANGY" target="_blank">
													<img src="resources/images/destroyer.jpg" class="img-rounded" />
												</a>
												<blockquote>
													<p>
														"Listen, I’ve been drinking <br>
														As our house lies in ruin <br>
														I don't know what I'm doing <br>
														Alone in the dark <br>
														At the park or at the pier <br>
														Watching ships disappear in the rain"
													</p>
													<a href="https://www.youtube.com/watch?v=udsJP_QANGY" target="_blank">
														<small>"Bay of Pigs"</small>
													</a>
												</blockquote>
											</div>
											<div class="col-md-6">
												<h4><b>Fleetwood Mac</b> - <i>"Rumours"</i> (1977)</h4>
												<a href="https://www.youtube.com/watch?v=cwnnpKcP0Gw" target="_blank">
													<img src="resources/images/fleetwood_mac.png" class="img-rounded" />
												</a>
												<blockquote>
													<p>
														"Time cast a spell on you <br>
														But you won't forget me <br>
														I know I could have loved you <br>
														But you would not let me"
													</p>
													<a href="https://www.youtube.com/watch?v=cwnnpKcP0Gw" target="_blank">
														<small>"Silver Springs"</small>
													</a>
												</blockquote>
												<h4><b>Sufjan Stevens</b> - <i>"Illinois"</i> (2005)</h4>
												<a href="https://www.youtube.com/watch?v=K5ygoDnlGCg" target="_blank">
													<img src="resources/images/sufjan_stevens.jpg" class="img-rounded" />
												</a>
												<blockquote>
													<p>
														"And in my best behavior <br>
														I am really just like him <br>
														Look beneath the floor boards <br>
														For the secrets I have hid"
													</p>
													<a href="https://www.youtube.com/watch?v=K5ygoDnlGCg" target="_blank">
														<small>"John Wayne Gacy, Jr."</small>
													</a>
												</blockquote>
											</div>
										</div>
			                        </div>
			                        <div class="tab-pane text-center" id="books">
			                        	<div class="row">
											<div class="col-md-6">
												<h5><b>Atlas Shrugged</b> (1957)</h5>
												<h6>Ayn Rand</h6>
												<img src="resources/images/atlas_shrugged.jpg" class="img-rounded" />
												<blockquote>
													<p>
														"If you saw Atlas, the giant who holds the world on his shoulders, if you saw that he stood, blood running down his chest, his knees buckling, his arms trembling but still trying to hold the world aloft with the last of his strength, and the greater his effort the heavier the world bore down upon his shoulders... what would you tell him to do?"
													</p>
													<small>Ayn Rand, Atlas Shrugged</small>
												</blockquote>

												<h5><b>The Shadow of the Wind</b> (2001)</h5> 
												<h6>Carlos Ruiz Zafón</h6>
												<img src="resources/images/the_shadow_of_the_wind.jpg" class="img-rounded" />
												<blockquote>
													<p>
														"Every book, every volume you see here, has a soul. The soul of the person who wrote it and of those who read it and lived and dreamed with it. Every time a book changes hands, every time someone runs his eyes down its pages, its spirit grows and strengthens."
													</p>
													<small>Carlos Ruiz Zafón, The Shadow of the Wind</small>
												</blockquote>
											</div>
											<div class="col-md-6">
												<h5><b>The Unbearable Lightness of Being</b> (1984)</h5>
												<h6>Milan Kundera</h6>
												<img src="resources/images/the_unbearable_lightness_of_being.jpg" class="img-rounded" />
												<blockquote>
													<p>
														"There is no means of testing which decision is better, because there is no basis for comparison. We live everything as it comes, without warning, like an actor going on cold. And what can life be worth if the first rehearsal for life is life itself? That is why life is always like a sketch. No, “sketch” is not quite a word, because a sketch is an outline of something, the groundwork for a picture, whereas the sketch that is our life is a sketch for nothing, an outline with no picture."
													</p>
													<small>Milan Kundera, The Unbearable Lightness of Being</small>
												</blockquote>

												<h5><b>The Name of the Wind</b> (2007)</h5>
												<h6>Patrick Rothfuss</h6>
												<img src="resources/images/the_name_of_the_wind.jpg" class="img-rounded" />
												<blockquote>
													<p>
														"My parents danced together, her head on his chest. Both had their eyes closed. They seemed so perfectly content. If you can find someone like that, someone who you can hold and close your eyes to the world with, then you're lucky. Even if it only lasts for a minute or a day. The image of them gently swaying to the music is how I picture love in my mind even after all these years."
													</p>
													<small>Patrick Rothfuss, The Name of the Wind</small>
												</blockquote>
											</div>
										</div>
			                        </div>
			                    </div>

							</div>
						</div>
					</div>
                </div>

            </div>
        </div>
	</div>
</div>