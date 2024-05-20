<?php
function create_numbered_dropdown() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );
    $posts = get_posts($args);
    $options = array();
    foreach ($posts as $post) {
        $options[] = array(
            'label' => $post->post_title,
            'value' => $post->ID
        );
    }
    <select>
    <?php foreach ($options as $key => $option) :?>
        <option value="<?php echo $option['value'];?>"><?php echo $key + 1. '. '. $option['label'];?></option>
    <?php endforeach;?>
</select>
<?php
}
