<?php
/**
 * Form Field Hidden block.
 *
 * @package ive
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class ive_Form_Field_Hidden_Block
 */
class ive_Form_Field_Hidden_Block {
    /**
     * ive_Form_Field_Hidden_Block constructor.
     */
    public function __construct() {
        add_action( 'init', array( $this, 'init' ) );
    }

    /**
     * Init.
     */
    public function init() {
        if ( ! function_exists( 'register_block_type' ) ) {
            return;
        }

        register_block_type(
            'ive/form-field-hidden',
            array(
                'parent'          => array( 'ive/form' ),
                'render_callback' => array( $this, 'block_render' ),
                'attributes'      => ive_Form_Field_Attributes::get_block_attributes(
                    array(
                        'label' => array(
                            'default' => esc_html__( 'Hidden', '@@text_domain' ),
                        ),
                    )
                ),
            )
        );
    }

    /**
     * Register gutenberg block output
     *
     * @param array $attributes - block attributes.
     *
     * @return string
     */
    public function block_render( $attributes ) {
        ob_start();

        $class = 'ive-form-field ive-form-field-hidden';

        if ( isset( $attributes['className'] ) ) {
            $class .= ' ' . $attributes['className'];
        }

        ?>

        <div class="<?php echo esc_attr( $class ); ?>">
            <?php
            ive_Form_Field_Label::get(
                array_merge(
                    $attributes,
                    array(
                        'removeLabel' => true,
                    )
                )
            );
            ?>

            <input type="hidden" <?php ive_Form_Field_Attributes::get( $attributes ); ?> />
        </div>

        <?php

        return ob_get_clean();
    }
}
new ive_Form_Field_Hidden_Block();
