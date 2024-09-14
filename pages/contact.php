<?php

include 'includes/header.php';

if ( ! isset($_SESSION['user_id']))
{
    header('Location: action.php?page=login');
}

?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-capitalize text-bg-success"> this is contact page!!! </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dicta dolorem eos ex tempore. Magni odio quae totam veniam veritatis! Eligendi expedita fugit incidunt maxime molestiae nam repudiandae sunt vero? </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dicta dolorem eos ex tempore. Magni odio quae totam veniam veritatis! Eligendi expedita fugit incidunt maxime molestiae nam repudiandae sunt vero? </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
