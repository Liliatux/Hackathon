@extends('layout')
@section('finalhead')
<title>Les news</title>
</head>
<body>
	@stop

	@section('content')

	<div class="blog">


		<h1>LES NEWS ADONIS !</h1>

		<?php 
		$html= new DOMDocument();
		@$html->LoadHtmlFile('http://www.groupe-adonis.fr/blog/feed');
		$xpath = new DOMXpath($html);
		$domTitle = $xpath->query("//item/title");
		$domArticle = $xpath->query("//link");

		$i = 0;
		foreach($domTitle as $title) {
			$resultTitle[$i++]= $title->nodeValue;
		}
		 echo '<p>'.$resultTitle[0].'</p>';
		 echo '<p>'.$resultTitle[1].'</p>';
		 echo '<p>'.$resultTitle[2].'</p>';

		$i=0;
		foreach($domArticle as $article) {
			$resultLink[$i++]=$article->nodeValue;
		}
		dd($resultLink[0]);
		 echo '<p>'.$resultLink[0].'</p>';
		 echo '<p>'.$resultLink[1].'</p>';
		 echo '<p>'.$resultLink[2].'</p>';
		
		?>
	</div>





</body>
@stop