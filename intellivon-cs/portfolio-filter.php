<?php
/* Template Name: Portfolio Filter */

/* =================================================
   SINGLE-FILE AJAX HANDLER (NO admin-ajax.php)
================================================= */
if (isset($_GET['portfolio_ajax'])) {

    require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

    $filter = isset($_POST['type']) ? strtolower(sanitize_text_field($_POST['type'])) : '';
    $search = isset($_POST['q']) ? strtolower(sanitize_text_field($_POST['q'])) : '';
    $parent_id = intval($_POST['parent_id'] ?? 0);

    $args = [
        'post_type'      => 'page',
        'post_parent'    => $parent_id,
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];

    $query = new WP_Query($args);
    $found = false;

    ob_start();

    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();

            $case_type_raw = get_post_meta(get_the_ID(), 'case_type', true);
            $case_types = is_array($case_type_raw)
                ? array_map('strtolower', $case_type_raw)
                : array_map('strtolower', array_map('trim', explode(',', $case_type_raw)));

            /* FILTER TAB */
            if ($filter && $filter !== 'recent' && !in_array($filter, $case_types)) continue;

            /* SEARCH: title OR case_type */
            if (
                $search &&
                stripos(get_the_title(), $search) === false &&
                !in_array($search, $case_types)
            ) continue;

            $found = true;
            ?>

            <!-- CARD (UNCHANGED STYLE) -->
            <div class="group bg-white rounded-xl overflow-hidden shadow transition hover:shadow-xl">
                <div class="relative overflow-hidden">
                    <?php the_post_thumbnail('large', [
                        'class' => 'w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110'
                    ]); ?>

                    <div class="absolute inset-0 bg-black/40 backdrop-blur-[1px] opacity-100 group-hover:opacity-0 transition-all duration-500"></div>

                    <!-- TAGS (BOTTOM) -->
                    <?php if (!empty($case_types)): ?>
                        <div class="absolute bottom-4 left-4 z-10 flex flex-wrap gap-2">
                            <?php foreach ($case_types as $tag): ?>
                                <span class="bg-white text-black text-xs font-bold px-3 py-1 rounded-full">
                                    <?php echo esc_html(strtoupper($tag)); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="p-6">
                    <h3 class="font-bold text-xl mb-4"><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>" target="_blank"
                       class="inline-block px-5 py-2 border border-black rounded-md font-semibold transition hover:bg-black hover:text-white">
                        Read More →
                    </a>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    endif;

    if (!$found) {
        echo '<p class="text-lg font-semibold col-span-full">No matching case studies found.</p>';
    }

    echo ob_get_clean();
    exit;
}

/* =================================================
   NORMAL PAGE LOAD
================================================= */
get_header();
$parent_id = get_queried_object_id();
?>

<!-- =========================
     BANNER (UNCHANGED)
========================= -->
<section class="relative px-5 lg:px-10 py-14 lg:py-20 w-full bg-[#0f1021]">
    <div class="container mx-auto">
        <h1 class="text-white font-bold font-urbanist text-[40px]">Our Portfolio</h1>
    </div>
</section>

<section class="px-5 lg:px-10 py-14 lg:py-20 bg-[#f4f4fa] w-full">
<div class="container mx-auto">

<!-- SEARCH (FULL WIDTH, INPUT + BUTTON SEPARATE) -->
<div class="mb-10 grid grid-cols-1 md:grid-cols-[1fr_auto] gap-4">
    <input
        type="text"
        id="portfolio-search"
        placeholder="Search case studies..."
        class="w-full px-6 py-4 rounded-xl border border-black"
    />
    <button
        id="portfolio-search-btn"
        class="px-8 py-4 bg-black text-white rounded-xl font-semibold">
        Search
    </button>
</div>

<!-- FILTER TABS -->
<div class="flex flex-wrap gap-3 mb-14" id="portfolio-tabs">
<?php
$tabs = [
    '' => 'All',
    'recent' => 'Recent',
    'ai' => 'AI',
    'blockchain' => 'Blockchain',
    'dating' => 'Dating',
    'gaming' => 'Gaming',
    'healthcare' => 'Healthcare',
    'healthtech' => 'HealthTech',
    'metaverse' => 'Metaverse',
    'music streaming' => 'Music Streaming',
    'nft' => 'NFT',
    'simulation game' => 'Simulation Game',
];

foreach ($tabs as $key => $label): ?>
    <button
        data-type="<?php echo esc_attr($key); ?>"
        class="portfolio-tab px-6 py-3 rounded-lg font-semibold border border-black bg-white text-black hover:bg-black hover:text-white transition">
        <?php echo esc_html($label); ?>
    </button>
<?php endforeach; ?>
</div>

<!-- GRID -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="portfolio-results"></div>

</div>
</section>

<script>
(function(){
    const searchInput = document.getElementById('portfolio-search');
    const searchBtn   = document.getElementById('portfolio-search-btn');
    const resultsBox  = document.getElementById('portfolio-results');
    const tabs        = document.querySelectorAll('.portfolio-tab');

    let activeType = '';

    function fetchResults(){
        const formData = new FormData();
        formData.append('q', searchInput.value);
        formData.append('type', activeType);
        formData.append('parent_id','<?php echo esc_js($parent_id); ?>');

        fetch(window.location.pathname + '?portfolio_ajax=1', {
            method:'POST',
            body:formData
        })
        .then(res => res.text())
        .then(html => {
            resultsBox.innerHTML = html;
        });
    }

    searchInput.addEventListener('input', fetchResults);
    searchBtn.addEventListener('click', fetchResults);

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('bg-black','text-white'));
            tab.classList.add('bg-black','text-white');
            activeType = tab.dataset.type;
            fetchResults();
        });
    });

    fetchResults();
})();
</script>

<?php get_footer(); ?>
