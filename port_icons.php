<?php 
function testURL(){
	$url = $_SERVER['PHP_SELF'];
	return $url;
}

if (strpos(testURL(), "branding") != 0){
	echo '
		<style type="text/css">
			#bra.hoverup {
					opacity: 1;
					position: relative;
				}
				 
			#bra.hoverup:hover {
					top: 0;
				}
			}
		</style>';
} 
else if (strpos(testURL(), "publishing") != 0){
	echo '
		<style type="text/css">
			#pub.hoverup {
					opacity: 1;
					position: relative;
				}
				 
			#pub.hoverup:hover {
					top: 0;
				}
			}
		</style>';
}
else if (strpos(testURL(), "advertising") != 0){
	echo '
		<style type="text/css">
			#adv.hoverup {
					opacity: 1;
					position: relative;
				}
				 
			#adv.hoverup:hover {
					top: 0;
				}
			}
		</style>';
}

?>

	<article class="portfolio_bottom">
		<div class="row">
			<div class="small-12 large-8 columns bmargin-top right">
				<div class="row">
					<div id="adv" class="small-4 large-4 columns nmargin text-center hoverup trans">
						<a href="advertising.php">
							<img src="img/fish.png" alt="love" class="smargin ico">
							<h5 class="slim">Advertising</h5>
						</a>
					</div>
					
					<div id="bra" class="small-4 large-4 columns nmargin text-center hoverup trans">
						<a href="branding.php">
							<img src="img/star.png" alt="dream" class="smargin ico">
							<h5 class="slim">Branding</h5>
						</a>
					</div>

					<div id="pub" class="small-4 large-4 columns nmargin text-center hoverup trans">
						<a href="publishing.php">
							<img src="img/bird.png" alt="join" class="smargin ico">
							<h5 class="slim">Publishing</h5>
						</a>
					</div>s
					
				</div>
			</div>
		</div>
	</article>