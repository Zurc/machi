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
else if (strpos(testURL(), "packaging") != 0){
	echo '
		<style type="text/css">
			#pac.hoverup {
					opacity: 1;
					position: relative;
				}
				 
			#pac.hoverup:hover {
					top: 0;
				}
			}
		</style>';
}

?>

	<article class="portfolio_bottom">
		<div class="row">
			<div class="large-8 columns bmargin-top right">
				<div class="row">
					<div id="pub" class="large-4 columns nmargin text-center hoverup trans">
						<a href="publishing.php">
							<img src="img/bird.png" alt="join" class="smargin ico">
							<h3 class="slim">Publishing</h3>
						</a>
					</div>
					<div id="bra" class="large-4 columns nmargin text-center hoverup trans">
						<a href="branding.php">
							<img src="img/star.png" alt="dream" class="smargin ico">
							<h3 class="slim">Branding</h3>
						</a>
					</div>
					<div id="pac" class="large-4 columns nmargin text-center hoverup trans">
						<a href="packaging.php">
							<img src="img/fish.png" alt="love" class="smargin ico">
							<h3 class="slim">Packaging</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</article>