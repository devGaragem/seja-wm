
<?php
function assets()
{
  echo get_bloginfo('template_url') . '/assets';
}
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<title>
    <?php
    if (is_home()) :
      echo 'Cactos Construtora';
    else :
      echo str_replace('»', '', get_the_title());
    endif;
    ?>
  </title>
 	<?php
		wp_head();
	?>
	<link rel="stylesheet" href="<?php assets(); ?>/css/style.css">
	<?php
		if (is_home()) :
			echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/css/glider.min.css">';
			echo '<script src="'.get_bloginfo('template_url').'/js/glider.min.js"></script>';
		endif
	?>
	<script>
		document.addEventListener("DOMContentLoaded", () => {
		document.querySelector('.navbar-toggle').onclick = (e) => {
			const nav = document.querySelector('.navbar-nav')
			const currentIcon = nav.classList.contains('show') ? '☰' : '✕'
			console.log(currentIcon);
			e.target.innerHTML = currentIcon
			nav.classList.toggle('show')
		}
		new Glider(document.querySelector('.slider-inner'), {
			slidesToShow: 1,
			slidesToScroll: 1,
			draggable: true,
			arrows: {
			prev: '.prev',
			next: '.next'
			}
		});
		})
	</script>
	</head>

	<body>
		<header id="header-principal">
			<nav class="navbar navbar-expand-lg navbar-light bg-principal h-100">
				<div id="container" class="container-fluid justify-content-between ">
					<a class="navbar-brand" href="<?php echo get_home_url();?>">
						<img id="logo-header" src="<?php assets(); ?>/img/logo_principal-removebg-preview (1).png" height="120px" alt="" srcset="">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end w-100" id="navbarSupportedContent">
						<ul class="navbar-nav mb-2 mb-lg-0 w-50 justify-content-around">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="<?php echo get_home_url();?>">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#sobre">Cactos</a>
							</li>
				
							<li class="nav-item">
								<a class="nav-link" href="/servicos">Serviços</a>
							</li>
						</ul>
			
					</div>
				</div>
			</nav>
	
		</header>
