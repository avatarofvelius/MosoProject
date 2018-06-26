<?php
    $page = 'Markdown';
    $page_css = '../_style/css/index.css'; // change to google docs layout .css
    $page_icon = '../_media/logo/favicon.png';
    $description = 'A Markdown Example for Novelisation by Matt T Myers.';    
?>

<?php include('../_include/_base.php') ?>

    <main>

<?php include('../_include/_header.php') ?>

        <div class="container" style="margin: 0px; background-color: #eee;">
            <div class="well" style="text-align: left; background-color: #fff; color: #050505; margin: 50px 50px 0px 50px; outline: 0px solid #eee;">

<?php // need breadcrumb to get back to bookpage -> seriespage -> literaturepage ?>

<?php include('../_dist/_html/test.html') ?>

            </div>
        </div>

<?php // need module to include next chapter / chapter list? / table of contents or outline
      // preferaby something similar to ebook % with prev/bookmark/next chapter buttons ?>
    </main>
    
<?php include('../_include/_footer.php') ?>
