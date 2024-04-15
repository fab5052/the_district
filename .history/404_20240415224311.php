<?php

require_once('header.php');

?>





<div class="parallax" style="background-image: url('assets/img/parallax/clown.jpeg')">

   


<div class="main-content pt-5">



		<h1 class="p-4">
			<i class="neon-red">The</i>
			<i class="neon-blue">District</i>
		</h1>

		<div class="container">
			<div class="row">
				<div class="span4">
					<div class="block_2">
						<h1>404<img src="assets/img/Not_Found_404.png"></h1>	
						<h3 class="title_1">Page Not Found</h3>		
					</div>
				</div>
				<div class="span6">
					<div class="block_3">
						<h2>Sorry!</h2>
			<p class="txt_1">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.<br><br>Please try using our search box below to look for information on the website
						</p>
						<div id="search">
							<form class="search" action="search" method="GET" accept-charset="utf-8">
								<input type="text" onfocus="if(this.value =='' ) this.value=''" onblur="if(this.value=='') this.value=''" value="" name="s">
								<a href="#" id="searchButton" class="searchButton"><img src="img/search.png" alt=""></a>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
</div>
</main>


<?php

require_once('footer.php');

?>