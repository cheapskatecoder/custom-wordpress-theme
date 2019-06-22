<style>
    .sidebar {
        width: 35%;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 70%;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }
</style>
<?php
$post_id = 9;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
?>
<div class="imgcontainer">
    <aside>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/about.png" alt="Avatar" class="avatar">
    <p style="font-family: Roboto;"><?php echo substr($content, 0, 350)."..." ?></p>
    </aside>
</div>