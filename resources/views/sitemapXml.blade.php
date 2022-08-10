<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2022-05-24T11:21:25+00:00</lastmod>
        <changefreq>hourly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/recipes/{{ $post->slug }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>hourly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($posts1 as $post1)
        <url>
            <loc>{{ url('/') }}/category/{{ $post1->id }}</loc>
            <lastmod>{{ $post1->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>hourly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>