{include file="header.tpl"}
<!-- Intro
================================================== -->
<div class="introtitle">
	<div class="container">
		<h1>{$name}</h1>
		<p>
			{$name}
		</p>
	</div>
</div>
<!-- END Intro -->
<div class="container">
	<!-- Filtering Menu
	================================================== -->
	<div class="row-fluid">
		<div class="span12 text-center">
			<div id="filter">
				<ul>
					<li><a href="" data-filter="*" class="selected"><i class="icon icon-reorder"></i> All Items</a></li>
					<li><a href="" data-filter=".cat1"><i class="icon icon-th-large"></i> On sale</a></li>
					<li><a href="" data-filter=".cat2"><i class="icon icon-th-list"></i> Speical</a></li>					
				</ul>
			</div>
		</div>
	</div>
	<!-- END filtering menu -->
	<!-- MASONRY ITEMS START
	================================================== -->
	<div id="content">	
	<!-- box 1 -->
	<div class="boxportfolio3 cat2 cat3">
		<div class="boxcontainer">
			<img src="img/dummyimage.jpg" alt="">
			<div class="roll">
				<div class="wrapcaption">
					<a href="singleproject.html"><i class="icon-link captionicons"></i></a>
					<a data-gal="prettyPhoto[gallery1]" href="img/dummyimage.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
				</div>
			</div>
			<h1><a href="singleproject.html">La Chaux De Fonds</a></h1>
			<p>
				 Swiss city in Jura mountains
			</p>
		</div>
	</div>
	<!-- box 2 -->
	<div class="boxportfolio3 cat1">
		<div class="boxcontainer">
			<img src="img/dummyimage.jpg" alt="">
			<div class="roll">
				<div class="wrapcaption">
					<a href="singleproject.html"><i class="icon-link captionicons"></i></a>
					<a data-gal="prettyPhoto[gallery1]" href="img/dummyimage.jpg" title="Taj Mahal"><i class="icon-zoom-in captionicons"></i></a>
				</div>
			</div>
			<h1><a href="singleproject.html">Taj Mahal</a></h1>
			<p>
				 one of the eight wonders
			</p>
		</div>
	</div>
	<!-- box 3 -->
	<div class="boxportfolio3 cat2 ">
		<div class="boxcontainer">
			<img src="img/dummyimage.jpg" alt="">
			<div class="roll">
				<div class="wrapcaption">
					<a href="singleproject.html"><i class="icon-link captionicons"></i></a>
					<a data-gal="prettyPhoto[gallery1]" href="img/dummyimage.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
				</div>
			</div>
			<h1><a href="singleproject.html">Versailles, France</a></h1>
			<p>
				 Cotelle Gallery
			</p>
		</div>
	</div>	
	<!-- next box etc -->
</div>
<!-- MASONRY ITEMS END -->
</div>
{include file="footer.tpl"}