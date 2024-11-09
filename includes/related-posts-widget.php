<?php
class Related_Posts_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'related_posts_widget',
            'Custom Theme: Related Posts',
            array( 'description' => 'Displays related posts by category or latest added.' )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        $num_posts = ! empty( $instance['num_posts'] ) ? $instance['num_posts'] : 3;
        $show_by = ! empty( $instance['show_by'] ) ? $instance['show_by'] : 'latest';

        if ( $show_by === 'category' ) {
            if ( is_singular( 'post' ) ) {
                $current_categories = wp_get_post_terms( get_the_ID(), 'category', array( 'fields' => 'ids' ) );
            }

            $related_posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => $num_posts,
                'post__not_in'   => array( get_the_ID() ),
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'term_id',
                        'terms'    => $current_categories,
                    ),
                ),
            ) );
        } else {
            $related_posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => $num_posts,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );
        }

        if ( $related_posts->have_posts() ) : ?>
            <ul class="related-posts-list">
                <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                    <li class="related-post-item">
                        <div class="post-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'full' ); ?>
                            <?php else : ?>
                                <img src="<?php echo plugin_dir_url( __FILE__ ) . '../images/no-post.jpg'; ?>" alt="No image available">
                            <?php endif; ?>
                        </div>
                        <div class="post-details">
                            <h4 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <a href="<?php the_permalink(); ?>" class="more-button">more</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>No related posts found.</p>
        <?php endif;

        wp_reset_postdata();

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'Related Posts';
        $num_posts = ! empty( $instance['num_posts'] ) ? $instance['num_posts'] : 5;
        $show_by = ! empty( $instance['show_by'] ) ? $instance['show_by'] : 'latest';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                Title:
            </label>
            <input 
                class="widefat" 
                type="text" 
                id="<?php echo $this->get_field_id( 'title' ); ?>" 
                name="<?php echo $this->get_field_name( 'title' ); ?>" 
                value="<?php echo esc_attr( $title ); ?>" 
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'num_posts' ); ?>">
                Number of posts to show:
            </label>
            <input 
                class="widefat"  
                type="number" 
                id="<?php echo $this->get_field_id( 'num_posts' ); ?>" 
                name="<?php echo $this->get_field_name( 'num_posts' ); ?>"
                value="<?php echo esc_attr( $num_posts ); ?>" 
                min="1" max="10" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'show_by' ); ?>">
                Show posts by:
            </label>
            <select 
                class="widefat" 
                id="<?php echo $this->get_field_id( 'show_by' ); ?>" 
                name="<?php echo $this->get_field_name( 'show_by' ); ?>">
                    <option value="latest" <?php selected( $show_by, 'latest' ); ?>>
                        Latest Added
                    </option>
                    <option value="category" <?php selected( $show_by, 'category' ); ?>>
                        Same Category as Current Post
                    </option>
            </select>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ! empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['num_posts'] = ! empty( $new_instance['num_posts'] ) ? absint( $new_instance['num_posts'] ) : 5;
        $instance['show_by'] = ! empty( $new_instance['show_by'] ) ? strip_tags( $new_instance['show_by'] ) : 'latest';
        return $instance;
    }
}

function register_related_posts_widget() {
    register_widget( 'Related_Posts_Widget' );
}
add_action( 'widgets_init', 'register_related_posts_widget' );
