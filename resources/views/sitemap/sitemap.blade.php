<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	@foreach($domains as $domain)
	<url>
		<loc>{{route('domainStatus', $domain->name)}}</loc>
		<lastmod>{{$domain->created_at}}</lastmod>
	</url>
	@endforeach
</urlset> 