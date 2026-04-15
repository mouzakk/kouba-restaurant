<?php
$pageTitle   = 'Our Menu - KOUBA';
$currentPage = 'menu';

/**
 * Renders a menu section (category block).
 *
 * @param string   $emoji
 * @param string   $title
 * @param string[] $items
 * @param string   $note
 */
function menuSection(string $emoji, string $title, array $items, string $note = ''): void
{
    echo '<div class="menu_category mb-5">';
    echo '<h3 class="menu_category_title">' . $emoji . ' ' . htmlspecialchars($title) . '</h3>';
    echo '<ul class="menu_items_list">';
    foreach ($items as $item) {
        echo '<li>' . htmlspecialchars($item) . '</li>';
    }
    echo '</ul>';
    if ($note) {
        echo '<p class="menu_note"><em>' . htmlspecialchars($note) . '</em></p>';
    }
    echo '</div>';
}

require 'components/head.php';
require 'components/header.php';
?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->

    <!-- full menu start -->
    <section class="food_menu gray_bg section_padding">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section_tittle">
                        <p>The Lebanese Way</p>
                        <h2>Our Full Menu</h2>
                    </div>
                    <img src="img/kouba_images/menue.png" alt="KOUBA Menu" class="img-fluid mt-4 mb-4">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <?php menuSection('🥣', 'Soups', [
                        'Lentil Soup',
                    ]); ?>

                    <?php menuSection('🧆', 'Cold Starter Mezzes', [
                        'Hummus (classic & spicy)',
                        'Moutabal (eggplant dip)',
                        'Baba Ghanoush',
                        'Muhammara (pepper & walnut dip)',
                        'Vine Leaves (stuffed)',
                        'Greek Salad',
                        'Fattoush',
                        'Tabbouleh',
                        'Pickles & Olives',
                    ], 'Classic mezze dishes in Lebanese cuisine, often shared at the table.'); ?>

                    <?php menuSection('🧀', 'Hot Starter Mezzes', [
                        'Hummus with Lamb',
                        'Grilled Halloumi',
                        'Falafel',
                        'Batata Harra (spicy potatoes)',
                        'Chicken Liver',
                        'Kibbeh',
                        'Foul (beans)',
                    ]); ?>

                    <?php menuSection('🥙', 'Mix Cold Starters', [
                        'Mezze Platter (hummus, moutabal, baba ghanoush)',
                    ]); ?>

                    <?php menuSection('🥟', 'Other Starters', [
                        'Cheese Bourak (pastry)',
                        'Meat Bourak',
                        'Merguez Sausages',
                        'Creamy Mushrooms',
                        'Moussaka',
                        'Chicken Wings',
                    ]); ?>
                </div>
                <div class="col-lg-6">
                    <?php menuSection('🫓', 'Manakish (Lebanese Flatbread)', [
                        'Zaatar',
                        'Halloumi & Zaatar',
                        'Lahm Bi Ajin (meat flatbread)',
                        'Mohamara with Cheese',
                        'Sujuk',
                    ]); ?>

                    <?php menuSection('🔥', 'Grilled Mains', [
                        'Kafta Meshwi',
                        'Kafta Aleppo',
                        'Lahem Meshwi (lamb cubes)',
                        'Lamb Chops',
                        'Shish Tawook (chicken skewers)',
                        'Chicken Shawarma',
                        'Beef Shawarma Wrap',
                        'Mix Grill',
                        'Faruj (grilled chicken)',
                    ], 'Grilled meats like kafta and shish tawook are staples in Lebanese cuisine.'); ?>

                    <?php menuSection('🍛', 'Main Course Dishes', [
                        'Bamieh (okra stew)',
                        'Bamieh with Lamb',
                        'Moussaka',
                        'Makloubeh (upside-down rice dish)',
                        'Kebab Hindi',
                        'Chicken Kebab',
                        'Sea Bass Fillet',
                        'Salmon Fillet',
                        'Tiger Prawns',
                    ]); ?>

                    <?php menuSection('🍚', 'Sides', [
                        'Arabic Salad',
                        'Mujaddarah (rice & lentils)',
                        'Lebanese Rice',
                        'Fries',
                    ]); ?>

                    <?php menuSection('🍰', 'Desserts', [
                        'Cookies & Ice Cream',
                        'Croissant & Ice Cream',
                        'Matilda Cake',
                        'Cheesecake',
                        'Baklava & Ice Cream',
                        'Deansgate Tart',
                    ], 'Desserts like baklava are very common in Lebanese menus.'); ?>
                </div>
            </div>

        </div>
    </section>
    <!-- full menu end -->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>Taste The Lebanese Way</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg end-->

<?php require 'components/footer.php'; ?>

<style>
    .menu_category_title {
        font-size: 1.4rem;
        font-weight: 700;
        border-bottom: 2px solid #f5a623;
        padding-bottom: 8px;
        margin-bottom: 16px;
        color: #2d2d2d;
    }
    .menu_items_list {
        list-style: none;
        padding: 0;
        margin: 0 0 8px 0;
    }
    .menu_items_list li {
        padding: 6px 0;
        border-bottom: 1px dashed #e0e0e0;
        color: #555;
    }
    .menu_items_list li:last-child {
        border-bottom: none;
    }
    .menu_note {
        font-size: 0.85rem;
        color: #888;
        margin-top: 6px;
    }
</style>

<?php require 'components/scripts.php'; ?>
