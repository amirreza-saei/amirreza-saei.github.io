<?php

if (!function_exists('watson_comment')) {

    function watson_comment($comment, $args, $depth)
    {

        switch ($comment->comment_type):
            case 'pingback':
            case 'trackback':
?>

                <li <?php comment_class('post-pingback'); ?> id="li-comment-<?php comment_ID(); ?>">
                    <div class="pingback-trackback">
                        <div class="pingback ms-author-name "><?php comment_author_link(); ?></div>
                        <div class="comment-meta">
                            <?php edit_comment_link('<i class="fas fa-pencil-alt"></i> ' . esc_html__('Edit', 'watson'), '<span class="edit-link">', '</span>'); ?>
                        </div>
                    </div>
                </li>

            <?php break;
            default:
            ?>
                <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
                    <div class="author-img">
                        <?php
                        $avatar_size = 70;
                        if ('0' != $comment->comment_parent) {
                            $avatar_size = 70;
                        }
                        echo get_avatar($comment, $avatar_size);
                        ?>
                    </div>
                    <div class="comment-content">

                        <span class="comment-reply">
                            <?php comment_reply_link(array_merge($args, array(
                                'depth' => $depth,
                                'max_depth' => $args['max_depth'],
                                'reply_text' => esc_html__('Reply', 'watson') . '<i class="fas fa-reply"></i> ' ,
                            ))); ?>
                        </span>

                        <h6 class="comment-author">
                            <?php echo get_comment_author(); ?>
                        </h6>

                        <span class="comment-date">
                            <?php echo get_comment_date('F d, Y') . esc_html__(' at ', 'watson') . get_comment_time(); ?>
                        </span>

                        <div class="comment-text">
                            <?php
                            if ($comment->comment_approved == '0') {
                                echo '<em>' . esc_html__("Your comment is awaiting moderation", 'watson') . '</em><br />';
                            }
                            ?>
                            <?php comment_text(); ?>
                        </div>

                    </div>
                </li>
<?php endswitch;
    }
}

function watson_move_comment_cookies_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    $cookie_field = $fields['cookies'];
    unset($fields['cookies']);
    $fields['cookies'] = $cookie_field;

    return $fields;
}

add_filter( 'comment_form_fields', 'watson_move_comment_cookies_field_to_bottom');