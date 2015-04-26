<?php include("header.php");	?>
<?php include("nav.php"); ?>
	<main class="cd-main-content">
<?php include("sec_nav.php"); ?>
		<section id="about">
			<h2>ಮಾತುಕತೆ</h2>
			<h4><br>ಶ್ರೀ ನೀಲಕಂಠೇಶ್ವರ ನಾಟ್ಯ ಸೇವಾ ಸಂಘ</h4>
			<div id="about_p">
				<div class="page_title"><i class="fa fa-book"></i>&nbsp;&nbsp;ಸಂಪುಟಗಳು</div>
					<div class="volumes">
						<ul>
							<?php

							include("connect.php");
							require_once("common.php");
							$query = 'select distinct volume from article_maatukate order by volume';
							$result = $db->query($query); 
							$num_rows = $result ? $result->num_rows : 0;
							if($num_rows > 0)
							{
								while($row = $result->fetch_assoc())
								{
									echo '<a class="box-shadow-outset" href="toc.php?part='. $row['volume'] .'"><img src="images/cover/'. $row['volume'] .'.jpg" alt="Cover image"><p>'. intval($row['volume']) .'</p></a>';
								}
							}
							if($result){$result->free();}
							$db->close();
							?>
						</ul>
					</div>
			</div>
	  </section>
	</main>
	<div id="cd-search" class="cd-search">
		<form>
			<input type="search" placeholder="Search...">
		</form>
	</div>
<?php include("footer.php"); ?>
	

