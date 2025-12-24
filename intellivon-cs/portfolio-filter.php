<?php
/* Template Name: Portfolio Filter */
get_header();

/* =========================
   GET PARAMETERS
========================= */
$filter = isset($_GET['type']) ? strtolower(sanitize_text_field($_GET['type'])) : '';
$search = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';
$paged  = get_query_var('paged') ? get_query_var('paged') : 1;
$parent_id = get_queried_object_id();

/* =========================
   QUERY CHILD PAGES
========================= */
$args = [
    'post_type'      => 'page',
    'posts_per_page' => 12,
    'post_parent'    => $parent_id,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$query = new WP_Query($args);
?>

<!-- =========================
     BANNER
========================= -->
<section class="relative px-5 lg:px-10 py-14 lg:py-20 w-full bg-[#0f1021]">
    <div class="container mx-auto">
        <h1 class="text-white font-bold font-urbanist text-[40px]">
            Our Portfolio
        </h1>
    </div>
</section>

<!-- =========================
     PORTFOLIO
========================= -->
<section class="px-5 lg:px-10 py-14 lg:py-20 bg-[#f4f4fa] w-full">
    <div class="container mx-auto">

        <!-- =========================
             SEARCH BOX
        ========================= -->
        <form method="get" action="<?php echo esc_url(get_permalink()); ?>" class="mb-10">
            <div class="relative w-full">
                <input
                    type="text"
                    name="q"
                    value="<?php echo esc_attr($search); ?>"
                    placeholder="Search case studies..."
                    class="w-full px-6 py-4 pr-16 rounded-xl border border-black focus:outline-none focus:ring-2 focus:ring-black text-base"
                />

                <?php if ($filter): ?>
                    <input type="hidden" name="type" value="<?php echo esc_attr($filter); ?>">
                <?php endif; ?>

                <button type="submit"
                    class="absolute right-3 top-1/2 -translate-y-1/2 px-4 py-2 bg-black text-white rounded-lg font-semibold hover:bg-black/80 transition">
                    Search
                </button>
            </div>
        </form>

        <!-- =========================
             FILTER TABS
        ========================= -->
        <div class="flex flex-wrap gap-3 mb-14">
            <?php
            $tabs = [
                '' => 'All',
                'ai' => 'AI',
                'blockchain' => 'Blockchain',
                'dating' => 'Dating',
                'gaming' => 'Gaming',
                'healthcare' => 'Healthcare',
                'healthtech' => 'HealthTech',
                'gaming' => 'Gaming',
                'metaverse' => 'Metaverse',
                'music streaming' => 'Music Streaming',
                'nft' => 'NFT',
                'simulation game' => 'Simulation Game',
            ];

            foreach ($tabs as $key => $label):

                if ($key === '') {
                    $url = get_permalink();
                } else {
                    $url = add_query_arg([
                        'type' => $key,
                        'q'    => $search
                    ], get_permalink());
                }

                $active = ($key === '' && !$filter && !$search) || ($filter === $key)
                    ? 'bg-black text-white'
                    : 'bg-white text-black';
            ?>
                <a href="<?php echo esc_url($url); ?>"
                   class="px-6 py-3 rounded-lg font-semibold border border-black transition hover:bg-black hover:text-white <?php echo $active; ?>">
                    <?php echo esc_html($label); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- =========================
             GRID
        ========================= -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php
            $found = false;

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();

                    /* =========================
                       MULTIPLE TAGS SUPPORT
                    ========================= */
                    $case_type_raw = get_post_meta(get_the_ID(), 'case_type', true);

                    if (is_array($case_type_raw)) {
                        $case_types = array_map('strtolower', $case_type_raw);
                    } else {
                        $case_types = array_map(
                            'strtolower',
                            array_filter(array_map('trim', explode(',', $case_type_raw)))
                        );
                    }

                    // FILTER
                    if ($filter && !in_array($filter, $case_types)) continue;

                    // SEARCH (TITLE)
                    if ($search && stripos(get_the_title(), $search) === false) continue;

                    $found = true;
            ?>

            <!-- =========================
                 CARD
            ========================= -->
            <div class="group bg-white rounded-xl overflow-hidden shadow transition hover:shadow-xl">

                <div class="relative overflow-hidden">
                    <?php the_post_thumbnail('large', [
                        'class' => 'w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110'
                    ]); ?>

                    <div class="absolute inset-0 bg-black/40 backdrop-blur-[1px] opacity-100 group-hover:opacity-0 transition-all duration-500"></div>

                    <!-- TAGS -->
                    <?php if (!empty($case_types)): ?>
                        <div class="absolute top-4 left-4 z-10 flex flex-wrap gap-2">
                            <?php foreach ($case_types as $tag): ?>
                                <span class="bg-white text-black text-xs font-bold px-3 py-1 rounded-full">
                                    <?php echo esc_html(strtoupper($tag)); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="p-6">
                    <h3 class="font-bold text-xl mb-4">
                        <?php the_title(); ?>
                    </h3>

                    <a href="<?php the_permalink(); ?>" target="_blank"
                       class="inline-block px-5 py-2 border border-black rounded-md font-semibold transition hover:bg-black hover:text-white">
                        Read More →
                    </a>
                </div>
            </div>

            <?php endwhile; endif; wp_reset_postdata(); ?>

            <?php if (!$found): ?>
                <p class="text-lg font-semibold col-span-full">
                    No matching case studies found.
                </p>
            <?php endif; ?>

        </div>

        <!-- =========================
             PAGINATION
        ========================= -->
        <?php if ($query->max_num_pages > 1): ?>
        <div class="mt-16 flex justify-center">
            <div class="flex gap-2 flex-wrap">
                <?php
                $pagination_args = [
                    'total'   => $query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '← Prev',
                    'next_text' => 'Next →',
                    'type' => 'array',
                ];

                if ($search) $pagination_args['add_args']['q'] = $search;
                if ($filter) $pagination_args['add_args']['type'] = $filter;

                $links = paginate_links($pagination_args);

                if ($links) {
                    foreach ($links as $link) {
                        echo '<span>' . $link . '</span>';
                    }
                }
                ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>
