<?= '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc><?= base_url(); ?></loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?= base_url('guru/login'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= base_url('siswa/login'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= base_url('page/sejarah'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('page/visi-misi'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('page/logo-motto'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('page/struktur'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('page/yayasan'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('page/lokasi'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('jurusan'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php foreach ($jurusans as $jurusan) { ?>
        <url>
            <loc><?= base_url('jurusan/') . $jurusan->link; ?></loc>
            <lastmod><?= substr($jurusan->lastmod, 0, 10); ?></lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    <?php } ?>
    <url>
        <loc><?= base_url('data/guru'); ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('data/siswa'); ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('data/alumni'); ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('prestasi'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <?php foreach ($prestasis as $prestasi) { ?>
            <url>
                <loc><?= base_url('prestasi/') . $prestasi->link; ?></loc>
                <lastmod><?= $prestasi->date; ?></lastmod>
                <changefreq>monthly</changefreq>
                <priority>0.8</priority>
            </url>
        <?php } ?>
        <loc><?= base_url('galeri'); ?></loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <?php foreach ($galeris as $galeri) { ?>
        <url>
            <loc><?= base_url('p/') . $galeri->link; ?></loc>
            <lastmod><?= $galeri->date; ?></lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php } ?>
    <url>
        <loc><?= base_url('ekstrakurikuler'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php foreach ($ekskuls as $ekskul) { ?>
        <url>
            <loc><?= base_url('ekstrakurikuler/') . $ekskul->link; ?></loc>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php } ?>
    <url>
        <loc><?= base_url('article'); ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php foreach ($articles as $article) { ?>
        <url>
            <loc><?= base_url('article/') . $article->link; ?></loc>
            <lastmod><?= substr($article->modified, 0, 10); ?></lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php } ?>
    <url>
        <loc><?= base_url('kontak'); ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

</urlset>