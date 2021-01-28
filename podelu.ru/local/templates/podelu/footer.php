<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

if ($USER->isAdmin()) {
    include 'footer_new.php';
} else {
    include 'footer_old.php';
}

?>

</body>
</html>
